<?php
/* Smarty version 3.1.31, created on 2017-08-07 10:26:05
  from "C:\MAMP\htdocs\easyfq\resources\views\material\table\js_1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5987cfbd1f9781_26768428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e99674f1f9f7548808eab9d428edbaee4bb9cbff' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\table\\js_1.tpl',
      1 => 1490688162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5987cfbd1f9781_26768428 (Smarty_Internal_Template $_smarty_tpl) {
?>
function modify_table_visible(id, key) {
	if(document.getElementById(id).checked)
	{
		table_1.columns( '.' + key ).visible( true );
		localStorage.setItem(window.location.href + '-haschecked-' + id, true);
	}
	else
	{
		table_1.columns( '.' + key ).visible( false );
		localStorage.setItem(window.location.href + '-haschecked-' + id, false);
	}
}
<?php }
}
