<?php
/* Smarty version 3.1.31, created on 2017-08-06 19:48:01
  from "D:\MAMP\htdocs\easyfq\resources\views\material\user\edit_new.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598701f1e67c71_80704210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd188eefda78b126f9a4449b0c49672e3923d1f98' => 
    array (
      0 => 'D:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\user\\edit_new.tpl',
      1 => 1502020078,
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
function content_598701f1e67c71_80704210 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<section class="index_2">
    <section class="question">
        <div class="container">
            <div class="col-md-3 left text-center">
                <div class="left-box">
                    <ul>
                        <li>
                            <div class="user_info">个人中心</div>
                        </li>
                        <li><a href="/user">我的资料</a></li>
                        <li><a class="active" href="/user/edit">修改密码</a></li>
                        <li><a href="/user/invite">我的邀请</a></li>
                        <li><a href="/user/bought">购买记录</a></li>
                        
                        <li><a href="/user/node">节点信息</a></li>
                        <li><a href="/user/ticket">建议反馈</a></li>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->isAdmin()) {?>
                            <li>
                                <a href="/admin">
                                    管理面板
                                </a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 right">
                <div class="title">密码修改</div>
                <div class="right-box">
                    <div class="col-lg-6 col-md-push-3">
                        <div class="card margin-bottom-no">
                            <div class="card-main">
                                <div class="card-inner">
                                    <div class="card-inner">
                                        <p class="card-heading">修改密码</p>
                                        <div class="form-group form-group-label">
                                            <label class="floating-label" for="oldpwd">当前密码</label>
                                            <input class="form-control" id="oldpwd" type="password">
                                        </div>

                                        <div class="form-group form-group-label">
                                            <label class="floating-label" for="pwd">新密码</label>
                                            <input class="form-control" id="pwd" type="password">
                                        </div>

                                        <div class="form-group form-group-label">
                                            <label class="floating-label" for="repwd">确认新密码</label>
                                            <input class="form-control" id="repwd" type="password">
                                        </div>
                                    </div>
                                    <div class="card-action">
                                        <div class="card-action-btn pull-left">
                                            <button class="btn btn-flat waves-attach" id="pwd-update">&nbsp;提交
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class=" col-lg-12">  <br></p>

                    <?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                </div>
            </div>
        </div>
    </section>
</section>


<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#portreset").click(function () {
            $.ajax({
                type: "POST",
                url: "resetport",
                dataType: "json",
                data: {},
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    } else {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    }
                    window.setTimeout("location.href='/user/edit'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "     出现了一些错误。");
                }
            })
        })
    })
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#setpac").click(function () {
            $.ajax({
                type: "POST",
                url: "pacset",
                dataType: "json",
                data: {
                    pac: $("#pac").val()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    } else {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    }
                    window.setTimeout("location.href='/user/edit'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "     出现了一些错误。");
                }
            })
        })
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#pwd-update").click(function () {
            $.ajax({
                type: "POST",
                url: "password",
                dataType: "json",
                data: {
                    oldpwd: $("#oldpwd").val(),
                    pwd: $("#pwd").val(),
                    repwd: $("#repwd").val()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    } else {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    }
                    window.setTimeout("location.href='/user/edit'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "     出现了一些错误。");
                }
            })
        })
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src=" /assets/public/js/jquery.qrcode.min.js "><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    var ga_qrcode = '<?php echo $_smarty_tpl->tpl_vars['user']->value->getGAurl();?>
';
    jQuery('#ga-qr').qrcode({
        "text": ga_qrcode
    });

    <?php if ($_smarty_tpl->tpl_vars['config']->value['enable_telegram'] == 'true') {?>
    var telegram_qrcode = 'mod://bind/<?php echo $_smarty_tpl->tpl_vars['bind_token']->value;?>
';
    jQuery('#telegram-qr').qrcode({
        "text": telegram_qrcode
    });
    <?php }
echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#wechat-update").click(function () {
            $.ajax({
                type: "POST",
                url: "wechat",
                dataType: "json",
                data: {
                    wechat: $("#wechat").val(),
                    imtype: $("#imtype").val()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    } else {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    }
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "     出现了一些错误。");
                }
            })
        })
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#ssr-update").click(function () {
            $.ajax({
                type: "POST",
                url: "ssr",
                dataType: "json",
                data: {
                    protocol: $("#protocol").val(),
                    obfs: $("#obfs").val()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    } else {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    }
                    window.setTimeout("location.href='/user/edit'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "     出现了一些错误。");
                }
            })
        })
    })
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#relay-update").click(function () {
            $.ajax({
                type: "POST",
                url: "relay",
                dataType: "json",
                data: {
                    relay_enable: $("#relay_enable").val(),
                    relay_info: $("#relay_info").val()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    } else {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    }
                    window.setTimeout("location.href='/user/edit'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "     出现了一些错误。");
                }
            })
        })
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#unblock").click(function () {
            $.ajax({
                type: "POST",
                url: "unblock",
                dataType: "json",
                data: {},
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    } else {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    }
                    window.setTimeout("location.href='/user/edit'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "     出现了一些错误。");
                }
            })
        })
    })
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#ga-test").click(function () {
            $.ajax({
                type: "POST",
                url: "gacheck",
                dataType: "json",
                data: {
                    code: $("#code").val()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    } else {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    }
                    window.setTimeout("location.href='/user/edit'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "     出现了一些错误。");
                }
            })
        })
    })
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#ga-set").click(function () {
            $.ajax({
                type: "POST",
                url: "gaset",
                dataType: "json",
                data: {
                    enable: $("#ga-enable").val()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    } else {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    }
                    window.setTimeout("location.href='/user/edit'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "     出现了一些错误。");
                }
            })
        })
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#ss-pwd-update").click(function () {
            $.ajax({
                type: "POST",
                url: "sspwd",
                dataType: "json",
                data: {
                    sspwd: $("#sspwd").val()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
                        $("#msg").html("成功了");
                    } else {
                        $("#result").modal();
                        $("#msg").html("失败了");
                    }
                    window.setTimeout("location.href='/user/edit'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "     出现了一些错误。");
                }
            })
        })
    })
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#mail-update").click(function () {
            $.ajax({
                type: "POST",
                url: "mail",
                dataType: "json",
                data: {
                    mail: $("#mail").val()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    } else {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    }
                    window.setTimeout("location.href='/user/edit'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "     出现了一些错误。");
                }
            })
        })
    })
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#theme-update").click(function () {
            $.ajax({
                type: "POST",
                url: "theme",
                dataType: "json",
                data: {
                    theme: $("#theme").val()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    } else {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    }
                    window.setTimeout("location.href='/user/edit'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "     出现了一些错误。");
                }
            })
        })
    })
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#method-update").click(function () {
            $.ajax({
                type: "POST",
                url: "method",
                dataType: "json",
                data: {
                    method: $("#method").val()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
                        $("#msg").html("成功了");
                    } else {
                        $("#result").modal();
                        $("#msg").html("失败了");
                    }
                    window.setTimeout("location.href='/user/edit'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "     出现了一些错误。");
                }
            })
        })
    })
<?php echo '</script'; ?>
>
<?php }
}
