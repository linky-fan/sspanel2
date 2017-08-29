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
                        <li><a class="active" href="/user">我的资料</a></li>
                        <li><a href="/user/edit">修改密码</a></li>
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
                <div class="title">我的资料</div>
                <div class="right-box"  style="padding-left: 45px;">
                    <p class=" col-lg-12">
                        <div class="col-lg-2">用户名:</div>
                        <div class="col-lg-4">{$user->user_name}</div>
                        <div class="col-lg-2"><a href="javascript:void(0);" onclick="edit_name({$user->id})">修改昵称</a></div>
                    </p>
                    <p class=" col-lg-12">
                        <div class="col-lg-2">邮箱:</div>
                        <div class="col-lg-4">{$user->email}</div>
                    </p>
                    <p class=" col-lg-12">
                        <div class="col-lg-2">密码:</div>
                        <div class="col-lg-4">{$user->passwd}</div>
                        <div class="col-lg-2"><a href="/user/edit">修改密码</a></div>
                    </p>
                    <p class=" col-lg-12">
                        <div class="col-lg-2">剩余套餐:</div>
                        <div class="col-lg-4"><span style="color: red">{$user->expire_in}</span>到期
                            <br>剩余流量: <span style="color: red">{$user->unusedTraffic()}</span>
                        </div>
                        <div class="col-lg-2"><a href="/package">马上续费</a></div>
                    </p>
                    <p class=" col-lg-12">  <br></p>
                    {include file='dialog.tpl'}
                </div>
            </div>
        </div>
    </section>
</section>

<div aria-hidden="true" class="modal modal-va-middle fade" id="edit_name_modal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-xs">
        <div class="modal-content">
            <div class="modal-heading">
                <a class="modal-close" data-dismiss="modal">×</a>

                <h2 class="modal-title">修改昵称</h2>
            </div>
            <div class="modal-inner">
                <div class="form-group form-group-label">
                    <label class="floating-label" for="oldpwd">当前昵称</label>
                    <input class="form-control" id="name" type="text" value="{$user->user_name}">
                </div>
            </div>
            <div class="modal-footer">
                <p class="text-right">
                    <button class="btn btn-flat btn-brand waves-attach" data-dismiss="modal"
                            id="name_input" type="button">确定
                    </button>
                </p>
            </div>
        </div>
    </div>
</div>

{include file='footer.tpl'}
<script>
    function edit_name(id){
        $("#edit_name_modal").modal();
        $("#name_input").click(function () {
            $.ajax({
                type: "POST",
                url: "/user/edit_name",
                dataType: "json",
                data: {
                    user_name: $("#name").val(),
                    id:id
                },
                success: function (data) {
                    $("#result").modal();
                    $("#msg").html(data.msg);
                    window.setTimeout("location.href='/user'", {$config['jump_delay']});
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "  发生了错误。");
                }
            });
        });
    }
</script>