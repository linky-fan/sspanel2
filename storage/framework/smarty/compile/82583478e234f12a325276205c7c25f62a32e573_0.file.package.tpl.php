<?php
/* Smarty version 3.1.31, created on 2017-08-07 21:52:31
  from "D:\MAMP\htdocs\easyfq\resources\views\material\package.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5988709f4d63c8_06449005',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82583478e234f12a325276205c7c25f62a32e573' => 
    array (
      0 => 'D:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\package.tpl',
      1 => 1502113856,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5988709f4d63c8_06449005 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<section class="package container" style="margin-top: 89px">

</section>

<div class="package_contaienr">
    <section class="index_2 container package_section">
        <h2 class="text-center">
            套餐服务
        </h2>

        <div class="package_boxs text-center ">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['package_list']->value, 'package', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['package']->value) {
?>
                <div class="package_box col-lg-5">
                    <p class="package_title"><?php echo $_smarty_tpl->tpl_vars['package']->value->name;?>
</p>
                    <hr>
					<span>
						<?php echo $_smarty_tpl->tpl_vars['package']->value->content;?>

					</span>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value%2 == 0) {?>
                        <img src="/theme/material/images/new/package_icon1.png" alt="">
                    <?php } else { ?>
                        <img src="/theme/material/images/new/package_icon2.png" alt="">
                    <?php }?>
                    <div class="package_classify">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['package']->value['data'], 'item', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
                            <div class="package_type">
                                <label style="cursor: pointer">
                                    <input type="radio" name="package_type_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value == 0) {?>checked<?php }?>
                                           auto_renew="<?php echo $_smarty_tpl->tpl_vars['item']->value->auto_renew;?>
"
                                           auto_reset_bandwidth="<?php echo $_smarty_tpl->tpl_vars['item']->value->auto_reset_bandwidth;?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>

                                </label>
                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                    </div>
                    <div class="buy_package">
                        <br>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->id) {?>
                            <a class="" href="javascript:void(0);"
                               onClick='buy("package_type_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
")'>立即购买</a>
                        <?php } else { ?>
                            <a class="" href="/auth/login">立即购买</a>
                        <?php }?>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

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
<?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php echo '<script'; ?>
>
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
                        window.setTimeout("location.href='/auth/login'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
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
                    window.setTimeout("location.href='/user'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                }
            }
        })
    }
<?php echo '</script'; ?>
><?php }
}
