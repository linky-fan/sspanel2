<?php
/* Smarty version 3.1.31, created on 2017-07-29 15:56:45
  from "D:\MAMP\htdocs\easyfq\resources\views\material\admin\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597c3fbdbd2aa2_82699924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ba89d93a482378e371c100267de6e895d284f6aa' => 
    array (
      0 => 'D:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\admin\\index.tpl',
      1 => 1500912623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/main.tpl' => 1,
    'file:admin/footer.tpl' => 1,
  ),
),false)) {
function content_597c3fbdbd2aa2_82699924 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>








	<main class="content">
		<div class="content-header ui-content-header">
			<div class="container">
				<h1 class="content-heading">汇总</h1>
			</div>
		</div>
		<div class="container">
			<section class="content-inner margin-top-no">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card margin-bottom-no">
							<div class="card-main">
								<div class="card-inner">
									<p>下面是系统运行情况简报。</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ui-card-wrap">
					<div class="row">
					
						<div class="col-lg-6 col-sm-6">
						
						
							<div class="card">
								<div class="card-main">
									<div class="card-inner margin-bottom-no">
									
										<div id="check_chart" style="height: 300px; width: 100%;"></div>
										
										<?php echo '<script'; ?>
 src="//cdn.staticfile.org/canvasjs/1.7.0/canvasjs.js"><?php echo '</script'; ?>
>
										<?php echo '<script'; ?>
 type="text/javascript">
											var chart = new CanvasJS.Chart("check_chart",
											{
												title:{
													text: "用户签到情况(总用户 <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTotalUser();?>
人)",
													fontFamily: "Impact",
													fontWeight: "normal"
												},

												legend:{
													verticalAlign: "bottom",
													horizontalAlign: "center"
												},
												data: [
												{
													//startAngle: 45,
													indexLabelFontSize: 20,
													indexLabelFontFamily: "Garamond",
													indexLabelFontColor: "darkgrey",
													indexLabelLineColor: "darkgrey",
													indexLabelPlacement: "outside",
													type: "doughnut",
													showInLegend: true,
													dataPoints: [
														{
															y: <?php echo (1-($_smarty_tpl->tpl_vars['sts']->value->getCheckinUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()))*100;?>
, legendText:"没有签到过的用户 <?php echo number_format((1-($_smarty_tpl->tpl_vars['sts']->value->getCheckinUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()))*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTotalUser()-$_smarty_tpl->tpl_vars['sts']->value->getCheckinUser();?>
人", indexLabel: "没有签到过的用户 <?php echo number_format((1-($_smarty_tpl->tpl_vars['sts']->value->getCheckinUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()))*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTotalUser()-$_smarty_tpl->tpl_vars['sts']->value->getCheckinUser();?>
人"
														},
														{
															y: <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getCheckinUser()-$_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser())/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser())*100;?>
, legendText:"曾经签到过的用户 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getCheckinUser()-$_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser())/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser())*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getCheckinUser()-$_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser();?>
人", indexLabel: "曾经签到过的用户 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getCheckinUser()-$_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser())/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser())*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getCheckinUser()-$_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser();?>
人"
														},
														{
															y: <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100;?>
, legendText:"今日签到用户 <?php echo number_format($_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser();?>
人", indexLabel: "今日签到用户 <?php echo number_format($_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTodayCheckinUser();?>
人"
														}
													]
												}
												]
											});

											chart.render();
										<?php echo '</script'; ?>
>
										
									</div>
									
								</div>
							</div>
							
							
							<div class="card">
								<div class="card-main">
									<div class="card-inner margin-bottom-no">
									
										<div id="alive_chart" style="height: 300px; width: 100%;"></div>
										<?php echo '<script'; ?>
 src="//cdn.staticfile.org/canvasjs/1.7.0/canvasjs.js"><?php echo '</script'; ?>
>
										<?php echo '<script'; ?>
 type="text/javascript">
											var chart = new CanvasJS.Chart("alive_chart",
											{
												title:{
													text: "用户在线情况(总用户 <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTotalUser();?>
人)",
													fontFamily: "Impact",
													fontWeight: "normal"
												},

												legend:{
													verticalAlign: "bottom",
													horizontalAlign: "center"
												},
												data: [
												{
													//startAngle: 45,
													indexLabelFontSize: 20,
													indexLabelFontFamily: "Garamond",
													indexLabelFontColor: "darkgrey",
													indexLabelLineColor: "darkgrey",
													indexLabelPlacement: "outside",
													type: "doughnut",
													showInLegend: true,
													dataPoints: [
														{
															y: <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getUnusedUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()))*100;?>
, legendText:"从未在线的用户 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getUnusedUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()))*100,2);?>
% <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getUnusedUser()));?>
人", indexLabel: "从未在线的用户 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getUnusedUser()/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()))*100,2);?>
% <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getUnusedUser()));?>
人"
														},
														{
															y: <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getTotalUser()-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getUnusedUser())/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser())*100;?>
, legendText:"一天以前在线的用户 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getTotalUser()-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getUnusedUser())/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser())*100,2);?>
% <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getTotalUser()-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getUnusedUser());?>
人", indexLabel: "一天以前在线的用户 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getTotalUser()-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getUnusedUser())/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser())*100,2);?>
% <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getTotalUser()-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getUnusedUser());?>
人"
														},
														{
															y: <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100;?>
, legendText:"一天内在线的用户 <?php echo number_format(($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100,2);?>
% <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600));?>
人", indexLabel: "一天内在线的用户 <?php echo number_format(($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100,2);?>
% <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(86400)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600));?>
人"
														},
														{
															y: <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100;?>
, legendText:"一小时内在线的用户 <?php echo number_format(($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100,2);?>
% <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60));?>
人", indexLabel: "一小时内在线的用户 <?php echo number_format(($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100,2);?>
% <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(3600)-$_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60));?>
人"
														},
														{
															y: <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100;?>
, legendText:"一分钟内在线的用户 <?php echo number_format(($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100,2);?>
% <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60));?>
人", indexLabel: "一分钟内在线的用户 <?php echo number_format(($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60))/$_smarty_tpl->tpl_vars['sts']->value->getTotalUser()*100,2);?>
% <?php echo ($_smarty_tpl->tpl_vars['sts']->value->getOnlineUser(60));?>
人"
														}
													]
												}
												]
											});

											chart.render();
										<?php echo '</script'; ?>
>
										
									</div>
									
								</div>
							</div>
						
						
						</div>
						
						
						<div class="col-lg-6 col-sm-6">
						
						
							<div class="card">
								<div class="card-main">
									<div class="card-inner margin-bottom-no">
									
										<div id="node_chart" style="height: 300px; width: 100%;"></div>
										
										<?php echo '<script'; ?>
 src="//cdn.staticfile.org/canvasjs/1.7.0/canvasjs.js"><?php echo '</script'; ?>
>
										<?php echo '<script'; ?>
 type="text/javascript">
											var chart = new CanvasJS.Chart("node_chart",
											{
												title:{
													text: "节点在线情况(节点数 <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTotalSSNode();?>
个)",
													fontFamily: "Impact",
													fontWeight: "normal"
												},

												legend:{
													verticalAlign: "bottom",
													horizontalAlign: "center"
												},
												data: [
												{
													//startAngle: 45,
													indexLabelFontSize: 20,
													indexLabelFontFamily: "Garamond",
													indexLabelFontColor: "darkgrey",
													indexLabelLineColor: "darkgrey",
													indexLabelPlacement: "outside",
													type: "doughnut",
													showInLegend: true,
													dataPoints: [
														<?php if ($_smarty_tpl->tpl_vars['sts']->value->getTotalSSNode() != 0) {?>
															{
																y: <?php echo (1-($_smarty_tpl->tpl_vars['sts']->value->getAliveSSNode()/$_smarty_tpl->tpl_vars['sts']->value->getTotalSSNode()))*100;?>
, legendText:"离线节点 <?php echo number_format((1-($_smarty_tpl->tpl_vars['sts']->value->getAliveSSNode()/$_smarty_tpl->tpl_vars['sts']->value->getTotalSSNode()))*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTotalSSNode()-$_smarty_tpl->tpl_vars['sts']->value->getAliveSSNode();?>
个", indexLabel: "离线节点 <?php echo number_format((1-($_smarty_tpl->tpl_vars['sts']->value->getAliveSSNode()/$_smarty_tpl->tpl_vars['sts']->value->getTotalSSNode()))*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTotalSSNode()-$_smarty_tpl->tpl_vars['sts']->value->getAliveSSNode();?>
个"
															},
															{
																y: <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getAliveSSNode()/$_smarty_tpl->tpl_vars['sts']->value->getTotalSSNode()))*100;?>
, legendText:"在线节点 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getAliveSSNode()/$_smarty_tpl->tpl_vars['sts']->value->getTotalSSNode()))*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getAliveSSNode();?>
个", indexLabel: "在线节点 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getAliveSSNode()/$_smarty_tpl->tpl_vars['sts']->value->getTotalSSNode()))*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['sts']->value->getAliveSSNode();?>
个"
															}
														<?php }?>
													]
												}
												]
											});

											chart.render();
										<?php echo '</script'; ?>
>
										
									</div>
									
								</div>
							</div>
							
							
							<div class="card">
								<div class="card-main">
									<div class="card-inner margin-bottom-no">
									
										<div id="traffic_chart" style="height: 300px; width: 100%;"></div>
										
										<?php echo '<script'; ?>
 src="//cdn.staticfile.org/canvasjs/1.7.0/canvasjs.js"><?php echo '</script'; ?>
>
										<?php echo '<script'; ?>
 type="text/javascript">
											var chart = new CanvasJS.Chart("traffic_chart",
											{
												title:{
													text: "流量使用情况(总分配流量 <?php echo $_smarty_tpl->tpl_vars['sts']->value->getTotalTraffic();?>
)",
													fontFamily: "Impact",
													fontWeight: "normal"
												},

												legend:{
													verticalAlign: "bottom",
													horizontalAlign: "center"
												},
												data: [
												{
													//startAngle: 45,
													indexLabelFontSize: 20,
													indexLabelFontFamily: "Garamond",
													indexLabelFontColor: "darkgrey",
													indexLabelLineColor: "darkgrey",
													indexLabelPlacement: "outside",
													type: "doughnut",
													showInLegend: true,
													dataPoints: [
														<?php if ($_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic() != 0) {?>
															{
																y: <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getRawUnusedTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100;?>
, legendText:"未使用的流量 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getRawUnusedTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100,2);?>
% <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getUnusedTrafficUsage()));?>
", indexLabel: "未使用的流量 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getRawUnusedTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100,2);?>
% <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getUnusedTrafficUsage()));?>
"
															},
															{
																y: <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getRawLastTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100;?>
, legendText:"已使用的流量 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getRawLastTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100,2);?>
% <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getLastTrafficUsage()));?>
", indexLabel: "已使用的流量 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getRawLastTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100,2);?>
% <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getLastTrafficUsage()));?>
"
															},
															{
																y: <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getRawTodayTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100;?>
, legendText:"今日使用的流量 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getRawTodayTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100,2);?>
% <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getTodayTrafficUsage()));?>
", indexLabel: "今日使用的流量 <?php echo number_format((($_smarty_tpl->tpl_vars['sts']->value->getRawTodayTrafficUsage()/$_smarty_tpl->tpl_vars['sts']->value->getRawTotalTraffic()))*100,2);?>
% <?php echo (($_smarty_tpl->tpl_vars['sts']->value->getTodayTrafficUsage()));?>
"
															}
														<?php }?>
													]
												}
												]
											});

											chart.render();
										<?php echo '</script'; ?>
>
										
									</div>
									
								</div>
							</div>
						
						
						</div>
						
					</div>
				</div>
			</section>
		</div>
	</main>














<?php $_smarty_tpl->_subTemplateRender('file:admin/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
