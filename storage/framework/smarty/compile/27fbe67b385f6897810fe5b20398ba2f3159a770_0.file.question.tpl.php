<?php
/* Smarty version 3.1.31, created on 2017-08-07 10:06:54
  from "C:\MAMP\htdocs\easyfq\resources\views\material\question.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5987cb3e9d20c8_87003351',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27fbe67b385f6897810fe5b20398ba2f3159a770' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\question.tpl',
      1 => 1501985272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5987cb3e9d20c8_87003351 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>





<section class="index_2">
	<section class="question">
		<div class="container">
			<div class="col-md-3 left text-center">
				<div class="left-box">
					<ul>

						<li><a <?php if ($_smarty_tpl->tpl_vars['id']->value == 1) {?>class="active"<?php }?> href="/question">新手教程</a></li>
						<li><a <?php if ($_smarty_tpl->tpl_vars['id']->value == 2) {?>class="active"<?php }?>  href="/question/2">免费试用</a></li>
						<li><a <?php if ($_smarty_tpl->tpl_vars['id']->value == 3) {?>class="active"<?php }?> href="/question/3">支付问题</a></li>
						<li><a <?php if ($_smarty_tpl->tpl_vars['id']->value == 4) {?>class="active"<?php }?> href="/question/4">账号问题</a></li>
						<li><a <?php if ($_smarty_tpl->tpl_vars['id']->value == 5) {?>class="active"<?php }?> href="/question/5">邀请问题</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-9 right">
				<div class="title">
						<?php if ($_smarty_tpl->tpl_vars['id']->value == 1) {?>新手教程<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['id']->value == 2) {?>免费试用<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['id']->value == 3) {?>支付问题<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['id']->value == 4) {?>账号问题<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['id']->value == 5) {?>邀请问题<?php }?>
				</div>
				<div class="right-box" style="margin-left: 45px">
					<ul>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['question_list']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?>
							<li>
								<h4><?php echo $_smarty_tpl->tpl_vars['item']->value->name;?>
</h4>
								<p>
									<?php echo $_smarty_tpl->tpl_vars['item']->value->markdown;?>

								</p>
							</li>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


					</ul>
				</div>
			</div>
		</div>
	</section>
</section>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
