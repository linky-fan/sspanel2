<?php
/* Smarty version 3.1.31, created on 2017-07-29 17:32:52
  from "D:\MAMP\htdocs\easyfq\resources\views\material\admin\ticket\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597c564492d4d7_18737797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '775078925c190a319c05f39394d0c592caf89f1f' => 
    array (
      0 => 'D:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\admin\\ticket\\index.tpl',
      1 => 1490688162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/main.tpl' => 1,
    'file:table/checkbox.tpl' => 1,
    'file:table/table.tpl' => 1,
    'file:admin/footer.tpl' => 1,
    'file:table/js_1.tpl' => 1,
    'file:table/js_2.tpl' => 1,
  ),
),false)) {
function content_597c564492d4d7_18737797 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php $_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>








<main class="content">
	<div class="content-header ui-content-header">
		<div class="container">
			<h1 class="content-heading">工单</h1>
		</div>
	</div>
	<div class="container">
		<div class="col-lg-12 col-sm-12">
			<section class="content-inner margin-top-no">

				<div class="card">
					<div class="card-main">
						<div class="card-inner">
							<p>系统中的工单</p>
              <p>显示表项:
                <?php $_smarty_tpl->_subTemplateRender('file:table/checkbox.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

              </p>
						</div>
					</div>
				</div>

				<div class="table-responsive">
					<?php $_smarty_tpl->_subTemplateRender('file:table/table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				</div>



		</div>



	</div>
</main>






<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php echo '<script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender('file:table/js_1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

$(document).ready(function(){
  table = $('#table_tickets').DataTable({
		ajax: 'ticket/ajax',
		processing: true,
		serverSide: true,
		order: [[ 1, 'desc' ]]
	})

	<?php $_smarty_tpl->_subTemplateRender('file:table/js_2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

});
<?php echo '</script'; ?>
>
<?php }
}
