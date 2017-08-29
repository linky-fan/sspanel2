<?php
/* Smarty version 3.1.31, created on 2017-07-29 17:32:52
  from "D:\MAMP\htdocs\easyfq\resources\views\material\table\js_1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597c56449c98f7_20059527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2924b9aca02a1676c2b857445c3064efb40ce055' => 
    array (
      0 => 'D:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\table\\js_1.tpl',
      1 => 1490688162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597c56449c98f7_20059527 (Smarty_Internal_Template $_smarty_tpl) {
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
