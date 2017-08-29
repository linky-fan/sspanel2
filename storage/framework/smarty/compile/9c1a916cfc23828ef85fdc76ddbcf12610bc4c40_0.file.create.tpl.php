<?php
/* Smarty version 3.1.31, created on 2017-07-31 19:47:22
  from "D:\MAMP\htdocs\easyfq\resources\views\material\admin\question\create.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597f18ca2dd306_04246423',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c1a916cfc23828ef85fdc76ddbcf12610bc4c40' => 
    array (
      0 => 'D:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\admin\\question\\create.tpl',
      1 => 1501163770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/main.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_597f18ca2dd306_04246423 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<main class="content">
    <div class="content-header ui-content-header">
        <div class="container">
            <h1 class="content-heading">添加问题</h1>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-md-12">
            <br>
            <br>
            <br>

            <div class="form-group form-group-label">
                <label class="floating-label" for="oldpwd">标题</label>
                <input class="form-control" id="name" type="text">
            </div>

            <div class="form-group form-group-label">
                <label class="floating-label" for="class">问题分类</label>
                <select class="form-control" id="question_type">
                    <option value="1">新手教程</option>
                    <option value="2">免费试用</option>
                    <option value="3">支付问题</option>
                    <option value="4">账号问题</option>
                    <option value="5">邀请推荐</option>
                </select>
            </div>

            <section class="content-inner margin-top-no">

                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">

                            <div class="form-group form-group-label">
                                <label class="floating-label" for="content">内容</label>
                                <link rel="stylesheet" href="/theme/material/editor/css/editormd.min.css"/>
                                <div id="editormd">
                                    <textarea style="display:none;" id="content"></textarea>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-main">
                        <div class="card-inner">

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-10 col-md-push-1">
                                        <button id="submit" type="submit"
                                                class="btn btn-block btn-brand waves-attach waves-light">添加
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>


    </div>
</main>


<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
 src="/theme/material/editor/editormd.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).ready(function () {
        function submit() {
            $.ajax({
                type: "POST",
                url: "/admin/question_add",
                dataType: "json",
                data: {
                    name: $("#name").val(),
                    content: editor.getHTML(),
                    markdown: editor.getMarkdown(),
                    type:$("#question_type").val()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                        window.setTimeout("location.href=top.document.referrer", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
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

    $(function () {
        editor = editormd("editormd", {
            path: "/theme/material/editor/lib/", // Autoload modules mode, codemirror, marked... dependents libs path
            height: 720,
            saveHTMLToTextarea: true
        });

        /*
         // or
         var editor = editormd({
         id   : "editormd",
         path : "../lib/"
         });
         */
    });
<?php echo '</script'; ?>
><?php }
}
