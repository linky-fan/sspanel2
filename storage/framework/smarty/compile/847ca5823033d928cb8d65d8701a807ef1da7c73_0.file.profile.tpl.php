<?php
/* Smarty version 3.1.31, created on 2017-07-29 17:25:09
  from "D:\MAMP\htdocs\easyfq\resources\views\material\user\profile.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597c5475a3c1e8_97972381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '847ca5823033d928cb8d65d8701a807ef1da7c73' => 
    array (
      0 => 'D:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\user\\profile.tpl',
      1 => 1499949840,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/main.tpl' => 1,
    'file:user/footer.tpl' => 1,
  ),
),false)) {
function content_597c5475a3c1e8_97972381 (Smarty_Internal_Template $_smarty_tpl) {
?>



<?php $_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>








	<main class="content">
		<div class="content-header ui-content-header">
			<div class="container">
				<h1 class="content-heading">我的账户</h1>
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
										<p class="card-heading">我的帐号</p>
										<dl class="dl-horizontal">
											<dt>用户名</dt>
											<dd><?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
</dd>
											<dt>邮箱</dt>
											<dd><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</dd>
										</dl>
									</div>
									<div class="card-action">
										<div class="card-action-btn pull-left">
											<a class="btn btn-flat waves-attach" href="kill"><span class="icon">check</span>&nbsp;删除我的账户</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					
					
						<div class="card">
							<div class="card-main">
								<div class="card-inner margin-bottom-no">
									<p class="card-heading">最近十次登录IP</p>
									<p>请确认都为自己的IP，如有异常请及时修改密码。</p>
									<div class="card-table">
										<div class="table-responsive">
											<table class="table">
												<tr>
													
													<th>IP</th>
													<th>归属地</th>
												</tr>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userloginip']->value, 'location', false, 'single');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['single']->value => $_smarty_tpl->tpl_vars['location']->value) {
?>
													<tr>
														
														<td><?php echo $_smarty_tpl->tpl_vars['single']->value;?>
</td>
														<td><?php echo $_smarty_tpl->tpl_vars['location']->value;?>
</td>
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



						
						<div class="card margin-bottom-no">
							<div class="card-main">
								<div class="card-inner">
									<div class="card-inner">
										<p class="card-heading">奖励时间记录</p>
										<div class="card-table">
											<div class="table-responsive">
											<?php echo $_smarty_tpl->tpl_vars['timebacks']->value->render();?>

												<table class="table">
													<thead>
													<tr>
														<th>###</th>
														<th>邀请码</th>
														<th>注册用户</th>
														<th>奖励时间</th>
													</tr>
													</thead>
													<tbody>
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['timebacks']->value, 'timeback');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['timeback']->value) {
?>
														<tr>
															<td><b><?php echo $_smarty_tpl->tpl_vars['timeback']->value->id;?>
</b></td>
															<td><b><?php echo $_smarty_tpl->tpl_vars['timeback']->value->invite_code;?>
</b></td>
															<?php if ($_smarty_tpl->tpl_vars['timeback']->value->user() != null) {?>
																<td><?php echo $_smarty_tpl->tpl_vars['timeback']->value->user()->user_name;?>

																</td>
																<?php } else { ?>
																<td>已注销
																</td>
															<?php }?>
															</td>
															<td><?php echo $_smarty_tpl->tpl_vars['timeback']->value->ref_get;?>
 天</td>
														</tr>
													<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

													</tbody>
												</table>
											<?php echo $_smarty_tpl->tpl_vars['timebacks']->value->render();?>

											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
					
				</div>
			</section>
		</div>
	</main>
	
	
	







<?php $_smarty_tpl->_subTemplateRender('file:user/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
