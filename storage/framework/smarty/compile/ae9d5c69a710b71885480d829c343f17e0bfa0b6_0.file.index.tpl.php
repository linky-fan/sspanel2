<?php
/* Smarty version 3.1.31, created on 2017-08-06 20:16:25
  from "D:\MAMP\htdocs\easyfq\resources\views\material\admin\user\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59870899e754e9_74087437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae9d5c69a710b71885480d829c343f17e0bfa0b6' => 
    array (
      0 => 'D:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\admin\\user\\index.tpl',
      1 => 1490688162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/main.tpl' => 1,
    'file:table/checkbox.tpl' => 1,
    'file:table/table.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:admin/footer.tpl' => 1,
    'file:table/js_1.tpl' => 1,
    'file:table/lang_chinese.tpl' => 1,
    'file:table/js_delete.tpl' => 1,
  ),
),false)) {
function content_59870899e754e9_74087437 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>








<main class="content">
	<div class="content-header ui-content-header">
		<div class="container">
			<h1 class="content-heading">用户列表</h1>
		</div>
	</div>
	<div class="container">
		<div class="col-lg-12 col-sm-12">
			<section class="content-inner margin-top-no">

				<div class="card">
					<div class="card-main">
						<div class="card-inner">
							<p>系统中所有用户的列表。</p>
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

				<div aria-hidden="true" class="modal modal-va-middle fade" id="delete_modal" role="dialog" tabindex="-1">
					<div class="modal-dialog modal-xs">
						<div class="modal-content">
							<div class="modal-heading">
								<a class="modal-close" data-dismiss="modal">×</a>
								<h2 class="modal-title">确认要删除？</h2>
							</div>
							<div class="modal-inner">
								<p>请您确认。</p>
							</div>
							<div class="modal-footer">
								<p class="text-right"><button class="btn btn-flat btn-brand-accent waves-attach waves-effect" data-dismiss="modal" type="button">取消</button><button class="btn btn-flat btn-brand-accent waves-attach" data-dismiss="modal" id="delete_input" type="button">确定</button></p>
							</div>
						</div>
					</div>
				</div>

				<?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



		</div>



	</div>
</main>






<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
function delete_modal_show(id) {
	deleteid=id;
	$("#delete_modal").modal();
}

<?php $_smarty_tpl->_subTemplateRender('file:table/js_1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


$(document).ready(function(){
 	table_1 = $('#table_1').DataTable({
			"stateSave": true,
			"columnDefs": [
				{
						targets: [ '_all' ],
						className: 'mdl-data-table__cell--non-numeric'
				}
			],
			<?php $_smarty_tpl->_subTemplateRender('file:table/lang_chinese.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  });

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


	function delete_id(){
		$.ajax({
			type:"DELETE",
			url:"/admin/user",
			dataType:"json",
			data:{
				id: deleteid
			},
			success:function(data){
				if(data.ret){
					$("#result").modal();
					$("#msg").html(data.msg);
					<?php $_smarty_tpl->_subTemplateRender('file:table/js_delete.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				}else{
					$("#result").modal();
					$("#msg").html(data.msg);
				}
			},
			error:function(jqXHR){
				$("#result").modal();
				$("#msg").html(data.msg+"  发生错误了。");
			}
		});
	}

	$("#delete_input").click(function(){
		delete_id();
	});

	$("#search_button").click(function(){
		if($("#search").val()!="")
		{
			search();
		}
	});

	$.ajaxSettings.async = false;
	page = 1;
	while (1) {
			next = 1;
			$.getJSON("user/ajax?page=" + page, function( data ) {
					if (data.next == 0) {
							next = 0;
					}
					for ( var i=0, ien=data.data.length ; i<ien ; i++ ) {
						data.data[i][0] = '<a class="btn btn-brand" href="/admin/user/' + data.data[i][0] + '/edit">编辑</a>' +
						'<a class="btn btn-brand-accent" id="delete" href="javascript:void(0);" onClick="delete_modal_show(\'' + data.data[i][0] + '\')">删除</a>';
					}
					table_1.rows.add(data.data).draw();
			});

			if (next == 0) break;

			page++;
	}
	$.ajaxSettings.async = true;
})


<?php echo '</script'; ?>
>
<?php }
}
