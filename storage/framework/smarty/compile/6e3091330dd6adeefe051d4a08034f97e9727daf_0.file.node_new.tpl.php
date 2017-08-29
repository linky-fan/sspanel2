<?php
/* Smarty version 3.1.31, created on 2017-08-07 10:22:45
  from "C:\MAMP\htdocs\easyfq\resources\views\material\user\node_new.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5987cef5ce0e23_30299638',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e3091330dd6adeefe051d4a08034f97e9727daf' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\user\\node_new.tpl',
      1 => 1502026226,
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
function content_5987cef5ce0e23_30299638 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="//cdn.staticfile.org/canvasjs/1.7.0/canvasjs.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//cdn.staticfile.org/jquery/2.2.1/jquery.min.js"><?php echo '</script'; ?>
>


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
						<li><a href="/user/bought">购买记录</a></li>
						
						<li><a class="active" href="/user/node">节点信息</a></li>
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
				<div class="title">节点记录</div>
				<div class="right-box">
					<div class="col-lg-12 col-sm-12">
						<div class="card">
							<div class="card-main">
								<div class="card-inner margin-bottom-no">
									<div class="tile-wrap">
										<?php $_smarty_tpl->_assignInScope('id', 0);
?>
										<div class="col-lg-7 node_list_info">
											<div class="row">
												<div class="col-lg-12">
													<div class="row">
														<span class="col-lg-6">产品信息</span>
														<a href="javascript:void(0);" onclick="change_link_pass()" class=" col-lg-6 text-right">修改密码</a>
														<hr>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="row">
														<span class="col-lg-6">服务器端口</span>
														<span class="col-lg-6 text-right"><?php echo $_smarty_tpl->tpl_vars['ary']->value['server_port'];?>
</span>
													</div>

												</div>
												<div class="col-lg-12">
													<div class="row">
														<span class="col-lg-6">加密方式</span>
														<span class="col-lg-6 text-right"><?php echo $_smarty_tpl->tpl_vars['ary']->value['method'];?>
</span>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="row">
														<span class="col-lg-6">密码</span>
														<span class="col-lg-6 text-right"><?php echo $_smarty_tpl->tpl_vars['ary']->value['password'];?>
</span>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="row">
														<span class="col-lg-6">协议</span>
														<span class="col-lg-6 text-right"> <?php echo $_smarty_tpl->tpl_vars['user']->value->protocol;?>
</span>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="row">
														<span class="col-lg-6">协议参数</span>
														<span class="col-lg-6 text-right">&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value->protocol_param;?>
</span>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="row">
														<span class="col-lg-6">混淆</span>
														<span class="col-lg-6 text-right"><?php echo $_smarty_tpl->tpl_vars['user']->value->obfs;?>
</span>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="row">
														<span class="col-lg-6">混淆参数</span>
														<span class="col-lg-6 text-right"><?php echo $_smarty_tpl->tpl_vars['user']->value->obfs_param;?>
</span>
													</div>
												</div>
											</div>


										</div>
										<div class="col-lg-12">
											<br>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node_prefix']->value, 'nodes', false, 'prefix');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['prefix']->value => $_smarty_tpl->tpl_vars['nodes']->value) {
?>
												<div class="col-lg-6">
												<?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['id']->value+1);
?>
												<br>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nodes']->value, 'node');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['node']->value) {
?>
													<?php $_smarty_tpl->_assignInScope('relay_rule', null);
?>
													<?php if ($_smarty_tpl->tpl_vars['node']->value->sort == 10) {?>
														<?php $_smarty_tpl->_assignInScope('relay_rule', $_smarty_tpl->tpl_vars['tools']->value->pick_out_relay_rule($_smarty_tpl->tpl_vars['node']->value->id,$_smarty_tpl->tpl_vars['user']->value->port,$_smarty_tpl->tpl_vars['relay_rules']->value));
?>
													<?php }?>
													<?php if ($_smarty_tpl->tpl_vars['node']->value->mu_only == 0) {?>
														<div class="card text-center">
															<div class="card-main">
																<div class="card-inner node_info_box">
																	<div class="node_info">
																		<p style="color: #5CAB3E"><?php echo $_smarty_tpl->tpl_vars['node']->value->name;
if ($_smarty_tpl->tpl_vars['relay_rule']->value != null) {?> - <?php echo $_smarty_tpl->tpl_vars['relay_rule']->value->dist_node()->name;
}?></p>
																		<?php if ($_smarty_tpl->tpl_vars['node']->value->sort > 2 && $_smarty_tpl->tpl_vars['node']->value->sort != 5 && $_smarty_tpl->tpl_vars['node']->value->sort != 10) {?>
																		<p>地址：<span class="label" >
																			<a href="javascript:void(0);" onClick="urlChange('<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
',0,0)">请点这里进入查看详细信息</a>
																				<?php } else { ?>
																		<p>地址：<span>
																			<?php echo $_smarty_tpl->tpl_vars['node']->value->server;?>

																				<?php }?>
																		</span>
																		</p>
																	</div>
																	<div class="qr_code text-center">
																		<a href="javascript:void(0);" onClick="urlChange('<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
',0,<?php if ($_smarty_tpl->tpl_vars['relay_rule']->value != null) {
echo $_smarty_tpl->tpl_vars['relay_rule']->value->id;
} else { ?>0<?php }?>)">
																			<img src="/theme/material/images/qr_code.png" alt="">
																		</a>
																		<p>点击打开二维码 <br>使用客户端扫一扫</p>
																	</div>
																</div>
															</div>
														</div>
													<?php }?>
													<?php if ($_smarty_tpl->tpl_vars['node']->value->sort == 0 || $_smarty_tpl->tpl_vars['node']->value->sort == 10) {?>
														<?php $_smarty_tpl->_assignInScope('point_node', $_smarty_tpl->tpl_vars['node']->value);
?>
													<?php }?>
													<?php if (($_smarty_tpl->tpl_vars['node']->value->sort == 0 || $_smarty_tpl->tpl_vars['node']->value->sort == 10) && $_smarty_tpl->tpl_vars['node']->value->custom_rss == 1) {?>
														<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node_muport']->value, 'single_muport');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['single_muport']->value) {
?>

															<?php if (!($_smarty_tpl->tpl_vars['single_muport']->value['server']->node_class <= $_smarty_tpl->tpl_vars['user']->value->class && ($_smarty_tpl->tpl_vars['single_muport']->value['server']->node_group == 0 || $_smarty_tpl->tpl_vars['single_muport']->value['server']->node_group == $_smarty_tpl->tpl_vars['user']->value->node_group))) {?>
																<?php
continue 1;?>
															<?php }?>

															<?php if (!($_smarty_tpl->tpl_vars['single_muport']->value['user']->class >= $_smarty_tpl->tpl_vars['node']->value->node_class && ($_smarty_tpl->tpl_vars['node']->value->node_group == 0 || $_smarty_tpl->tpl_vars['single_muport']->value['user']->node_group == $_smarty_tpl->tpl_vars['node']->value->node_group))) {?>
																<?php
continue 1;?>
															<?php }?>

															<?php $_smarty_tpl->_assignInScope('relay_rule', null);
?>
															<?php if ($_smarty_tpl->tpl_vars['node']->value->sort == 10 && $_smarty_tpl->tpl_vars['single_muport']->value['user']['is_multi_user'] != 2) {?>
																<?php $_smarty_tpl->_assignInScope('relay_rule', $_smarty_tpl->tpl_vars['tools']->value->pick_out_relay_rule($_smarty_tpl->tpl_vars['node']->value->id,$_smarty_tpl->tpl_vars['single_muport']->value['server']->server,$_smarty_tpl->tpl_vars['relay_rules']->value));
?>
															<?php }?>
															<div class="card">
																<div class="card-main">
																	<div class="card-inner">
																		<p class="card-heading" >
																			<a href="javascript:void(0);" onClick="urlChange('<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
',<?php echo $_smarty_tpl->tpl_vars['single_muport']->value['server']->server;?>
,<?php if ($_smarty_tpl->tpl_vars['relay_rule']->value != null) {
echo $_smarty_tpl->tpl_vars['relay_rule']->value->id;
} else { ?>0<?php }?>)"><?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['relay_rule']->value != null) {?> - <?php echo $_smarty_tpl->tpl_vars['relay_rule']->value->dist_node()->name;
}?> - 单端口多用户 Shadowsocks - <?php echo $_smarty_tpl->tpl_vars['single_muport']->value['server']->server;?>
 端口</a>
																			<span class="label label-brand-accent"><?php echo $_smarty_tpl->tpl_vars['node']->value->status;?>
</span>
																		</p>
																		<p>地址：<span class="label label-brand-accent"><?php echo $_smarty_tpl->tpl_vars['node']->value->server;?>
</span></p>
																		<p>端口：<span class="label label-brand-red"><?php echo $_smarty_tpl->tpl_vars['single_muport']->value['user']['port'];?>
</span></p>
																	</div>
																</div>
															</div>
														<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

													<?php }?>
												<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

												<?php $_smarty_tpl->_assignInScope('point_node', null);
?>
											</div>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

										<br>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div aria-hidden="true" class="modal modal-va-middle fade" id="nodeinfo" role="dialog" tabindex="-1">
						<div class="modal-dialog modal-xs">
							<div class="modal-content">
								<iframe class="iframe-seamless" title="Modal with iFrame" id="infoifram"></iframe>
							</div>
						</div>
					</div>
					<div aria-hidden="true" class="modal modal-va-middle fade" id="change_link_pass" role="dialog" tabindex="-1">
						<div class="modal-dialog modal-xs">
							<div class="modal-content">
								<div class="card margin-bottom-no">
									<div class="card-main">
										<div class="card-inner">
											<div class="card-inner">
												<div class="card-inner">
													<p class="card-heading">连接密码修改</p>
													<p>当前连接密码：<?php echo $_smarty_tpl->tpl_vars['user']->value->passwd;?>
</p>
													<div class="form-group form-group-label">
														<label class="floating-label" for="sspwd">连接密码</label>
														<input class="form-control" id="sspwd" type="text">
													</div>
												</div>
												<div class="card-action">
													<div class="card-action-btn pull-left">
														<button class="btn btn-flat waves-attach" id="ss-pwd-update">&nbsp;提交
														</button>
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



<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
	$(document).ready(function () {
		$("#ss-pwd-update").click(function () {
			$.ajax({
				type: "POST",
				url: "sspwd",
				dataType: "json",
				data: {
					sspwd: $("#sspwd").val()
				},
				success: function (data) {
					if (data.ret) {
						$("#result").modal();
						$("#msg").html("成功了");
					} else {
						$("#result").modal();
						$("#msg").html("失败了");
					}
					window.setTimeout("location.href='/user/node'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
				},
				error: function (jqXHR) {
					$("#result").modal();
					$("#msg").html(data.msg + "     出现了一些错误。");
				}
			})
		})
	})

function urlChange(id,is_mu,rule_id) {
    var site = './node/'+id+'?ismu='+is_mu+'&relay_rule='+rule_id;
	if(id == 'guide')
	{
		var doc = document.getElementById('infoifram').contentWindow.document;
		doc.open();
		doc.write('<img src="https://www.zhaoj.in/wp-content/uploads/2016/07/1469595156fca44223cf8da9719e1d084439782b27.gif" style="width: 100%;height: 100%; border: none;"/>');
		doc.close();
	}
	else
	{
		document.getElementById('infoifram').src = site;
	}
	$("#nodeinfo").modal();
}
function change_link_pass() {
	$("#change_link_pass").modal();
}
<?php echo '</script'; ?>
>
<?php }
}
