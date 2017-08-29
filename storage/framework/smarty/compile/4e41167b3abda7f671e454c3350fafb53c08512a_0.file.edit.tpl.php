<?php
/* Smarty version 3.1.31, created on 2017-07-29 19:38:35
  from "D:\MAMP\htdocs\easyfq\resources\views\material\admin\shop\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597c73bb13f875_43215860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e41167b3abda7f671e454c3350fafb53c08512a' => 
    array (
      0 => 'D:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\admin\\shop\\edit.tpl',
      1 => 1501328304,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/main.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_597c73bb13f875_43215860 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>








	<main class="content">
		<div class="content-header ui-content-header">
			<div class="container">
				<h1 class="content-heading">编辑商品</h1>
			</div>
		</div>
		<div class="container">
			<div class="col-lg-12 col-sm-12">
				<section class="content-inner margin-top-no">
					
					<div class="card">
						<div class="card-main">
							<div class="card-inner">
								<p>可填单个或者多个参数，多个参数时会自动组合成套餐</p>
								<div class="form-group form-group-label">
									<label class="floating-label" for="name">分类选择</label>
									<select class="form-control" id="shop_type">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['shop']->value->type == $_smarty_tpl->tpl_vars['value']->value->id) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</option>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

									</select>
								</div>
								<div class="form-group form-group-label">
									<label class="floating-label" for="name">名称</label>
									<input class="form-control" id="name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->name;?>
">
								</div>
								
								
								<div class="form-group form-group-label">
									<label class="floating-label" for="price">价格</label>
									<input class="form-control" id="price" type="text" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->price;?>
">
								</div>
								
								<div class="form-group form-group-label">
									<label class="floating-label" for="auto_renew">自动续订天数（0为不允许自动续订，其他为到了那么多天之后就会自动从用户的账户上划钱抵扣）</label>
									<input class="form-control" id="auto_renew" type="text" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->auto_renew;?>
">
								</div>
								
								
								
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-main">
							<div class="card-inner">
								
								<div class="form-group form-group-label">
									<label class="floating-label" for="bandwidth">流量（GB）</label>
									<input class="form-control" id="bandwidth" type="text" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->bandwidth();?>
">
								</div>
								
								
								<div class="form-group form-group-label">
									<div class="checkbox switch">
										<label for="auto_reset_bandwidth">
											<input <?php if ($_smarty_tpl->tpl_vars['shop']->value->auto_reset_bandwidth == 1) {?>checked<?php }?> class="access-hide" id="auto_reset_bandwidth" type="checkbox"><span class="switch-toggle"></span>续费时自动重置用户流量为上面这个流量值
										</label>
									</div>
								</div>
								
							</div>
						</div>
					</div>	
					
					
					<div class="card">
						<div class="card-main">
							<div class="card-inner">
								
								<div class="form-group form-group-label">
									<label class="floating-label" for="expire">账户有效期天数</label>
									<input class="form-control" id="expire" type="text" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->expire();?>
">
								</div>
							</div>
						</div>
					</div>	
					
					<div class="card">
						<div class="card-main">
							<div class="card-inner">
								
								<div class="form-group form-group-label">
									<label class="floating-label" for="class">等级</label>
									<input class="form-control" id="class" type="text" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->user_class();?>
">
								</div>
								
								<div class="form-group form-group-label">
									<label class="floating-label" for="class_expire">等级有效期天数</label>
									<input class="form-control" id="class_expire" type="text" value="<?php echo $_smarty_tpl->tpl_vars['shop']->value->class_expire();?>
">
								</div>
							</div>
						</div>
					</div>

					<div class="card">
						<div class="card-main">
							<div class="card-inner">
								
								<div class="form-group">
									<div class="row">
										<div class="col-md-10 col-md-push-1">
											<button id="submit" type="submit" class="btn btn-block btn-brand waves-attach waves-light">保存</button>
										</div>
									</div>
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
    $(document).ready(function () {
        function submit() {
			if(document.getElementById('auto_reset_bandwidth').checked)
			{
				var auto_reset_bandwidth=1;
			}
			else
			{
				var auto_reset_bandwidth=0;
			}
			var type = $("#shop_type").val();
            $.ajax({
                type: "PUT",
                url: "/admin/shop/<?php echo $_smarty_tpl->tpl_vars['shop']->value->id;?>
",
                dataType: "json",
                data: {
                    name: $("#name").val(),
                    auto_reset_bandwidth: auto_reset_bandwidth,
                    price: $("#price").val(),
                    auto_renew: $("#auto_renew").val(),
                    bandwidth: $("#bandwidth").val(),
                    expire: $("#expire").val(),
                    class: $("#class").val(),
					class_expire: $("#class_expire").val(),
					type:type
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                        window.setTimeout("location.href='/admin/shop'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                    } else {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    }
                },
                error: function (jqXHR) {
                    $("#result").modal();
                        $("#msg").html(data.msg+"  发生错误了。");
                }
            });
        }

        $("html").keydown(function (event) {
            if (event.keyCode == 13) {
                login();
            }
        });
        $("#submit").click(function () {
            submit();
        });
    })
<?php echo '</script'; ?>
><?php }
}
