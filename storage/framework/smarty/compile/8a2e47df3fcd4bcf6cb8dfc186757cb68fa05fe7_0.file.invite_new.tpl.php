<?php
/* Smarty version 3.1.31, created on 2017-08-07 22:13:22
  from "D:\MAMP\htdocs\easyfq\resources\views\material\user\invite_new.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59887582c10285_25738091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a2e47df3fcd4bcf6cb8dfc186757cb68fa05fe7' => 
    array (
      0 => 'D:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\user\\invite_new.tpl',
      1 => 1502115198,
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
function content_59887582c10285_25738091 (Smarty_Internal_Template $_smarty_tpl) {
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
						<li><a class="active" href="/user/invite">我的邀请</a></li>
						<li><a href="/user/bought">购买记录</a></li>
						
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
				<div class="title">我的邀请</div>
				<div class="right-box">
					<div class="col-lg-12 col-md-12">
						<div class="row">
							<div class="card margin-bottom-no">
								<div class="card-main">
									<div class="card-inner">
										<div class="card-inner">
											<p>当前您可以生成<code><?php echo $_smarty_tpl->tpl_vars['user']->value->invite_num;?>
</code>个邀请码。 </p>
										</div>
										<?php if ($_smarty_tpl->tpl_vars['user']->value->invite_num) {?>
											<div class="card-action">
												<div class="card-action-btn pull-left">
													<button id="invite" class="btn btn-flat waves-attach">生成我的邀请码</button>
												</div>
											</div>
										<?php }?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="row">
							<div class="card margin-bottom-no">
								<div class="card-main">
									<div class="card-inner">
										<div class="card-table">
											<div class="table-responsive">
												<?php echo $_smarty_tpl->tpl_vars['codes']->value->render();?>

												<table class="table">
													<tbody>
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['codes']->value, 'code');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['code']->value) {
?>
														<tr>
															<td>我的邀请码</td>
															<td><a href="/auth/register?code=<?php echo $_smarty_tpl->tpl_vars['code']->value->code;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['code']->value->code;?>
</a>
															</td>
															<td>
																<span class="btn btn-brand" data-clipboard-text="http://www.easyfq.cn/auth/register?code=<?php echo $_smarty_tpl->tpl_vars['code']->value->code;?>
">复制</span>
															</td>
															<td onmouseover="change_share('易连加速器', 'http://www.easyfq.cn/auth/register?code=<?php echo $_smarty_tpl->tpl_vars['code']->value->code;?>
');">
																<div class="jiathis_style_32x32">
																	<a class="jiathis_button_weixin share"></a>
																	<a class="jiathis_button_cqq share"></a>
																</div>
															</td>
														</tr>
													<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

													</tbody>
													<tbody>
													<tr>
														<td>我的奖励金</td>
														<td><?php echo $_smarty_tpl->tpl_vars['user']->value->money;?>
元
															(奖励金可以用来抵扣支付,满10元可申请提现)
															
																
																	
																		
																	
																		
																	
																
																	
																
															
														</td>
														<td>
															<?php if ($_smarty_tpl->tpl_vars['withdrawal']->value) {?>
																<?php if ($_smarty_tpl->tpl_vars['withdrawal']->value->status == 1) {?>
																	<a href="javascript:void(0);" onclick="withdrawal_now()" class="btn btn-brand">马上提现</a>
																<?php } else { ?>
																	<a class="btn btn-brand-accent" disabled="" href="javascript:void(0);">提现审核中</a>
																<?php }?>
															<?php }?>

															<br>
															*提现需要2-3个工作日
														</td>
														<td>
															<a href="javascript:void(0);" onclick="show_withdrawal()" class="btn btn-brand">提现记录</a>
														</td>
													</tr>
													</tbody>
												</table>
												<?php echo $_smarty_tpl->tpl_vars['codes']->value->render();?>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12 col-md-12">
						<div class="row">
							<div class="card margin-bottom-no">
								<div class="card-main">
									<div class="card-inner">
										<div class="card-inner">
											<p class="card-heading">返利记录</p>
											<div class="card-table">
												<div class="table-responsive">
													<?php echo $_smarty_tpl->tpl_vars['paybacks']->value->render();?>

													<table class="table">
														<thead>
														<tr>
															<th>###</th>
															<th>返利用户</th>
															<th>奖励天数</th>
															<th>返利金额</th>
														</tr>
														</thead>
														<tbody>
														<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['paybacks']->value, 'payback');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['payback']->value) {
?>
															<tr>
																<td><b><?php echo $_smarty_tpl->tpl_vars['payback']->value->id;?>
</b></td>
																<?php if ($_smarty_tpl->tpl_vars['payback']->value->user() != null) {?>
																	<td><?php echo $_smarty_tpl->tpl_vars['payback']->value->user()->user_name;?>

																	</td>
																<?php } else { ?>
																	<td>已注销
																	</td>
																<?php }?>
																</td>
																<td><?php echo $_smarty_tpl->tpl_vars['payback']->value->time;?>
 天</td>
																<td><?php echo $_smarty_tpl->tpl_vars['payback']->value->ref_get;?>
 元</td>
															</tr>
														<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

														</tbody>
													</table>
													<?php echo $_smarty_tpl->tpl_vars['paybacks']->value->render();?>

												</div>
											</div>
										</div>

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
					<div aria-hidden="true" class="modal modal-va-middle fade" id="show_withdrawal_modal" role="dialog" tabindex="-1">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
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
																	<td><?php echo date('Y-m-d H:i:s',$_smarty_tpl->tpl_vars['item']->value->datetime);?>
</td>
																	<?php if ($_smarty_tpl->tpl_vars['item']->value->status == 0) {?>
																	<td><a class="btn btn-brand" href="javascript:void(0);"
																		   disabled>提现中</a></td>
																	<?php } else { ?>
																		<?php if ($_smarty_tpl->tpl_vars['item']->value->is_withdrawal == 0) {?>
																			<td><a class="btn btn-brand" href="javascript:void(0);"
																				   disabled>提现失败</a></td>
																		<?php } else { ?>
																			<td><a class="btn btn-brand" href="javascript:void(0);"
																				   disabled>提现完成</a></td>
																		<?php }?>
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
						</div>
					</div>



					<p class=" col-lg-12">  <br></p>
					<?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

				</div>
			</div>
		</div>
	</section>
</section>






<?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.16/clipboard.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=2138764" charset="utf-8"><?php echo '</script'; ?>
>








<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php echo '<script'; ?>
>
    $(document).ready(function () {
		var btns = document.querySelectorAll('span');
		var clipboard = new Clipboard(btns);
		clipboard.on('success', function(e) {
			alert('复制成功');
		});
		clipboard.on('error', function(e) {
			alert("复制失败");
		});
        $("#invite").click(function () {
            $.ajax({
                type: "POST",
                url: "/user/invite",
                dataType: "json",
                success: function (data) {
                    window.location.reload();
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
    })
	function withdrawal_now(){
		$("#withdrawal_modal").modal();
	}
	function show_withdrawal(){
		$("#show_withdrawal_modal").modal();
	}
<?php echo '</script'; ?>
>

<?php }
}
