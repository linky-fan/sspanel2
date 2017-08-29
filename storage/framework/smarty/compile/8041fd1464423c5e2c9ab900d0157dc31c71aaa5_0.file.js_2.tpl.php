<?php
/* Smarty version 3.1.31, created on 2017-08-07 10:26:05
  from "C:\MAMP\htdocs\easyfq\resources\views\material\table\js_2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5987cfbd237f92_88800149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8041fd1464423c5e2c9ab900d0157dc31c71aaa5' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\table\\js_2.tpl',
      1 => 1490688162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:table/lang_chinese.tpl' => 1,
  ),
),false)) {
function content_5987cfbd237f92_88800149 (Smarty_Internal_Template $_smarty_tpl) {
?>
table_1 = $('#table_1').DataTable({
  ajax: {
          url: '<?php echo $_smarty_tpl->tpl_vars['table_config']->value['ajax_url'];?>
',
          type: "POST"
        },
  processing: true,
  serverSide: true,
  order: [[ 0, 'desc' ]],
  stateSave: true,
  columnDefs: [
        {
            targets: [ '_all' ],
            className: 'mdl-data-table__cell--non-numeric'
        }
  ],
  columns: [
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_config']->value['total_column'], 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
          { "data": "<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" },
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

  ],
  <?php $_smarty_tpl->_subTemplateRender('file:table/lang_chinese.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

})


var has_init = JSON.parse(localStorage.getItem(window.location.href + '-hasinit'));
if (has_init != true) {
    localStorage.setItem(window.location.href + '-hasinit', true);
} else {
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_config']->value['total_column'], 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
        var checked = JSON.parse(localStorage.getItem(window.location.href + '-haschecked-checkbox_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
'));
        if (checked == true) {
            document.getElementById('checkbox_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
').checked = true;
        } else {
            document.getElementById('checkbox_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
').checked = false;
        }
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

}

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['table_config']->value['total_column'], 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
  modify_table_visible('checkbox_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
');
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<?php }
}
