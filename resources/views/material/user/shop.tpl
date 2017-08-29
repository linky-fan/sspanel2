{include file='user/main.tpl'}


<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">商品列表</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-sm-12">
            <section class="content-inner margin-top-no">

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">
                            <p>系统中所有商品的列表。您购买等级类的商品时有效期会从当前时间开始计算。</p>

                            <p>当前余额：{$user->money} 元</p>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    {$shops->render()}
                    <table class="table ">
                        <tr>
                            <th>操作</th>
                            <th>ID</th>
                            <th>名称</th>
                            <th>价格</th>
                            <th>内容</th>
                            <th>自动续费天数</th>
                            <th>续费时重置流量</th>

                        </tr>
                        {foreach $shops as $shop}
                            <tr>
                                <td>
                                    <a class="btn btn-brand-accent" href="javascript:void(0);"
                                       onClick="buy('{$shop->id}',{$shop->auto_renew},{$shop->auto_reset_bandwidth})">购买</a>
                                </td>
                                <td>#{$shop->id}</td>
                                <td>{$shop->name}</td>
                                <td>{$shop->price} 元</td>
                                <td>{$shop->content()}</td>
                                {if $shop->auto_renew==0}
                                    <td>不能自动续费</td>
                                {else}
                                    <td>可选 在 {$shop->auto_renew} 天后自动续费</td>
                                {/if}

                                {if $shop->auto_reset_bandwidth==0}
                                    <td>不自动重置</td>
                                {else}
                                    <td>自动重置</td>
                                {/if}

                            </tr>
                        {/foreach}
                    </table>
                    {$shops->render()}
                </div>




                <div aria-hidden="true" class="modal modal-va-middle fade" id="wxpay_modal" role="dialog" tabindex="-1">
                    <div class="modal-dialog modal-xs">
                        <div class="modal-content">
                            <div class="modal-heading">
                                <a class="modal-close" data-dismiss="modal">×</a>

                                <h2 class="modal-title">微信扫一扫</h2>
                            </div>
                            <div class="modal-inner" style="height: 250px">
                                <div class="form-group form-group-label text-center" id="qrcode">
                                </div>
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                    </div>
                </div>


                <div aria-hidden="true" class="modal modal-va-middle fade" id="order_modal" role="dialog" tabindex="-1">
                    <div class="modal-dialog modal-xs">
                        <div class="modal-content">
                            <div class="modal-heading">
                                <a class="modal-close" data-dismiss="modal">×</a>

                                <h2 class="modal-title">订单确认</h2>
                            </div>
                            <div class="modal-inner">
                                <p id="name">商品名称：</p>
                                <p id="name_val" class="hide"></p>
                                <p id="total">总金额：</p>
                                <p id="total_val"  class="hide"></p>
                                <p id="auto_reset">在到期时自动续费</p>
                                <div class="checkbox switch" id="autor">
                                    <label for="autorenew">
                                        <input checked class="access-hide" id="autorenew" type="checkbox"><span
                                                class="switch-toggle"></span>自动续费
                                    </label>
                                </div>
                                <div class="form-group form-group-label">
                                    <label>
                                        <input type="checkbox" name="is_deductible" id="is_deductible">
                                        是否使用奖励金抵扣
                                    </label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <p class="text-right">
                                    <button class="btn btn-flat btn-brand waves-attach" data-dismiss="modal"
                                            id="order_input" type="button">确定
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                {include file='dialog.tpl'}
        </div>


    </div>
</main>


{include file='user/footer.tpl'}


<script>
    function buy(id, auto, auto_reset) {
        auto_renew = auto;
        if (auto == 0) {
            document.getElementById('autor').style.display = "none";
        }
        else {
            document.getElementById('autor').style.display = "";
        }
        if (auto_reset == 0) {
            document.getElementById('auto_reset').style.display = "none";
        }
        else {
            document.getElementById('auto_reset').style.display = "";
        }

        shop = id;
        $.ajax({
            type: "POST",
            url: "coupon_check",
            dataType: "json",
            data: {
                coupon: $("#coupon").val(),
                shop: shop
            },
            success: function (data) {
                if (data.ret) {
                    $("#name").html("商品名称：" + data.name);
                    $("#total").html("总金额：" + data.total);
                    $("#order_modal").modal();
                } else {
                    $("#result").modal();
                    $("#msg").html(data.msg);
                }
            },
            error: function (jqXHR) {
                $("#result").modal();
                $("#msg").html(data.msg + "  发生了错误。");
            }
        })
        $("#order_modal").modal();
    }
    //    微信支付模态框
    $("#order_input").click(function () {
        if ($('#is_deductible').is(':checked')){
            var is_deductible = 1;
        }else{
            var is_deductible = 0
        }
        if (document.getElementById('autorenew').checked) {
            var autorenew = 1;
        }
        else {
            var autorenew = 0;
        }
        $.ajax({
            type: "POST",
            url: "wx_pay",
            dataType: "json",
            data: {
                is_deductible: is_deductible,
                shop: shop,
                autorenew: autorenew
            },
            success: function (data) {
                if (data.ret == 4) {
                    var qrcode ='<img style="width: 250px;" src="http://paysdk.weixin.qq.com/example/qrcode.php?data='+data.msg+'" >';
                    $("#qrcode").html(qrcode);
                    $("#wxpay_modal").modal();
                    var num = data.num
                    window.setInterval("look_result("+num+")", 5000);
                } else {
                    $("#result").modal();
                    $("#msg").html(data.msg);
                }
            },
            error: function (jqXHR) {
                $("#result").modal();
                $("#msg").html(data.msg + "  发生了错误。");
            }
        });
    });

    function look_result(num){
        $.ajax({
            type: "POST",
            url: "look_result",
            dataType: "json",
            data: {
                buy_num: num,
                shop: shop
            },
            success: function (data) {
                if (data.ret == 5) {
                    $("#result").modal();
                    $("#msg").html(data.msg);
                    window.setTimeout("location.href='/user/shop'", {$config['jump_delay']});
                }
            }
        })
    }
</script>