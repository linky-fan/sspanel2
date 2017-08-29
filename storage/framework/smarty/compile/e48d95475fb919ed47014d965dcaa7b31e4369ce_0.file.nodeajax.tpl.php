<?php
/* Smarty version 3.1.31, created on 2017-07-29 11:55:10
  from "D:\MAMP\htdocs\easyfq\resources\views\material\user\nodeajax.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597c071e88e6c7_85357946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e48d95475fb919ed47014d965dcaa7b31e4369ce' => 
    array (
      0 => 'D:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\user\\nodeajax.tpl',
      1 => 1490688162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_597c071e88e6c7_85357946 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('load', $_smarty_tpl->tpl_vars['point_node']->value->getNodeLoad());
?>

<div id="load<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_chart" style="height: 300px; width: 100%;"></div>
	<div id="up<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_chart" style="height: 300px; width: 100%;"></div>
	<div id="alive<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_chart" style="height: 300px; width: 100%;"></div>
	<div id="speedtest<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_chart" style="height: 300px; width: 100%;"></div>
	<div id="speedtest<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_ping_chart" style="height: 300px; width: 100%;"></div>

				
	<?php echo '<script'; ?>
 type="text/javascript">
		$().ready(function(){
			chart<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 = new CanvasJS.Chart("load<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_chart",
			{
				title:{
					text: "节点负载情况 <?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
"
				},
				data: [
				{
					type: "line", 
					dataPoints: [
						<?php $_smarty_tpl->_assignInScope('i', 0);
?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['load']->value, 'single_load');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['single_load']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
								
								{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_load']->value->log_time*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_load']->value->getNodeLoad();?>

								
								}
								
								<?php $_smarty_tpl->_assignInScope('i', 1);
?>
							<?php } else { ?>
								
								,{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_load']->value->log_time*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_load']->value->getNodeLoad();?>

								
								}
								
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

						
					]
				}
				]
			});
			
			
			
			up_chart<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 = new CanvasJS.Chart("up<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_chart",
			{
				title:{
					text: "最近一天节点在线情况 <?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
 - 在线 <?php echo $_smarty_tpl->tpl_vars['point_node']->value->getNodeUptime();?>
"
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
								y: <?php echo $_smarty_tpl->tpl_vars['point_node']->value->getNodeUpRate()*100;?>
, legendText:"在线率 <?php echo number_format($_smarty_tpl->tpl_vars['point_node']->value->getNodeUpRate()*100,2);?>
%", indexLabel: "在线率 <?php echo number_format($_smarty_tpl->tpl_vars['point_node']->value->getNodeUpRate()*100,2);?>
%"
							},
							{
								y: <?php echo (1-$_smarty_tpl->tpl_vars['point_node']->value->getNodeUpRate())*100;?>
, legendText:"离线率 <?php echo number_format((1-$_smarty_tpl->tpl_vars['point_node']->value->getNodeUpRate())*100,2);?>
%", indexLabel: "离线率 <?php echo number_format((1-$_smarty_tpl->tpl_vars['point_node']->value->getNodeUpRate())*100,2);?>
%"
							}
						]
					}
					]
			});
			
			<?php $_smarty_tpl->_assignInScope('load', $_smarty_tpl->tpl_vars['point_node']->value->getNodeAlive());
?>
			alive_chart<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 = new CanvasJS.Chart("alive<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_chart",
			{
				title:{
					text: "最近一天节点在线人数情况 <?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
"
				},
				data: [
				{
					type: "line", 
					dataPoints: [
						<?php $_smarty_tpl->_assignInScope('i', 0);
?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['load']->value, 'single_load');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['single_load']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
								
								{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_load']->value->log_time*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_load']->value->online_user;?>

								
								}
								
								<?php $_smarty_tpl->_assignInScope('i', 1);
?>
							<?php } else { ?>
								
								,{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_load']->value->log_time*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_load']->value->online_user;?>

								
								}
								
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

						
					]
				}
				]
			});
			
			
			
			<?php $_smarty_tpl->_assignInScope('speedtests', $_smarty_tpl->tpl_vars['point_node']->value->getSpeedtestResult());
?>
			speedtest_chart<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 = new CanvasJS.Chart("speedtest<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_chart",
			{
				title:{
					text: "最近节点测速延时情况报告 <?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
"
				},
				axisY: {				
					suffix: " ms"
				},
				data: [
				{
					type: "line", 
					showInLegend: true,
					legendText: "电信延时",
					dataPoints: [
						<?php $_smarty_tpl->_assignInScope('i', 0);
?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['speedtests']->value, 'single_speedtest');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['single_speedtest']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
								
								{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getTelecomPing();?>

								
								}
								
								<?php $_smarty_tpl->_assignInScope('i', 1);
?>
							<?php } else { ?>
								
								,{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getTelecomPing();?>

								
								}
								
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

						
					]
				},
				{
					type: "line", 
					showInLegend: true,
					legendText: "联通延时",
					dataPoints: [
						<?php $_smarty_tpl->_assignInScope('i', 0);
?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['speedtests']->value, 'single_speedtest');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['single_speedtest']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
								
								{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getUnicomPing();?>

								
								}
								
								<?php $_smarty_tpl->_assignInScope('i', 1);
?>
							<?php } else { ?>
								
								,{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getUnicomPing();?>

								
								}
								
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

						
					]
				},
				{
					type: "line", 
					showInLegend: true,
					legendText:"移动延时",
					dataPoints: [
						<?php $_smarty_tpl->_assignInScope('i', 0);
?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['speedtests']->value, 'single_speedtest');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['single_speedtest']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
								
								{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getCmccPing();?>

								
								}
								
								<?php $_smarty_tpl->_assignInScope('i', 1);
?>
							<?php } else { ?>
								
								,{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getCmccPing();?>

								
								}
								
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

						
					]
				}
				]
			});
			
			speedtest_ping_chart<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 = new CanvasJS.Chart("speedtest<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
_ping_chart",
			{
				title:{
					text: "最近节点测速速度情况报告 <?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
"
				},
				axisY: {				
					suffix: " Mbps"
				},
				data: [
				{
					type: "line", 
					showInLegend: true,
					legendText: "电信下载速度",
					dataPoints: [
						<?php $_smarty_tpl->_assignInScope('i', 0);
?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['speedtests']->value, 'single_speedtest');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['single_speedtest']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
								
								{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getTelecomUpload();?>

								
								}
								
								<?php $_smarty_tpl->_assignInScope('i', 1);
?>
							<?php } else { ?>
								
								,{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getTelecomUpload();?>

								
								}
								
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

						
					]
				},
				{
					type: "line", 
					showInLegend: true,
					legendText: "电信上传速度",
					dataPoints: [
						<?php $_smarty_tpl->_assignInScope('i', 0);
?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['speedtests']->value, 'single_speedtest');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['single_speedtest']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
								
								{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getTelecomDownload();?>

								
								}
								
								<?php $_smarty_tpl->_assignInScope('i', 1);
?>
							<?php } else { ?>
								
								,{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getTelecomDownload();?>

								
								}
								
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

						
					]
				},
				{
					type: "line", 
					showInLegend: true,
					legendText: "联通下载速度",
					dataPoints: [
						<?php $_smarty_tpl->_assignInScope('i', 0);
?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['speedtests']->value, 'single_speedtest');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['single_speedtest']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
								
								{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getUnicomUpload();?>

								
								}
								
								<?php $_smarty_tpl->_assignInScope('i', 1);
?>
							<?php } else { ?>
								
								,{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getUnicomUpload();?>

								
								}
								
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

						
					]
				},
				{
					type: "line", 
					showInLegend: true,
					legendText: "联通上传速度",
					dataPoints: [
						<?php $_smarty_tpl->_assignInScope('i', 0);
?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['speedtests']->value, 'single_speedtest');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['single_speedtest']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
								
								{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getUnicomDownload();?>

								
								}
								
								<?php $_smarty_tpl->_assignInScope('i', 1);
?>
							<?php } else { ?>
								
								,{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getUnicomDownload();?>

								
								}
								
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

						
					]
				},
				{
					type: "line", 
					showInLegend: true,
					legendText:"移动上传速度",
					dataPoints: [
						<?php $_smarty_tpl->_assignInScope('i', 0);
?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['speedtests']->value, 'single_speedtest');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['single_speedtest']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
								
								{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getCmccDownload();?>

								
								}
								
								<?php $_smarty_tpl->_assignInScope('i', 1);
?>
							<?php } else { ?>
								
								,{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getCmccDownload();?>

								
								}
								
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

						
					]
				},
				{
					type: "line", 
					showInLegend: true,
					legendText:"移动下载速度",
					dataPoints: [
						<?php $_smarty_tpl->_assignInScope('i', 0);
?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['speedtests']->value, 'single_speedtest');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['single_speedtest']->value) {
?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value == 0) {?>
								
								{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getCmccUpload();?>

								
								}
								
								<?php $_smarty_tpl->_assignInScope('i', 1);
?>
							<?php } else { ?>
								
								,{
								
									x: new Date(<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->datetime*1000;?>
), y:<?php echo $_smarty_tpl->tpl_vars['single_speedtest']->value->getCmccUpload();?>

								
								}
								
							<?php }?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

						
					]
				}
				]
			});
			
			
			
			
			
			
			
				
			chart<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
.render();
			up_chart<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
.render();
			alive_chart<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
.render();
			speedtest_chart<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
.render();
			speedtest_ping_chart<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
.render();
			
			
		});
		
		
		
		
			
	<?php echo '</script'; ?>
><?php }
}
