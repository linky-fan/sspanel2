<?php
/* Smarty version 3.1.31, created on 2017-08-07 10:06:48
  from "C:\MAMP\htdocs\easyfq\resources\views\material\admin\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5987cb387500c2_05957411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e84d5c9694fd05b2a476892e872d0e2bb5bd9ff4' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\admin\\footer.tpl',
      1 => 1490688162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:analytics.tpl' => 1,
  ),
),false)) {
function content_5987cb387500c2_05957411 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<footer class="ui-footer" style="position:relative">
		<div class="container">
			&copy; <?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
  <a href="/staff">STAFF</a> <?php if ($_smarty_tpl->tpl_vars['config']->value["enable_analytics_code"] == 'true') {
$_smarty_tpl->_subTemplateRender('file:analytics.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
		</div>
	</footer>

	<!-- js -->
	<?php echo '<script'; ?>
 src="//cdn.staticfile.org/jquery/2.2.1/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="//cdn.staticfile.org/jquery-validate/1.15.0/jquery.validate.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="//cdn.staticfile.org/datatables/1.10.13/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="//cdn.staticfile.org/datatables/1.10.13/js/dataTables.material.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/theme/material/js/base.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/theme/material/js/project.js"><?php echo '</script'; ?>
>


</body>
</html>
<?php }
}
