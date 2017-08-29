<?php
/* Smarty version 3.1.31, created on 2017-07-29 17:07:50
  from "D:\MAMP\htdocs\easyfq\resources\views\material\404.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597c50666c9502_57312042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ef78edfbcc6b955512fd8e2dfa7c06fb90dfd83' => 
    array (
      0 => 'D:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\404.tpl',
      1 => 1490688162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_597c50666c9502_57312042 (Smarty_Internal_Template $_smarty_tpl) {
?>





<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



	<main class="content">
		<div class="content-header ui-content-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-lg-push-0 col-sm-12 col-sm-push-0">
						<h1 class="content-heading">404</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
						<section class="content-inner margin-top-no">

							<div class="card">
								<div class="card-main">
									<div class="card-inner">
										<p>您试图访问的页面不存在。如果您认为这个错误不该发生，<a href="https://github.com/glzjin/ss-panel-v3-mod/issues">请到 Github 提交 issue</a>。</p>
									</div>
									
									<div class="card-action">
										<div class="card-action-btn pull-left">
											<a class="btn btn-flat waves-attach" href="javascript:history.back()"><span class="icon">backspace</span>&nbsp;返回</a>
										</div>
									</div>
									
								</div>
							</div>
								
							<div class="card">
								<div class="card-main">
									<div class="card-inner">
											<div class="card-img">
												<img src="<?php echo $_smarty_tpl->tpl_vars['pic']->value;?>
" style="width: 100%;">
											</div>
									</div>
									
								</div>
							</div>
							

		
							
						</section>
			
			
			
		</div>
	</main>


<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
