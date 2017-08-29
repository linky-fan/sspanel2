<?php
/* Smarty version 3.1.31, created on 2017-07-29 23:06:44
  from "D:\MAMP\htdocs\easyfq\resources\views\material\admin\invite.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597ca484a93ac4_08489530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4b325f77bcb5db85fd51408de0c4e4c14b77993' => 
    array (
      0 => 'D:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\admin\\invite.tpl',
      1 => 1490688162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/main.tpl' => 1,
    'file:table/checkbox.tpl' => 1,
    'file:table/table.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:admin/footer.tpl' => 1,
    'file:table/js_1.tpl' => 1,
    'file:table/js_2.tpl' => 1,
  ),
),false)) {
function content_597ca484a93ac4_08489530 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>








<main class="content">
	<div class="content-header ui-content-header">
		<div class="container">
			<h1 class="content-heading">邀请</h1>
		</div>
	</div>
	<div class="container">
		<section class="content-inner margin-top-no">

			<div class="card">
				<div class="card-main">
					<div class="card-inner">
						<p>公共邀请码（类别为0的邀请码）请<a href="/code">在这里查看</a>。</p>
					</div>
				</div>
			</div>


			<div class="card">
				<div class="card-main">
					<div class="card-inner">
						<div class="form-group form-group-label">
							<label class="floating-label" for="prefix">邀请码前缀</label>
							<input class="form-control" id="prefix" type="text">
						</div>

						<div class="form-group form-group-label">
							<label class="floating-label" for="uid">邀请码类别(0为公开，其他数字为对应用户的ID，或者输入用户的完整邮箱)</label>
							<input class="form-control" id="uid" type="text">
						</div>

						<div class="form-group form-group-label">
							<label class="floating-label" for="prefix">邀请码数量</label>
							<input class="form-control" id="num" type="number">
						</div>


					</div>

					<div class="card-action">
						<div class="card-action-btn pull-left">
							<a class="btn btn-flat waves-attach" id="invite"><span class="icon">check</span>&nbsp;生成</a>
						</div>
					</div>
				</div>
			</div>

			<div class="card margin-bottom-no">
				<div class="card-main">
					<div class="card-inner">
						<p class="card-heading">返利记录</p>
						<p>显示表项: <?php $_smarty_tpl->_subTemplateRender('file:table/checkbox.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

						</p>
						<div class="card-table">
							<div class="table-responsive">
								<?php $_smarty_tpl->_subTemplateRender('file:table/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

							</div>
						</div>


					</div>
				</div>
			</div>

			<?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



	</div>



</main>










<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:table/js_1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


$("#invite").click(function () {
    $.ajax({
        type: "POST",
        url: "/admin/invite",
        dataType: "json",
        data: {
            prefix: $("#prefix").val(),
            uid: $("#uid").val(),
            num: $("#num").val()
        },
        success: function (data) {
            if (data.ret) {
                $("#result").modal();
                $("#msg").html(data.msg);
                window.setTimeout("location.href='/admin/invite'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
						}
            else
						{
							$("#result").modal();
	                        $("#msg").html(data.msg+"。");
						}

            // window.location.reload();
        },
        error: function (jqXHR) {
            alert("发生错误：" + jqXHR.status);
        }
    })
});

$(document).ready(function(){
 	<?php $_smarty_tpl->_subTemplateRender('file:table/js_2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

});
<?php echo '</script'; ?>
>
<?php }
}
