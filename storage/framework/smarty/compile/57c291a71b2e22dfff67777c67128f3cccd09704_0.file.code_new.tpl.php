<?php
/* Smarty version 3.1.31, created on 2017-08-06 11:31:43
  from "D:\MAMP\htdocs\easyfq\resources\views\material\user\code_new.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59868d9f7a06f5_69621165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57c291a71b2e22dfff67777c67128f3cccd09704' => 
    array (
      0 => 'D:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\user\\code_new.tpl',
      1 => 1501990237,
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
function content_59868d9f7a06f5_69621165 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
						<li><a href="/user/bought">购买记录</a></li>
						<li><a class="active" href="/user/code">我的提现</a></li>
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
				<div class="title">提现记录</div>
				<div class="right-box">
					<div class="col-lg-12 col-md-12">
						<div class="card margin-bottom-no">
							<div class="card-main">
								<div class="card-inner">
									<div class="card-inner">
										<p>当前余额：<?php echo $_smarty_tpl->tpl_vars['user']->value->money;?>
 元 </p>
										<?php if ($_smarty_tpl->tpl_vars['withdrawal']->value) {?>
											<?php if ($_smarty_tpl->tpl_vars['withdrawal']->value->status == 1) {?>
												<?php if ($_smarty_tpl->tpl_vars['withdrawal']->value->is_withdrawal == 1) {?>
													提现成功,金额已经转入您的支付宝账户中,请查收!
												<?php } else { ?>
													提现失败,原因是审核不通过!
												<?php }?>
												<p><a class="btn btn-brand-accent" href="javascript:void(0);" onclick="withdrawal()">提现</a>
													&nbsp;&nbsp;&nbsp;&nbsp;*提现需要2-3个工作日</p>
											<?php } else { ?>
												<p><a class="btn btn-brand-accent" disabled="" href="javascript:void(0);">提现审核中</a>
												</p>
											<?php }?>
										<?php } else { ?>
											<p><a class="btn btn-brand-accent" href="javascript:void(0);" onclick="withdrawal()">提现</a>
												&nbsp;&nbsp;&nbsp;&nbsp;*提现需要2-3个工作日</p>
										<?php }?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div aria-hidden="true" class="modal modal-va-middle fade" id="withdrawal_modal" role="dialog" tabindex="-1">
						<div class="modal-dialog modal-xs">
							<div class="modal-content">
								<div class="modal-heading">
									<a class="modal-close" data-dismiss="modal">×</a>

									<h2 class="modal-title">提现订单</h2>
								</div>
								<div class="modal-inner">
									<div class="form-group form-group-label">
										<label class="floating-label" for="name">支付宝账号</label>
										<input class="form-control" id="ali_id" type="text" >
									</div>
									<div class="form-group form-group-label">
										<label class="floating-label" for="name">提现金额(必须十的整数倍)</label>
										<input class="form-control" id="money" type="text" >
									</div>

								</div>

								<div class="modal-footer">
									<p class="text-right">
										<button class="btn btn-flat btn-brand waves-attach" data-dismiss="modal"
												id="withdrawal_input" type="button">提交
										</button>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="card margin-bottom-no">
							<div class="card-main">
								<div class="card-inner">
									<div class="card-inner">
										<div class="card-table">
											<div class="table-responsive">
												<table class="table table-hover">
													<tr>
														<th>ID</th>
														<th>支付宝账号</th>
														<th>体现金额</th>
														<th>提交时间</th>
														<th>操作</th>
													</tr>
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
														<tr>
															<td>#<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
</td>
															<td><?php echo $_smarty_tpl->tpl_vars['item']->value->ali_id;?>
</td>
															<td><?php echo $_smarty_tpl->tpl_vars['item']->value->money;?>
&nbsp;元</td>
															<td><?php echo $_smarty_tpl->tpl_vars['item']->value->datetime;?>
</td>
															<td><?php echo $_smarty_tpl->tpl_vars['item']->value->user_id;?>
</td>
															<td><?php echo $_smarty_tpl->tpl_vars['item']->value->user_name;?>
</td>
															<?php if ($_smarty_tpl->tpl_vars['item']->value->is_withdrawal == 0) {?>
																<td><a class="btn btn-brand" href="javascript:void(0);"
																	   disabled>提现失败</a></td>
															<?php } else { ?>
																<td><a class="btn btn-brand" href="javascript:void(0);"
																	   disabled>提现完成</a></td>
															<?php }?>
														</tr>
													<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

												</table>
											</div>
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
		</div>
	</section>
</section>



<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php echo '<script'; ?>
>
	$(document).ready(function () {
		$("#code-update").click(function () {
			$.ajax({
				type: "POST",
				url: "code",
				dataType: "json",
				data: {
					code: $("#code").val()
				},
				success: function (data) {
					if (data.ret) {
						$("#result").modal();
						$("#msg").html(data.msg);
						window.setTimeout("location.href=window.location.href", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
					} else {
						$("#result").modal();
						$("#msg").html(data.msg);
						window.setTimeout("location.href=window.location.href", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
					}
				},
				error: function (jqXHR) {
					$("#result").modal();
					$("#msg").html("发生错误：" + jqXHR.status);
				}
			})
		})
		$("#withdrawal_input").click(function () {
			$.ajax({
				type: "POST",
				url: "withdrawal",
				dataType: "json",
				data: {
					ali_id: $("#ali_id").val(),
					money: $("#money").val()
				},
				success: function (data) {
					if (data.ret) {
						$("#result").modal();
						$("#msg").html(data.msg);
						window.setTimeout("location.href=window.location.href", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
					} else {
						$("#result").modal();
						$("#msg").html(data.msg);
						<!--window.setTimeout("location.href=window.location.href", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);-->
					}
				},
				error: function (jqXHR) {
					$("#result").modal();
					$("#msg").html("发生错误：" + jqXHR.status);
				}
			})
		})

		timestamp = <?php echo time();?>
;


		function f(){
			$.ajax({
				type: "GET",
				url: "code_check",
				dataType: "json",
				data: {
					time: timestamp
				},
				success: function (data) {
					if (data.ret) {
						clearTimeout(tid);
						$("#result").modal();
						$("#msg").html("充值成功！");
						window.setTimeout("location.href=window.location.href", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
					}
				}
			});
			tid = setTimeout(f, 1000); //循环调用触发setTimeout
		}
		setTimeout(f, 1000);
	})
	function withdrawal(){
		$("#withdrawal_modal").modal();
	}
<?php echo '</script'; ?>
>
<?php }
}
