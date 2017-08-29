{include file='header.tpl'}

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
                        {*<li><a href="/user/code">我的提现</a></li>*}
                        <li><a href="/user/node">节点信息</a></li>
                        <li><a href="/user/ticket">建议反馈</a></li>
                        {if $user->isAdmin()}
                            <li>
                                <a href="/admin">
                                    管理面板
                                </a>
                            </li>
                        {/if}
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

                    {include file='dialog.tpl'}
                </div>
            </div>
        </div>
    </section>
</section>


{include file='footer.tpl'}


<script>
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
                    window.setTimeout("location.href='/user/edit'", {$config['jump_delay']});
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "     出现了一些错误。");
                }
            })
        })
    })
</script>


<script>
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
                    window.setTimeout("location.href='/user/edit'", {$config['jump_delay']});
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "     出现了一些错误。");
                }
            })
        })
    })
</script>

<script>
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
                    window.setTimeout("location.href='/user/edit'", {$config['jump_delay']});
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "     出现了一些错误。");
                }
            })
        })
    })
</script>

<script src=" /assets/public/js/jquery.qrcode.min.js "></script>
<script>
    var ga_qrcode = '{$user->getGAurl()}';
    jQuery('#ga-qr').qrcode({
        "text": ga_qrcode
    });

    {if $config['enable_telegram'] == 'true'}
    var telegram_qrcode = 'mod://bind/{$bind_token}';
    jQuery('#telegram-qr').qrcode({
        "text": telegram_qrcode
    });
    {/if}
</script>


<script>
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
</script>

<script>
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
                    window.setTimeout("location.href='/user/edit'", {$config['jump_delay']});
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "     出现了一些错误。");
                }
            })
        })
    })
</script>


<script>
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
                    window.setTimeout("location.href='/user/edit'", {$config['jump_delay']});
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "     出现了一些错误。");
                }
            })
        })
    })
</script>

<script>
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
                    window.setTimeout("location.href='/user/edit'", {$config['jump_delay']});
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "     出现了一些错误。");
                }
            })
        })
    })
</script>


<script>
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
                    window.setTimeout("location.href='/user/edit'", {$config['jump_delay']});
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "     出现了一些错误。");
                }
            })
        })
    })
</script>


<script>
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
                    window.setTimeout("location.href='/user/edit'", {$config['jump_delay']});
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "     出现了一些错误。");
                }
            })
        })
    })
</script>

<script>
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
                    window.setTimeout("location.href='/user/edit'", {$config['jump_delay']});
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "     出现了一些错误。");
                }
            })
        })
    })
</script>


<script>
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
                    window.setTimeout("location.href='/user/edit'", {$config['jump_delay']});
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "     出现了一些错误。");
                }
            })
        })
    })
</script>

<script>
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
                    window.setTimeout("location.href='/user/edit'", {$config['jump_delay']});
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "     出现了一些错误。");
                }
            })
        })
    })
</script>


<script>
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
                    window.setTimeout("location.href='/user/edit'", {$config['jump_delay']});
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "     出现了一些错误。");
                }
            })
        })
    })
</script>
