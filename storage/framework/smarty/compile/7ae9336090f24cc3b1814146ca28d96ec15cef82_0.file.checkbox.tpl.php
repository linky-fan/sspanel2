<?php
/* Smarty version 3.1.31, created on 2017-08-07 10:26:05
  from "C:\MAMP\htdocs\easyfq\resources\views\material\table\checkbox.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5987cfbd1882f5_34095620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ae9336090f24cc3b1814146ca28d96ec15cef82' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\table\\checkbox.tpl',
      1 => 1490688162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5987cfbd1882f5_34095620 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_config']->value['total_column'], 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
  <div class="checkbox checkbox-adv checkbox-inline">
    <label for="checkbox_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
      <input href="javascript:void(0);" onClick="modify_table_visible('checkbox_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
')" <?php if (in_array($_smarty_tpl->tpl_vars['key']->value,$_smarty_tpl->tpl_vars['table_config']->value['default_show_column']) || count($_smarty_tpl->tpl_vars['table_config']->value['default_show_column']) == 0) {?>checked=""<?php }?> class="access-hide" id="checkbox_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" name="checkbox_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" type="checkbox"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>

      <span class="checkbox-circle"></span><span class="checkbox-circle-check"></span><span class="checkbox-circle-icon icon">done</span>
    </label>
  </div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<?php }
}
