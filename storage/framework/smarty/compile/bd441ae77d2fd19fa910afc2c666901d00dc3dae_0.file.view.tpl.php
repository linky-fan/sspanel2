<?php
/* Smarty version 3.1.31, created on 2017-08-06 09:51:53
  from "D:\MAMP\htdocs\easyfq\resources\views\material\admin\ticket\view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5986763916fef0_63601948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd441ae77d2fd19fa910afc2c666901d00dc3dae' => 
    array (
      0 => 'D:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\admin\\ticket\\view.tpl',
      1 => 1501984310,
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
function content_5986763916fef0_63601948 (Smarty_Internal_Template $_smarty_tpl) {
?>



<?php $_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>








	<main class="content">
		<div class="content-header ui-content-header">
			<div class="container">
				<h1 class="content-heading">查看工单</h1>
			</div>
		</div>
		<div class="container">
			<div class="col-lg-12 col-sm-12">
				<section class="content-inner margin-top-no">
				
					<div class="card">
						<div class="card-main">
							<div class="card-inner">
								<div class="form-group form-group-label">
									<label class="floating-label" for="content">内容</label>
									<link rel="stylesheet" href="/theme/material/editor/css/editormd.min.css" />
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
										<div class="col-md-6 col-md-push-3">
											<button id="submit" type="submit" class="btn btn-block btn-brand waves-attach waves-light">添加</button>
											<button id="close" type="submit" class="btn btn-block btn-brand-accent waves-attach waves-light">添加并关闭</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<?php echo $_smarty_tpl->tpl_vars['ticketset']->value->render();?>

					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ticketset']->value, 'ticket');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ticket']->value) {
?>
					<div class="card">
						<aside class="card-side pull-left"><img alt="alt text for John Smith avatar" src="<?php echo $_smarty_tpl->tpl_vars['ticket']->value->User()->gravatar;?>
"></span></br><?php echo $_smarty_tpl->tpl_vars['ticket']->value->User()->user_name;?>
</aside>
						<div class="card-main">
							<div class="card-inner">
								<p>
									类型类型:<?php echo $_smarty_tpl->tpl_vars['ticket']->value->type;?>

								</p>
								<p>
									电话:<?php echo $_smarty_tpl->tpl_vars['ticket']->value->phone;?>

								</p>
								<p>
									联系方式(QQ/邮箱):<?php echo $_smarty_tpl->tpl_vars['ticket']->value->contact;?>

								</p>
								<p>
									内容:<?php echo $_smarty_tpl->tpl_vars['ticket']->value->content;?>

								</p>



								
								
							</div>
							<div class="card-action"> <?php echo $_smarty_tpl->tpl_vars['ticket']->value->datetime();?>
</div>
						</div>
					</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

					<?php echo $_smarty_tpl->tpl_vars['ticketset']->value->render();?>

					
					
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
			$("#result").modal();
            $("#msg").html("正在提交。");
            $.ajax({
                type: "PUT",
                url: "/admin/ticket/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
",
                dataType: "json",
                data: {
                    content: editor.getHTML(),
					title: $("#title").val(),
					status:status
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
			status=1;
            submit();
        });
		
		$("#close").click(function () {
			status=0;
            submit();
        });
    });
	
    $(function() {
        editor = editormd("editormd", {
            path : "/theme/material/editor/lib/", // Autoload modules mode, codemirror, marked... dependents libs path
			height: 200,
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
<?php echo '</script'; ?>
>







<?php }
}
