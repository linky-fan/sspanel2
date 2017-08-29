<?php
/* Smarty version 3.1.31, created on 2017-08-07 10:22:49
  from "C:\MAMP\htdocs\easyfq\resources\views\material\user\footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5987cef956b831_45890612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6e3723ed7cad068773c5501e2188c21c5305fb1' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\user\\footer.tpl',
      1 => 1502024147,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5987cef956b831_45890612 (Smarty_Internal_Template $_smarty_tpl) {
?>
	<footer class="ui-footer">
		<div class="container">
			

			闪联加速器
		</div>
	</footer>
	<?php echo '<script'; ?>
 type="text/javascript" >
		function change_share(title, url){
			jiathis_config.title = title;
			jiathis_config.url = url;
		}
		var jiathis_config={
			shortUrl:false,
			hideMore:false,
			url: "",
			title: "",
			summary:""
		};
	<?php echo '</script'; ?>
>
	<!-- js -->
	<?php echo '<script'; ?>
 src="//cdn.staticfile.org/jquery/2.2.1/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="//cdn.staticfile.org/jquery-validate/1.15.0/jquery.validate.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="//static.geetest.com/static/tools/gt.js"><?php echo '</script'; ?>
>
	
	<?php echo '<script'; ?>
 src="/theme/material/js/base.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/theme/material/js/project.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.16/clipboard.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=2138764" charset="utf-8"><?php echo '</script'; ?>
>
	</body>
</html><?php }
}
