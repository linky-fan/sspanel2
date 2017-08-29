<?php
/* Smarty version 3.1.31, created on 2017-08-06 20:15:55
  from "D:\MAMP\htdocs\easyfq\resources\views\material\admin\node\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5987087bab1849_62531183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2aa9a6c6347bcc7c200ed5841246e84f4348bd24' => 
    array (
      0 => 'D:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\admin\\node\\edit.tpl',
      1 => 1490688162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/main.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_5987087bab1849_62531183 (Smarty_Internal_Template $_smarty_tpl) {
?>



<?php $_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>








	<main class="content">
		<div class="content-header ui-content-header">
			<div class="container">
				<h1 class="content-heading">编辑节点 #<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
</h1>
			</div>
		</div>
		<div class="container">
			<div class="col-lg-12 col-sm-12">
				<section class="content-inner margin-top-no">
					<form id="main_form">
						<div class="card">
							<div class="card-main">
								<div class="card-inner">
									<div class="form-group form-group-label">
										<label class="floating-label" for="name">节点名称</label>
										<input class="form-control" id="name" name="name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['node']->value->name;?>
">
									</div>


									<div class="form-group form-group-label">
										<label class="floating-label" for="server">节点地址</label>
										<input class="form-control" id="server" name="server" type="text" value="<?php echo $_smarty_tpl->tpl_vars['node']->value->server;?>
">
									</div>

									<div class="form-group form-group-label">
										<label class="floating-label" for="server">节点IP(不填则自动获取，填写请按照 <a href="https://github.com/esdeathlove/ss-panel-v3-mod/wiki/%E8%8A%82%E7%82%B9IP%E5%A1%AB%E5%86%99%E8%A7%84%E5%88%99">这里</a> 的规则进行填写)</label>
										<input class="form-control" id="node_ip" name="node_ip" type="text" value="<?php echo $_smarty_tpl->tpl_vars['node']->value->node_ip;?>
">
									</div>

									<div class="form-group form-group-label">
										<label class="floating-label" for="method">加密方式</label>
										<input class="form-control" id="method" name="method" type="text" value="<?php echo $_smarty_tpl->tpl_vars['node']->value->method;?>
">
									</div>

									<div class="form-group form-group-label">
										<label class="floating-label" for="rate">流量比例</label>
										<input class="form-control" id="rate" name="rate" type="text" value="<?php echo $_smarty_tpl->tpl_vars['node']->value->traffic_rate;?>
">
									</div>


									<div class="form-group form-group-label">
										<div class="checkbox switch">
											<label for="custom_method">
												<input <?php if ($_smarty_tpl->tpl_vars['node']->value->custom_method == 1) {?>checked<?php }?> class="access-hide" id="custom_method" name="custom_method" type="checkbox"><span class="switch-toggle"></span>自定义加密
											</label>
										</div>
									</div>

									<div class="form-group form-group-label">
										<div class="checkbox switch">
											<label for="custom_rss">
												<input <?php if ($_smarty_tpl->tpl_vars['node']->value->custom_rss == 1) {?>checked<?php }?> class="access-hide" id="custom_rss" type="checkbox" name="custom_rss"><span class="switch-toggle"></span>自定义协议&混淆
											</label>
										</div>
									</div>

									<div class="form-group form-group-label">
										<div class="checkbox switch">
											<label for="mu_only">
												<input <?php if ($_smarty_tpl->tpl_vars['node']->value->mu_only == 1) {?>checked<?php }?> class="access-hide" id="mu_only" type="checkbox" name="mu_only"><span class="switch-toggle"></span>只启用单端口多用户
											</label>
										</div>
									</div>


								</div>
							</div>
						</div>

						<div class="card">
							<div class="card-main">
								<div class="card-inner">
									<div class="form-group form-group-label">
										<div class="checkbox switch">
											<label for="type">
												<input <?php if ($_smarty_tpl->tpl_vars['node']->value->type == 1) {?>checked<?php }?> class="access-hide" id="type" name="type" type="checkbox"><span class="switch-toggle"></span>是否显示
											</label>
										</div>
									</div>

									<div class="form-group form-group-label">
										<label class="floating-label" for="status">节点状态</label>
										<input class="form-control" id="status" name="status" type="text" value="<?php echo $_smarty_tpl->tpl_vars['node']->value->status;?>
">
									</div>

									<div class="form-group form-group-label">
										<div class="form-group form-group-label">
												<label class="floating-label" for="sort">节点类型</label>
												<select id="sort" class="form-control" name="sort">
													<option value="0" <?php if ($_smarty_tpl->tpl_vars['node']->value->sort == 0) {?>selected<?php }?>>Shadowsocks</option>
													<option value="1" <?php if ($_smarty_tpl->tpl_vars['node']->value->sort == 1) {?>selected<?php }?>>VPN/Radius基础</option>
													<option value="2" <?php if ($_smarty_tpl->tpl_vars['node']->value->sort == 2) {?>selected<?php }?>>SSH</option>
													<option value="3" <?php if ($_smarty_tpl->tpl_vars['node']->value->sort == 3) {?>selected<?php }?>>PAC</option>
													<option value="4" <?php if ($_smarty_tpl->tpl_vars['node']->value->sort == 4) {?>selected<?php }?>>APN文件外链</option>
													<option value="5" <?php if ($_smarty_tpl->tpl_vars['node']->value->sort == 5) {?>selected<?php }?>>Anyconnect</option>
													<option value="6" <?php if ($_smarty_tpl->tpl_vars['node']->value->sort == 6) {?>selected<?php }?>>APN</option>
													<option value="7" <?php if ($_smarty_tpl->tpl_vars['node']->value->sort == 7) {?>selected<?php }?>>PAC PLUS(Socks 代理生成 PAC文件)</option>
													<option value="8" <?php if ($_smarty_tpl->tpl_vars['node']->value->sort == 8) {?>selected<?php }?>>PAC PLUS PLUS(HTTPS 代理生成 PAC文件)</option>
													<option value="9" <?php if ($_smarty_tpl->tpl_vars['node']->value->sort == 9) {?>selected<?php }?>>Shadowsocks 单端口多用户</option>
													<option value="10" <?php if ($_smarty_tpl->tpl_vars['node']->value->sort == 10) {?>selected<?php }?>>Shadowsocks 中转</option>
												</select>
											</div>
									</div>

									<div class="form-group form-group-label">
										<label class="floating-label" for="info">节点描述</label>
										<input class="form-control" id="info" name="info" type="text" value="<?php echo $_smarty_tpl->tpl_vars['node']->value->info;?>
">
									</div>

									<div class="form-group form-group-label">
										<label class="floating-label" for="class">节点等级（不分级请填0，分级为数字）</label>
										<input class="form-control" id="class" name="class" type="text" value="<?php echo $_smarty_tpl->tpl_vars['node']->value->node_class;?>
">
									</div>

									<div class="form-group form-group-label">
										<label class="floating-label" for="group">节点群组（分组为数字，不分组请填0）</label>
										<input class="form-control" id="group" name="group" type="text" value="<?php echo $_smarty_tpl->tpl_vars['node']->value->node_group;?>
">
									</div>


									<div class="form-group form-group-label">
										<label class="floating-label" for="node_bandwidth_limit">节点流量上限（不使用的话请填0）（GB）</label>
										<input class="form-control" id="node_bandwidth_limit" name="node_bandwidth_limit" type="text" value="<?php echo $_smarty_tpl->tpl_vars['node']->value->node_bandwidth_limit/1024/1024/1024;?>
">
									</div>

									<div class="form-group form-group-label">
										<label class="floating-label" for="bandwidthlimit_resetday">节点流量上限清空日</label>
										<input class="form-control" id="bandwidthlimit_resetday" name="bandwidthlimit_resetday" type="text" value="<?php echo $_smarty_tpl->tpl_vars['node']->value->bandwidthlimit_resetday;?>
">
									</div>

									<div class="form-group form-group-label">
										<label class="floating-label" for="node_speedlimit">节点限速(对于每个用户端口)（Mbps）</label>
										<input class="form-control" id="node_speedlimit" name="node_speedlimit" type="text" value="<?php echo $_smarty_tpl->tpl_vars['node']->value->node_speedlimit;?>
">
									</div>
								</div>
							</div>
						</div>



						<div class="card">
							<div class="card-main">
								<div class="card-inner">

									<div class="form-group">
										<div class="row">
											<div class="col-md-10 col-md-push-1">
												<button id="submit" type="submit" class="btn btn-block btn-brand waves-attach waves-light">修改</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
					<?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


			</div>



		</div>
	</main>











<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<?php echo '<script'; ?>
>

	$('#main_form').validate({
		rules: {
		  name: {required: true},
		  server: {required: true},
		  method: {required: true},
		  rate: {required: true},
		  info: {required: true},
		  group: {required: true},
		  status: {required: true},
		  node_speedlimit: {required: true},
		  sort: {required: true},
		  node_bandwidth_limit: {required: true},
		  bandwidthlimit_resetday: {required: true}
		},


		submitHandler: function() {
			if(document.getElementById('custom_method').checked)
			{
				var custom_method=1;
			}
			else
			{
				var custom_method=0;
			}

			if(document.getElementById('type').checked)
			{
				var type=1;
			}
			else
			{
				var type=0;
			}
			
			if(document.getElementById('custom_rss').checked)
			{
				var custom_rss=1;
			}
			else
			{
				var custom_rss=0;
			}

			if(document.getElementById('mu_only').checked)
			{
				var mu_only=1;
			}
			else
			{
				var mu_only=0;
			}



            $.ajax({

				type: "PUT",
                url: "/admin/node/<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
",
                dataType: "json",
				
                data: {
                    name: $("#name").val(),
                    server: $("#server").val(),
										node_ip: $("#node_ip").val(),
                    method: $("#method").val(),
                    custom_method: custom_method,
                    rate: $("#rate").val(),
                    info: $("#info").val(),
                    type: type,
										group: $("#group").val(),
                    status: $("#status").val(),
                    sort: $("#sort").val(),
										node_speedlimit: $("#node_speedlimit").val(),
										class: $("#class").val(),
										node_bandwidth_limit: $("#node_bandwidth_limit").val(),
										bandwidthlimit_resetday: $("#bandwidthlimit_resetday").val(),
										custom_rss: custom_rss,
										mu_only: mu_only
					
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
                        $("#msg").html(data.msg);
						
                        window.setTimeout("location.href=top.document.referrer", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
						
                    } else {
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    }
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg+"  发生错误了。");
                }
            });
		}
	});

<?php echo '</script'; ?>
>


<?php }
}
