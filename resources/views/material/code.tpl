



{include file='header.tpl'}






	<main class="content">
		<div class="content-header ui-content-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-lg-push-0 col-sm-12 col-sm-push-0">
						<h1 class="content-heading">邀请码</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
				<section class="content-inner margin-top-no">
				
					<div class="card">
						<div class="card-main">
							<div class="card-inner">
								<p>{$config["appName"]} 的邀请码，没了的话就烧纸吧。</p>
							</div>
						</div>
					</div>
				
					
					
					
					<div class="card" id="card_invite">
						<div class="card-main">
							<div class="card-inner margin-bottom-no">
								<p class="card-heading">邀请码</p>
								<div class="card-table">
									<div class="table-responsive">
										<table class="table">
											<thead>
											<tr>
												<th>###</th>
												<th>邀请码 (点击邀请码进入注册页面)</th>
												<th>状态</th>
												<th>分享</th>
											</tr>
											</thead>
											<tbody>
											{foreach $codes as $code}
											<tr>
												<td>{$code->id}</td>
												<td><a href="/auth/register?code={$code->code}">{$code->code}</a></td>
												<td>可用</td>
												<td onmouseover="change_share('测试多分享', 'http://www.easyfq.cn/auth/register?code={$code->code}');">
													<div class="jiathis_style_32x32">
														<a class="jiathis_button_weixin share" code="{$code->code}" ></a>
														<a class="jiathis_button_cqq share" code="{$code->code}"></a>
													</div>
												</td>
											</tr>
											{/foreach}
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
		</div>
	</main>


{include file='footer.tpl'}