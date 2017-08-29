{include file='header.tpl'}




<section class="index_2">
	<section class="question">
		<div class="container">
			<div class="col-md-3 left text-center">
				<div class="left-box">
					<ul>

						<li><a {if $id == 1}class="active"{/if} href="/question">新手教程</a></li>
						<li><a {if $id == 2}class="active"{/if}  href="/question/2">免费试用</a></li>
						<li><a {if $id == 3}class="active"{/if} href="/question/3">支付问题</a></li>
						<li><a {if $id == 4}class="active"{/if} href="/question/4">账号问题</a></li>
						<li><a {if $id == 5}class="active"{/if} href="/question/5">邀请问题</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-9 right">
				<div class="title">
						{if $id == 1}新手教程{/if}
						{if $id == 2}免费试用{/if}
						{if $id == 3}支付问题{/if}
						{if $id == 4}账号问题{/if}
						{if $id == 5}邀请问题{/if}
				</div>
				<div class="right-box" style="margin-left: 45px">
					<ul>
						{foreach $question_list as $key => $item}
							<li>
								<h4>{$item->name}</h4>
								<p>
									{$item->content}
								</p>
							</li>
						{/foreach}

					</ul>
				</div>
			</div>
		</div>
	</section>
</section>

{include file='footer.tpl'}