<?php
/* Smarty version 3.1.31, created on 2017-08-06 20:26:16
  from "D:\MAMP\htdocs\easyfq\resources\views\material\user\node.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59870ae80764d1_09976130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61fa99951a13f5bac7f8b37fe63c95702b6e1383' => 
    array (
      0 => 'D:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\user\\node.tpl',
      1 => 1490688162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/main.tpl' => 1,
    'file:user/footer.tpl' => 1,
  ),
),false)) {
function content_59870ae80764d1_09976130 (Smarty_Internal_Template $_smarty_tpl) {
?>








<?php $_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php echo '<script'; ?>
 src="//cdn.staticfile.org/canvasjs/1.7.0/canvasjs.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="//cdn.staticfile.org/jquery/2.2.1/jquery.min.js"><?php echo '</script'; ?>
>

	<main class="content">
		<div class="content-header ui-content-header">
			<div class="container">
				<h1 class="content-heading">节点列表</h1>
			</div>
		</div>
		<div class="container">
			<section class="content-inner margin-top-no">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card margin-bottom-no">
							<div class="card-main">
								<div class="card-inner">
									<h4>注意!</h4>
									<p>请勿在任何地方公开节点地址！</p>
									<p>流量比例为0.5即使用1000MB按照500MB流量记录记录结算.</p>
									<a href="javascript:void(0);" onClick="urlChange('guide',0,0,0)">如果您不知道如何查看节点的详细信息和二维码，请点我。</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ui-card-wrap">
					<div class="row">
						<div class="col-lg-12 col-sm-12">
							<div class="card">
								<div class="card-main">
									<div class="card-inner margin-bottom-no">
										<div class="tile-wrap">
											<?php $_smarty_tpl->_assignInScope('id', 0);
?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['node_prefix']->value, 'nodes', false, 'prefix');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['prefix']->value => $_smarty_tpl->tpl_vars['nodes']->value) {
?>
												<?php $_smarty_tpl->_assignInScope('id', $_smarty_tpl->tpl_vars['id']->value+1);
?>

													<div class="tile tile-collapse">
														<div data-toggle="tile" data-target="#heading<?php echo $_smarty_tpl->tpl_vars['node_order']->value->{$_smarty_tpl->tpl_vars['prefix']->value};?>
">
															<div class="tile-side pull-left" data-ignore="tile">
																<div class="avatar avatar-sm">
																	<span class="icon <?php if ($_smarty_tpl->tpl_vars['node_heartbeat']->value[$_smarty_tpl->tpl_vars['prefix']->value] == '在线') {?>text-green<?php } else {
if ($_smarty_tpl->tpl_vars['node_heartbeat']->value[$_smarty_tpl->tpl_vars['prefix']->value] == '暂无数据') {?>text-orange<?php } else { ?>text-red<?php }
}?>"><?php if ($_smarty_tpl->tpl_vars['node_heartbeat']->value[$_smarty_tpl->tpl_vars['prefix']->value] == "在线") {?>backup<?php } else {
if ($_smarty_tpl->tpl_vars['node_heartbeat']->value[$_smarty_tpl->tpl_vars['prefix']->value] == '暂无数据') {?>report<?php } else { ?>warning<?php }
}?></span>
																</div>
															</div>
															<div class="tile-inner">
																<div class="text-overflow"><?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
 | <i class="icon icon-lg">person</i> <?php echo $_smarty_tpl->tpl_vars['node_alive']->value[$_smarty_tpl->tpl_vars['prefix']->value];?>
 | <i class="icon icon-lg">build</i> <?php echo $_smarty_tpl->tpl_vars['node_method']->value[$_smarty_tpl->tpl_vars['prefix']->value];?>
 | <i class="icon icon-lg">traffic</i> <?php if (isset($_smarty_tpl->tpl_vars['node_bandwidth']->value[$_smarty_tpl->tpl_vars['prefix']->value]) == true) {
echo $_smarty_tpl->tpl_vars['node_bandwidth']->value[$_smarty_tpl->tpl_vars['prefix']->value];
} else { ?>N/A<?php }?></div>
															</div>
														</div>
														<div class="collapsible-region collapse" id="heading<?php echo $_smarty_tpl->tpl_vars['node_order']->value->{$_smarty_tpl->tpl_vars['prefix']->value};?>
">
															<div class="tile-sub">

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
																	<div class="card">
																		<div class="card-main">
																			<div class="card-inner">
																			<p class="card-heading" >
																				<a href="javascript:void(0);" onClick="urlChange('<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
',0,<?php if ($_smarty_tpl->tpl_vars['relay_rule']->value != null) {
echo $_smarty_tpl->tpl_vars['relay_rule']->value->id;
} else { ?>0<?php }?>)"><?php echo $_smarty_tpl->tpl_vars['node']->value->name;
if ($_smarty_tpl->tpl_vars['relay_rule']->value != null) {?> - <?php echo $_smarty_tpl->tpl_vars['relay_rule']->value->dist_node()->name;
}?></a>
																				<span class="label label-brand-accent"><?php echo $_smarty_tpl->tpl_vars['node']->value->status;?>
</span>
																			</p>


																			<?php if ($_smarty_tpl->tpl_vars['node']->value->sort > 2 && $_smarty_tpl->tpl_vars['node']->value->sort != 5 && $_smarty_tpl->tpl_vars['node']->value->sort != 10) {?>
																				<p>地址：<span class="label" >
																				<a href="javascript:void(0);" onClick="urlChange('<?php echo $_smarty_tpl->tpl_vars['node']->value->id;?>
',0,0)">请点这里进入查看详细信息</a>
																			<?php } else { ?>
																				<p>地址：<span class="label label-brand-accent">
																				<?php echo $_smarty_tpl->tpl_vars['node']->value->server;?>

																			<?php }?>

																				</span></p>

																			<?php if ($_smarty_tpl->tpl_vars['node']->value->sort == 0 || $_smarty_tpl->tpl_vars['node']->value->sort == 7 || $_smarty_tpl->tpl_vars['node']->value->sort == 8 || $_smarty_tpl->tpl_vars['node']->value->sort == 10) {?>
																				<p>加密方式：<span class="label label-brand">
																					<?php if ($_smarty_tpl->tpl_vars['node']->value->custom_method == 1) {?>
																						<?php echo $_smarty_tpl->tpl_vars['user']->value->method;?>

																					<?php } else { ?>
																						<?php echo $_smarty_tpl->tpl_vars['node']->value->method;?>

																					<?php }?>
																				</span></p>

																				<?php if (($_smarty_tpl->tpl_vars['node']->value->sort == 0 || $_smarty_tpl->tpl_vars['node']->value->sort == 10) && $_smarty_tpl->tpl_vars['node']->value->custom_rss == 1) {?>
																					<p>协议：<span class="label label-brand-accent">
																						<?php echo $_smarty_tpl->tpl_vars['user']->value->protocol;?>

																					</span></p>

																					<p>协议参数：<span class="label label-red">
																						<?php echo $_smarty_tpl->tpl_vars['user']->value->protocol_param;?>

																					</span></p>

																					<p>混淆方式：<span class="label label-brand">
																						<?php echo $_smarty_tpl->tpl_vars['user']->value->obfs;?>

																					</span></p>

																					<p>混淆参数：<span class="label label-green">
																						<?php echo $_smarty_tpl->tpl_vars['user']->value->obfs_param;?>

																					</span></p>
																				<?php }?>


																				<p>流量比例：<span class="label label-red">
																					<?php echo $_smarty_tpl->tpl_vars['node']->value->traffic_rate;?>

																				</span></p>



																				<?php if (($_smarty_tpl->tpl_vars['node']->value->sort == 0 || $_smarty_tpl->tpl_vars['node']->value->sort == 7 || $_smarty_tpl->tpl_vars['node']->value->sort == 8 || $_smarty_tpl->tpl_vars['node']->value->sort == 10) && ($_smarty_tpl->tpl_vars['node']->value->node_speedlimit != 0 || $_smarty_tpl->tpl_vars['user']->value->node_speedlimit != 0)) {?>
																					<p>节点限速：<span class="label label-green">
																						<?php if ($_smarty_tpl->tpl_vars['node']->value->node_speedlimit > $_smarty_tpl->tpl_vars['user']->value->node_speedlimit) {?>
																							<?php echo $_smarty_tpl->tpl_vars['node']->value->node_speedlimit;?>
Mbps
																						<?php } else { ?>
																							<?php echo $_smarty_tpl->tpl_vars['user']->value->node_speedlimit;?>
Mbps
																						<?php }?>
																					</span></p>
																				<?php }?>
																			<?php }?>

																			<p><?php echo $_smarty_tpl->tpl_vars['node']->value->info;?>
</p>

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


																					<p>地址：<span class="label label-brand-accent">
																					<?php echo $_smarty_tpl->tpl_vars['node']->value->server;?>


																					</span></p>

																					<p>端口：<span class="label label-brand-red">
																						<?php echo $_smarty_tpl->tpl_vars['single_muport']->value['user']['port'];?>

																					</span></p>

																					<p>加密方式：<span class="label label-brand">
																						<?php echo $_smarty_tpl->tpl_vars['single_muport']->value['user']['method'];?>

																					</span></p>

																					<p>协议：<span class="label label-brand-accent">
																						<?php echo $_smarty_tpl->tpl_vars['single_muport']->value['user']['protocol'];?>

																					</span></p>

																					<?php if ($_smarty_tpl->tpl_vars['single_muport']->value['user']['is_multi_user'] != 0) {?>
																					<p>协议参数：<span class="label label-green">
																						<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
:<?php echo $_smarty_tpl->tpl_vars['user']->value->passwd;?>

																					</span></p>
																					<?php }?>

																					<p>混淆方式：<span class="label label-brand">
																						<?php echo $_smarty_tpl->tpl_vars['single_muport']->value['user']['obfs'];?>

																					</span></p>

																					<?php if ($_smarty_tpl->tpl_vars['single_muport']->value['user']['is_multi_user'] == 1) {?>
																					<p>混淆参数：<span class="label label-green">
																						<?php echo $_smarty_tpl->tpl_vars['single_muport']->value['user']['obfs_param'];?>

																					</span></p>
																					<?php }?>

																					<p>流量比例：<span class="label label-red">
																						<?php echo $_smarty_tpl->tpl_vars['node']->value->traffic_rate;?>

																					</span></p>

																					<p><?php echo $_smarty_tpl->tpl_vars['node']->value->info;?>
</p>

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




																<?php if (isset($_smarty_tpl->tpl_vars['point_node']->value)) {?>
																	<?php if ($_smarty_tpl->tpl_vars['point_node']->value != null) {?>

																		<div class="card">
																			<div class="card-main">
																				<div class="card-inner" id="info<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">

																				</div>
																			</div>
																		</div>

																		<?php echo '<script'; ?>
>
																		$().ready(function(){
																			$('#heading<?php echo $_smarty_tpl->tpl_vars['node_order']->value->{$_smarty_tpl->tpl_vars['prefix']->value};?>
').on("shown.bs.tile", function() {

																				$("#info<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
").load("/user/node/<?php echo $_smarty_tpl->tpl_vars['point_node']->value->id;?>
/ajax");

																			});
																		});
																		<?php echo '</script'; ?>
>
																	<?php }?>
																<?php }?>

																<?php $_smarty_tpl->_assignInScope('point_node', null);
?>




															</div>



														</div>



												</div>

											<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

										</div>
									</div>

								</div>
							</div>
						</div>

						<div aria-hidden="true" class="modal modal-va-middle fade" id="nodeinfo" role="dialog" tabindex="-1">
							<div class="modal-dialog modal-full">
								<div class="modal-content">
									<iframe class="iframe-seamless" title="Modal with iFrame" id="infoifram"></iframe>
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



<?php echo '<script'; ?>
>


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
<?php echo '</script'; ?>
>
<?php }
}
