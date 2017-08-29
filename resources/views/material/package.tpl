{include file='header.tpl'}


<section class="package container" style="margin-top: 89px">

</section>

<div class="package_contaienr">
    <section class="index_2 container package_section">
        <h2 class="text-center">
            套餐服务
        </h2>

        <div class="package_boxs text-center ">
            {foreach $package_list as $key => $package}
                <div class="package_box col-lg-5">
                    <p class="package_title">{$package->name}</p>
                    <hr>
					<span>
						{$package->content}
					</span>
                    {if $key%2 == 0}
                        <img src="/theme/material/images/new/package_icon1.png" alt="">
                    {else}
                        <img src="/theme/material/images/new/package_icon2.png" alt="">
                    {/if}
                    <div class="package_classify">
                        {foreach $package['data'] as $k => $item}
                            <div class="package_type">
                                <label style="cursor: pointer">
                                    <input type="radio" name="package_type_{$key}" value="{$item->id}" {if $k == 0}checked{/if}
                                           auto_renew="{$item->auto_renew}"
                                           auto_reset_bandwidth="{$item->auto_reset_bandwidth}">
                                    {$item->name}
                                </label>
                            </div>
                        {/foreach}
                    </div>
                    <div class="buy_package">
                        <br>
                        {if $user->id}
                            <a class="" href="javascript:void(0);"
                               onClick='buy("package_type_{$key}")'>立即购买</a>
                        {else}
                            <a class="" href="/auth/login">立即购买</a>
                        {/if}
                    </div>
                </div>
            {/foreach}
        </div>
    </section>
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


                <p id="total">总金额：</p>


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
{include file='footer.tpl'}


<script>
    function buy(name) {
//		id, auto, auto_reset
        var buy = $("input[name="+name+"]:checked");
        var auto = 0;
        var auto_reset = buy.attr('auto_reset_bandwidth');
        var id = buy.val();
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
            url: "user/coupon_check",
            dataType: "json",
            data: {
                coupon: $("#coupon").val(),
                shop: shop
            },
            success: function (data) {
                if (data.ret) {
                    if (data.ret == 3) {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                        window.setTimeout("location.href='/auth/login'", {$config['jump_delay']});
                    } else {
                        $("#name").html("商品名称：" + data.name);
                        $("#total").html("总金额：" + data.total);
                        $("#order_modal").modal();
                    }
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
        if ($('#is_deductible').is(':checked')) {
            var is_deductible = 1;
        } else {
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
            url: "user/wx_pay",
            dataType: "json",
            data: {
                is_deductible: is_deductible,
                shop: shop,
                autorenew: autorenew
            },
            success: function (data) {
                if (data.ret == 4) {
                    var qrcode = '<img style="width: 250px;" src="http://paysdk.weixin.qq.com/example/qrcode.php?data=' + data.msg + '" >';
                    $("#qrcode").html(qrcode);
                    $("#wxpay_modal").modal();
                    var num = data.num
                    window.setInterval("look_result(" + num + ")", 5000);
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

    function look_result(num) {
        $.ajax({
            type: "POST",
            url: "user/look_result",
            dataType: "json",
            data: {
                buy_num: num,
                shop: shop
            },
            success: function (data) {
                if (data.ret == 5) {
                    $("#result").modal();
                    $("#msg").html(data.msg);
                    window.setTimeout("location.href='/user'", {$config['jump_delay']});
                }
            }
        })
    }
</script>