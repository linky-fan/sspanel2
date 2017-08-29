















{include file='user/main.tpl'}







	<main class="content">
		<div class="content-header ui-content-header">
			<div class="container">
				<h1 class="content-heading">邀请</h1>
			</div>
		</div>
		<div class="container">
			<section class="content-inner margin-top-no">
				<div class="row">
				
					<div class="col-lg-12 col-md-12">
						<div class="card margin-bottom-no">
							<div class="card-main">
								<div class="card-inner">
									<div class="card-inner">
										<p class="card-heading">注意！</p>

										<p>邀请码请给认识的需要的人。</p>

										<p>邀请有记录，若被邀请的人违反用户协议，您将会有连带责任。</p>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-lg-12 col-md-12">
						<div class="card margin-bottom-no">
							<div class="card-main">
								<div class="card-inner">
									<div class="card-inner">
										<p class="card-heading">说明</p>

										<p>邀请码暂时无法购买，请珍惜。</p>

										<p>公共页面不定期发放邀请码，如果用完邀请码可以关注公共邀请。</p>
										
										<p>您每拉一位用户注册，当 TA 充值时您就会获得 TA 充值金额的 <code>{$config["code_payback"]} %</code> 的提成。</p>
									</div>
									
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-lg-12 col-md-12">
						<div class="card margin-bottom-no">
							<div class="card-main">
								<div class="card-inner">
									<div class="card-inner">
										<p class="card-heading">邀请</p>
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
					
					<div class="col-lg-12 col-md-12">
						<div class="card margin-bottom-no">
							<div class="card-main">
								
									<div class="card-inner">
									
										<div class="card-table">
											<div class="table-responsive">
											{$codes->render()}
												<table class="table">
													<thead>
													<tr>
														<th>###</th>
														<th>邀请码(点右键复制链接)</th>
														<th>状态</th>
														<th>复制</th>
														<th>分享</th>
													</tr>
													</thead>
													<tbody>
													{foreach $codes as $code}
														<tr>
															<td><b>{$code->id}</b></td>
															<td><a href="/auth/register?code={$code->code}" target="_blank">{$code->code}</a>
															</td>
															<td>可用</td>
															<td>
																<span class="btn btn-brand" data-clipboard-text="http://www.easyfq.cn/auth/register?code={$code->code}">复制</span>
															</td>
															<td onmouseover="change_share('测试多分享', 'http://www.easyfq.cn/auth/register?code={$code->code}');">
																<div class="jiathis_style_32x32">
																	<a class="jiathis_button_weixin share"></a>
																	<a class="jiathis_button_cqq share"></a>
																</div>
															</td>
														</tr>
													{/foreach}
													</tbody>
												</table>
											{$codes->render()}
											</div>
										</div>
									
								</div>
							</div>
						</div>
					</div>
					
					
					
					{include file='dialog.tpl'}
				</div>
			</section>
		</div>
	</main>







{include file='user/footer.tpl'}


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
    })

</script>

