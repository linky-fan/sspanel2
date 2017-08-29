<?php
/* Smarty version 3.1.31, created on 2017-08-06 20:26:55
  from "D:\MAMP\htdocs\easyfq\resources\views\material\user\nodeinfo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59870b0f0e4955_79494935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bb6a2903e90f6b37917d6afc27691889780f720' => 
    array (
      0 => 'D:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\user\\nodeinfo.tpl',
      1 => 1500660933,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/header_info.tpl' => 1,
    'file:user/footer.tpl' => 1,
  ),
),false)) {
function content_59870b0f0e4955_79494935 (Smarty_Internal_Template $_smarty_tpl) {
?>



<?php $_smarty_tpl->_subTemplateRender('file:user/header_info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>








	<main class="content">
		<div class="content-header ui-content-header">
			<div class="container">
				<h1 class="content-heading">节点信息</h1>
			</div>
		</div>
		<div class="container">
			<section class="content-inner margin-top-no">
				<div class="ui-card-wrap">
					<div class="row">
						<div class="col-lg-12 col-sm-12">
							<div class="card">
								<div class="card-main">
									<div class="card-inner margin-bottom-no">
										<p class="card-heading">注意！</p>
										<p>配置文件以及二维码请勿泄露！</p>
									</div>
									
								</div>
							</div>
						</div>
						<div class="col-lg-12 col-sm-12">
							<div class="card">
								<div class="card-main">
									<div class="card-inner margin-bottom-no">
										<p class="card-heading">配置信息</p>
										<p>服务器地址：<?php echo $_smarty_tpl->tpl_vars['ary']->value['server'];?>
<br>
										服务器端口：<?php echo $_smarty_tpl->tpl_vars['ary']->value['server_port'];?>
<br>
										加密方式：<?php echo $_smarty_tpl->tpl_vars['ary']->value['method'];?>
<br>
										密码：<?php echo $_smarty_tpl->tpl_vars['ary']->value['password'];?>
<br>
										协议：<?php echo $_smarty_tpl->tpl_vars['user']->value->protocol;?>
<br>
										协议参数：<?php echo $_smarty_tpl->tpl_vars['user']->value->protocol_param;?>
<br>
										混淆：<?php echo $_smarty_tpl->tpl_vars['user']->value->obfs;?>
<br>
										混淆参数：<?php echo $_smarty_tpl->tpl_vars['user']->value->obfs_param;?>
<br>
										
										</p>
									</div>
									
								</div>
							</div>
						</div>					
						<div class="col-lg-12 col-sm-12">
							<div class="card">
								<div class="card-main">
									<div class="card-inner margin-bottom-no">
										<p class="card-heading">客户端下载</p>
										<p><i class="icon icon-lg">desktop_windows</i>&nbsp;<a href="/ssr-download/ssr-win.7z">Windows</a></p>
										<p><i class="icon icon-lg">laptop_mac</i>&nbsp;<a  href="/ssr-download/ssr-mac.dmg">Mac OS X</a></p>
										<p><i class="icon icon-lg">laptop_windows</i>&nbsp;<a target="_blank" href="https://github.com/breakwa11/shadowsocks-rss/wiki/Python-client">Linux</a></p>
										<p><i class="icon icon-lg">android</i>&nbsp;<a href="/ssr-download/ssr-android.apk">Android</a></p>
										<p><i class="icon icon-lg">phone_iphone</i>&nbsp;<a href="https://itunes.apple.com/us/app/shadowrocket/id932747118">iOS</a></p>
									</div>
									
								</div>
							</div>
						</div>
						
						<div class="col-lg-12 col-sm-12">
							<div class="card">
								<div class="card-main">
									<div class="card-inner margin-bottom-no">
										<p class="card-heading">SSR-Python 配置Json</p>
										<textarea class="form-control" rows="6"><?php echo $_smarty_tpl->tpl_vars['json_show']->value;?>
</textarea>
									</div>
									
								</div>
							</div>
						</div>
						
						<div class="col-lg-12 col-sm-12">
							<div class="card">
								<div class="card-main">
									<div class="card-inner margin-bottom-no">
										<p class="card-heading">配置链接</p>
										<?php if ($_smarty_tpl->tpl_vars['mu']->value == 0) {?>
										<p><a href="<?php echo $_smarty_tpl->tpl_vars['ssqr']->value;?>
"/>Android 手机上用默认浏览器打开点我就可以直接添加了(给 原版/SSR APP)</a></p>
										<?php }?>
										<p><a href="<?php echo $_smarty_tpl->tpl_vars['ssqr_s_new']->value;?>
"/>Android 手机上用默认浏览器打开点我就可以直接添加了(给 SSR)</a></p>
										<p><a href="<?php echo $_smarty_tpl->tpl_vars['ssqr_s_new']->value;?>
"/>iOS 上用 Safari 打开点我就可以直接添加了(给 Shadowrocket)</a></p>
									</div>
									
								</div>
							</div>
						</div>
							
							<?php if ($_smarty_tpl->tpl_vars['mu']->value == 0) {?>
							<div class="col-lg-12 col-sm-12">
								<div class="card">
									<div class="card-main">
										<div class="card-inner margin-bottom-no">
											<p class="card-heading">原版配置二维码</p>
											<div class="text-center">
												<div id="ss-qr"></div>
											</div>
										</div>
										
									</div>
								</div>
							</div>
							<?php }?>
						
						<div class="col-lg-12 col-sm-12">
							<div class="card">
								<div class="card-main">
									<div class="card-inner margin-bottom-no">
										<p class="card-heading">SSR 旧版(3.8.3之前)配置二维码</p>
										<div class="text-center">
											<div id="ss-qr-y"></div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						
						<div class="col-lg-12 col-sm-12">
							<div class="card">
								<div class="card-main">
									<div class="card-inner margin-bottom-no">
										<p class="card-heading">SSR 新版(3.8.3之后)配置二维码</p>
										<div class="text-center">
											<div id="ss-qr-n"></div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
						
						
						<?php if ($_smarty_tpl->tpl_vars['mu']->value == 0) {?>
								<div class="col-lg-12 col-sm-12">
									<div class="card">
										<div class="card-main">
											<div class="card-inner margin-bottom-no">
												<STRIKE>
													<p class="card-heading">iOS9 上 Surge 配置</p>
													<div class="row">
											
														<div class="col-md-12">
															<p>您要先安装 surge 。</p>
															<p>配置的话，直接下载生成好的配置文件，然后在 APP 里添加设置时选择 Download configuration from URL ，把地址粘贴进去添加。</p>
															<p>第一种分流方式，按照域名的文件下载地址，点击直接下载：<a href="<?php echo $_smarty_tpl->tpl_vars['link1']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['link1']->value;?>
</a></p>

															<p>第二种分流方式，按照地区的文件下载地址，感谢 @Tony 提供，点击直接下载：<a href="<?php echo $_smarty_tpl->tpl_vars['link2']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['link2']->value;?>
</a></p>
															<br>
														<div class="col-md-12">
													</div>
												</STRIKE>
											</div>
										
										</div>
									</div>
								</div>
						<?php }?>
						
					</div>
				</div>
			</section>
		</div>
	</main>







<?php $_smarty_tpl->_subTemplateRender('file:user/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php echo '<script'; ?>
 src="/assets/public/js/jquery.qrcode.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	var text_qrcode = '<?php echo $_smarty_tpl->tpl_vars['ssqr']->value;?>
';
	jQuery('#ss-qr').qrcode({
		"text": text_qrcode
	});
	
	var text_qrcode1 = '<?php echo $_smarty_tpl->tpl_vars['ssqr_s']->value;?>
';
	jQuery('#ss-qr-y').qrcode({
		"text": text_qrcode1
	});
	
	var text_qrcode2 = '<?php echo $_smarty_tpl->tpl_vars['ssqr_s_new']->value;?>
';
	jQuery('#ss-qr-n').qrcode({
		"text": text_qrcode2
	});
	

<?php echo '</script'; ?>
>
<?php }
}
