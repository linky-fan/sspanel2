<?php
/* Smarty version 3.1.31, created on 2017-08-07 10:22:49
  from "C:\MAMP\htdocs\easyfq\resources\views\material\user\nodeinfo_new.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5987cef9519792_71011071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '439e7256b9b26ce752d2f0f2739ec3f5d2a996d8' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\user\\nodeinfo_new.tpl',
      1 => 1501303626,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/header_info.tpl' => 1,
    'file:user/footer.tpl' => 1,
  ),
),false)) {
function content_5987cef9519792_71011071 (Smarty_Internal_Template $_smarty_tpl) {
?>



<?php $_smarty_tpl->_subTemplateRender('file:user/header_info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<main class="content">
		<div class="container">
			<section class="content-inner margin-top-no">
				<div class="ui-card-wrap">
					<div class="row">
						<div class="col-lg-12 col-sm-12">
							<div class="text-center">
								<div id="ss-qr-n"></div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</main>
<?php $_smarty_tpl->_subTemplateRender('file:user/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="/assets/public/js/jquery.qrcode.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	var text_qrcode2 = '<?php echo $_smarty_tpl->tpl_vars['ssqr_s_new']->value;?>
';
	jQuery('#ss-qr-n').qrcode({
		"text": text_qrcode2
	});
<?php echo '</script'; ?>
>
<?php }
}
