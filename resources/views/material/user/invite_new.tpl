


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
						<li><a class="active" href="/user/invite">我的邀请</a></li>
						<li><a href="/user/bought">购买记录</a></li>
						{*<li><a href="/user/code">我的提现</a></li>*}
						<li><a href="/user/node">节点信息</a></li>
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
				<div class="title">我的邀请</div>
				<div class="right-box">
					<div class="col-lg-12 col-md-12">
						<div class="row">
							<div class="card margin-bottom-no">
								<div class="card-main">
									<div class="card-inner">
										<div class="card-inner">
											<p>当前您可以生成<code>{$user->invite_num}</code>个邀请码。 </p>
										</div>
										{if $user->invite_num }
											<div class="card-action">
												<div class="card-action-btn pull-left">
													<button id="invite" class="btn btn-flat waves-attach">生成我的邀请码</button>
												</div>
											</div>
										{/if}
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
												{$codes->render()}
												<table class="table">
													<tbody>
													{foreach $codes as $code}
														<tr>
															<td>我的邀请码</td>
															<td><a href="/auth/register?code={$code->code}" target="_blank">{$code->code}</a>
															</td>
															<td>
																<span class="btn btn-brand" data-clipboard-text="http://www.easyfq.cn/auth/register?code={$code->code}">复制</span>
															</td>
															<td onmouseover="change_share('易连加速器', 'http://www.easyfq.cn/auth/register?code={$code->code}');">
																<div class="jiathis_style_32x32">
																	<a class="jiathis_button_weixin share"></a>
																	<a class="jiathis_button_cqq share"></a>
																</div>
															</td>
														</tr>
													{/foreach}
													</tbody>
													<tbody>
													<tr>
														<td>我的奖励金</td>
														<td>{$user->money}元
															(奖励金可以用来抵扣支付,满10元可申请提现)
															{*{if $withdrawal}*}
																{*{if $withdrawal->status == 1}*}
																	{*{if $withdrawal->is_withdrawal ==1}*}
																		{*(提现成功,金额已经转入您的支付宝账户中,请查收!)*}
																	{*{else}*}
																		{*(提现失败,原因是审核不通过!)*}
																	{*{/if}*}
																{*{else}*}
																	{*<a class="btn btn-brand-accent" disabled="" href="javascript:void(0);">提现审核中</a>*}
																{*{/if}*}
															{*{/if}*}
														</td>
														<td>
															{if $withdrawal}
																{if $withdrawal->status == 1}
																	<a href="javascript:void(0);" onclick="withdrawal_now()" class="btn btn-brand">马上提现</a>
																{else}
																	<a class="btn btn-brand-accent" disabled="" href="javascript:void(0);">提现审核中</a>
																{/if}
															{/if}

															<br>
															*提现需要2-3个工作日
														</td>
														<td>
															<a href="javascript:void(0);" onclick="show_withdrawal()" class="btn btn-brand">提现记录</a>
														</td>
													</tr>
													</tbody>
												</table>
												{$codes->render()}
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
													{$paybacks->render()}
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
														{foreach $paybacks as $payback}
															<tr>
																<td><b>{$payback->id}</b></td>
																{if $payback->user()!=null}
																	<td>{$payback->user()->user_name}
																	</td>
																{else}
																	<td>已注销
																	</td>
																{/if}
																</td>
																<td>{$payback->time} 天</td>
																<td>{$payback->ref_get} 元</td>
															</tr>
														{/foreach}
														</tbody>
													</table>
													{$paybacks->render()}
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
															{foreach $list as $item}
																<tr>
																	<td>#{$item->id}</td>
																	<td>{$item->ali_id}</td>
																	<td>{$item->money}&nbsp;元</td>
																	<td>{date('Y-m-d H:i:s',$item->datetime)}</td>
																	{if $item->status == 0}
																	<td><a class="btn btn-brand" href="javascript:void(0);"
																		   disabled>提现中</a></td>
																	{else}
																		{if $item->is_withdrawal == 0}
																			<td><a class="btn btn-brand" href="javascript:void(0);"
																				   disabled>提现失败</a></td>
																		{else}
																			<td><a class="btn btn-brand" href="javascript:void(0);"
																				   disabled>提现完成</a></td>
																		{/if}
																	{/if}
																</tr>
															{/foreach}
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
					{include file='dialog.tpl'}
				</div>
			</div>
		</div>
	</section>
</section>






<script src="//cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.5.16/clipboard.min.js"></script>
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=2138764" charset="utf-8"></script>








{include file='footer.tpl'}


<script>
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
						window.setTimeout("location.href=window.location.href", {$config['jump_delay']});
					} else {
						$("#result").modal();
						$("#msg").html(data.msg);
						<!--window.setTimeout("location.href=window.location.href", {$config['jump_delay']});-->
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
</script>

