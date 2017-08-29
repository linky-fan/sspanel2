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
                        <li><a href="/user/edit">修改密码</a></li>
                        <li><a href="/user/invite">我的邀请</a></li>
                        <li><a href="/user/bought">购买记录</a></li>
                        {*<li><a href="/user/code">我的提现</a></li>*}
                        <li><a href="/user/node">节点信息</a></li>
                        <li><a class="active" href="/user/ticket">建议反馈</a></li>
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
                <div class="title">建议反馈</div>
                <div class="right-box">
                    <div class="col-lg-12 col-sm-12">
                        <section class="content-inner margin-top-no">
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="title">标题</label>
                                <input class="form-control" id="title" type="text">
                            </div>
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="contact">联系方式(QQ/邮箱)</label>
                                <input class="form-control" id="contact" type="text">
                            </div>
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="phone">联系电话</label>
                                <input class="form-control" id="phone" type="text">
                            </div>
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="class">反馈类型</label>
                                <select class="form-control" id="imtype" name="type">
                                    <option value="意见反馈">意见反馈</option>
                                    <option value="技术反馈">技术反馈</option>
                                </select>
                            </div>
                            <div class="form-group form-group-label">
                                <label class="floating-label" for="content">内容</label>
                                <link rel="stylesheet" href="/theme/material/editor/css/editormd.min.css"/>
                                <div id="editormd">
                                    <textarea style="display:none;" id="content"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-10 col-md-push-1">
                                        <button id="submit" type="submit"
                                                class="btn btn-block btn-brand waves-attach waves-light">提交
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    {include file='dialog.tpl'}
                    <p class=" col-lg-12"><br></p>
                </div>
            </div>
        </div>
    </section>
</section>


{include file='footer.tpl'}


<script src="/theme/material/editor/editormd.min.js"></script>
<script>
    $(document).ready(function () {
        function submit() {
            $("#result").modal();
            $("#msg").html("正在提交。");
            $.ajax({
                type: "POST",
                url: "/user/ticket",
                dataType: "json",
                data: {
                    content: editor.getHTML(),
                    title: $("#title").val(),
                    contact: $("#contact").val(),
                    phone: $("#phone").val(),
                    type: $("#imtype").val()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                        window.setTimeout("location.href='/user/ticket'", {$config['jump_delay']});
                    } else {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    }
                },
                error: function (jqXHR) {
                    $("#msg-error").hide(10);
                    $("#msg-error").show(100);
                    $("#msg-error-p").html("发生错误：" + jqXHR.status);
                }
            });
        }

        $("#submit").click(function () {
            submit();
        });
    });

    $(function() {
        editor = editormd("editormd", {
            path : "/theme/material/editor/lib/", // Autoload modules mode, codemirror, marked... dependents libs path
            height: 400,
            saveHTMLToTextarea : true
        });

        /*
         // or
         var editor = editormd({
         id   : "editormd",
         path : "../lib/"
         });
         */
    });
</script>









