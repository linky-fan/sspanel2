


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
						<li><a class="active" href="/user/bought">购买记录</a></li>
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
				<div class="title">购买记录</div>
				<div class="right-box">
					<div class="col-lg-12 col-sm-12">
						<div class="row">
							<section class="content-inner margin-top-no">
								<div class="table-responsive">
									{$shops->render()}
									<table class="table ">
										<tr>
											<th>ID</th>
											<th>商品名称</th>
											<th>内容</th>
											<th>价格</th>
											<th>购买时间</th>
											<th>购买状态</th>
										</tr>
										{foreach $shops as $shop}
											<tr>
												<td>#{$shop->id}</td>
												<td>{$shop->shop()->name}</td>
												<td>{$shop->shop()->content()}</td>
												<td>{$shop->price} 元</td>
												<td>{date('Y-m-d H:i:s',$shop->datetime)}</td>
												<td>{if $shop->status == 1}支付失败{else}支付成功{/if}</td>

											</tr>
										{/foreach}
									</table>
									{$shops->render()}
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
								{include file='dialog.tpl'}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>


{include file='footer.tpl'}




<script>
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
					window.setTimeout("location.href=window.location.href", {$config['jump_delay']});
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
	
</script>







