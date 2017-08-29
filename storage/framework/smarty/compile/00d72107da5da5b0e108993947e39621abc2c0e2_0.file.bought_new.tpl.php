<?php
/* Smarty version 3.1.31, created on 2017-08-07 21:15:33
  from "D:\MAMP\htdocs\easyfq\resources\views\material\user\bought_new.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598867f533c981_04197032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00d72107da5da5b0e108993947e39621abc2c0e2' => 
    array (
      0 => 'D:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\user\\bought_new.tpl',
      1 => 1502111731,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_598867f533c981_04197032 (Smarty_Internal_Template $_smarty_tpl) {
?>



<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<section class="index_2">
	<section class="question">
		<div class="container">
			<div class="col-md-3 left text-center">
				<div class="left-box">
					<ul>
						<li>
							<div class="user_info">个人中心</div>
						</li>
						<li><a href="/user">我的资料</a></li>
						<li><a href="/user/edit">修改密码</a></li>
						<li><a href="/user/invite">我的邀请</a></li>
						<li><a class="active" href="/user/bought">购买记录</a></li>
						
						<li><a href="/user/node">节点信息</a></li>
						<li><a href="/user/ticket">建议反馈</a></li>
						<?php if ($_smarty_tpl->tpl_vars['user']->value->isAdmin()) {?>
							<li>
								<a href="/admin">
									管理面板
								</a>
							</li>
						<?php }?>
					</ul>
				</div>
			</div>
			<div class="col-md-9 right">
				<div class="title">购买记录</div>
				<div class="right-box">
					<div class="col-lg-12 col-sm-12">
						<div class="row">
							<section class="content-inner margin-top-no">
								<div class="table-responsive">
									<?php echo $_smarty_tpl->tpl_vars['shops']->value->render();?>

									<table class="table ">
										<tr>
											<th>ID</th>
											<th>商品名称</th>
											<th>内容</th>
											<th>价格</th>
											<th>购买时间</th>
											<th>购买状态</th>
										</tr>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shops']->value, 'shop');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['shop']->value) {
?>
											<tr>
												<td>#<?php echo $_smarty_tpl->tpl_vars['shop']->value->id;?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['shop']->value->shop()->name;?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['shop']->value->shop()->content();?>
</td>
												<td><?php echo $_smarty_tpl->tpl_vars['shop']->value->price;?>
 元</td>
												<td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['shop']->value->datetime);?>
</td>
												<td><?php if ($_smarty_tpl->tpl_vars['shop']->value->status == 1) {?>支付失败<?php } else { ?>支付成功<?php }?></td>

											</tr>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

									</table>
									<?php echo $_smarty_tpl->tpl_vars['shops']->value->render();?>

								</div>
								<div aria-hidden="true" class="modal modal-va-middle fade" id="delete_modal" role="dialog" tabindex="-1">
									<div class="modal-dialog modal-xs">
										<div class="modal-content">
											<div class="modal-heading">
												<a class="modal-close" data-dismiss="modal">×</a>
												<h2 class="modal-title">确认要退订？</h2>
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
				</div>
			</div>
		</div>
	</section>
</section>


<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>





<?php echo '<script'; ?>
>
function delete_modal_show(id) {
	deleteid=id;
	$("#delete_modal").modal();
}

$(document).ready(function(){
	function delete_id(){
		$.ajax({
			type:"DELETE",
			url:"/user/bought",
			dataType:"json",
			data:{
				id: deleteid
			},
			success:function(data){
				if(data.ret){
					$("#result").modal();
					$("#msg").html(data.msg);
					window.setTimeout("location.href=window.location.href", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
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
})
	
<?php echo '</script'; ?>
>







<?php }
}
