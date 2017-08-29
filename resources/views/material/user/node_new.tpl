<script src="//cdn.staticfile.org/canvasjs/1.7.0/canvasjs.js"></script>
<script src="//cdn.staticfile.org/jquery/2.2.1/jquery.min.js"></script>


{include file='header.tpl'}


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
						{*<li><a href="/user/code">我的提现</a></li>*}
						<li><a class="active" href="/user/node">节点信息</a></li>
						<li><a href="/user/ticket">建议反馈</a></li>
						{if $user->isAdmin()}
							<li>
								<a href="/admin">
									管理面板
								</a>
							</li>
						{/if}
					</ul>
				</div>
			</div>
			<div class="col-md-9 right">
				<div class="title">节点记录</div>
				<div class="right-box">
					<div class="col-lg-12 col-sm-12">
						<div class="card">
							<div class="card-main"  id="node_info_page">
								<div class="card-inner margin-bottom-no">
									<div class="tile-wrap">
										{$id=0}
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
														<span class="col-lg-6 text-right">{$ary['server_port']}</span>
													</div>

												</div>
												<div class="col-lg-12">
													<div class="row">
														<span class="col-lg-6">加密方式</span>
														<span class="col-lg-6 text-right">{$ary['method']}</span>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="row">
														<span class="col-lg-6">密码</span>
														<span class="col-lg-6 text-right">{$ary['password']}</span>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="row">
														<span class="col-lg-6">协议</span>
														<span class="col-lg-6 text-right"> {$user->protocol}</span>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="row">
														<span class="col-lg-6">协议参数</span>
														<span class="col-lg-6 text-right">&nbsp;{$user->protocol_param}</span>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="row">
														<span class="col-lg-6">混淆</span>
														<span class="col-lg-6 text-right">{$user->obfs}</span>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="row">
														<span class="col-lg-6">混淆参数</span>
														<span class="col-lg-6 text-right">{$user->obfs_param}</span>
													</div>
												</div>
											</div>


										</div>
										<div class="col-lg-12">
											<br>
											{foreach $node_prefix as $prefix => $nodes}
												<div class="col-lg-6">
												{$id=$id+1}
												<br>
												{foreach $nodes as $node}
													{$relay_rule = null}
													{if $node->sort == 10}
														{$relay_rule = $tools->pick_out_relay_rule($node->id, $user->port, $relay_rules)}
													{/if}
													{if $node->mu_only == 0}
														<div class="card text-center">
															<div class="card-main">
																<div class="card-inner node_info_box">
																	<div class="node_info">
																		<p style="color: #5CAB3E">{$node->name}{if $relay_rule != null} - {$relay_rule->dist_node()->name}{/if}</p>
																		{if $node->sort > 2 && $node->sort != 5 && $node->sort != 10}
																		<p>地址：<span class="label" >
																			<a href="javascript:void(0);" onClick="urlChange('{$node->id}',0,0)">请点这里进入查看详细信息</a>
																				{else}
																		<p>地址：<span>
																			{$node->server}
																				{/if}
																		</span>
																		</p>
																	</div>
																	<div class="qr_code text-center">
																		<a href="javascript:void(0);" onClick="urlChange('{$node->id}',0,{if $relay_rule != null}{$relay_rule->id}{else}0{/if})">
																			<img src="/theme/material/images/qr_code.png" alt="">
																		</a>
																		<p>点击打开二维码 <br>使用客户端扫一扫</p>
																	</div>
																</div>
															</div>
														</div>
													{/if}
													{if $node->sort == 0 || $node->sort == 10}
														{$point_node=$node}
													{/if}
													{if ($node->sort == 0 || $node->sort == 10) && $node->custom_rss == 1}
														{foreach $node_muport as $single_muport}

															{if !($single_muport['server']->node_class <= $user->class && ($single_muport['server']->node_group == 0 || $single_muport['server']->node_group == $user->node_group))}
																{continue}
															{/if}

															{if !($single_muport['user']->class >= $node->node_class && ($node->node_group == 0 || $single_muport['user']->node_group == $node->node_group))}
																{continue}
															{/if}

															{$relay_rule = null}
															{if $node->sort == 10 && $single_muport['user']['is_multi_user'] != 2}
																{$relay_rule = $tools->pick_out_relay_rule($node->id, $single_muport['server']->server, $relay_rules)}
															{/if}
															<div class="card">
																<div class="card-main">
																	<div class="card-inner">
																		<p class="card-heading" >
																			<a href="javascript:void(0);" onClick="urlChange('{$node->id}',{$single_muport['server']->server},{if $relay_rule != null}{$relay_rule->id}{else}0{/if})">{$prefix} {if $relay_rule != null} - {$relay_rule->dist_node()->name}{/if} - 单端口多用户 Shadowsocks - {$single_muport['server']->server} 端口</a>
																			<span class="label label-brand-accent">{$node->status}</span>
																		</p>
																		<p>地址：<span class="label label-brand-accent">{$node->server}</span></p>
																		<p>端口：<span class="label label-brand-red">{$single_muport['user']['port']}</span></p>
																	</div>
																</div>
															</div>
														{/foreach}
													{/if}
												{/foreach}
												{$point_node=null}
											</div>
										{/foreach}
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
													<p>当前连接密码：{$user->passwd}</p>
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
					{include file='dialog.tpl'}
				</div>
			</div>
		</div>
	</section>
</section>



{include file='footer.tpl'}
<script>
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
					window.setTimeout("location.href='/user/node'", {$config['jump_delay']});
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
</script>
