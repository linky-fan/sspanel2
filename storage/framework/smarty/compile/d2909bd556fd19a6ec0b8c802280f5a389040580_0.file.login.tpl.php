<?php
/* Smarty version 3.1.31, created on 2017-08-07 10:05:17
  from "C:\MAMP\htdocs\easyfq\resources\views\material\auth\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5987cadddb40f2_44889398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2909bd556fd19a6ec0b8c802280f5a389040580' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\auth\\login.tpl',
      1 => 1501404341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5987cadddb40f2_44889398 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<br>
<br>
<br>
<br>
<main class="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-lg-push-4 col-sm-6 col-sm-push-3">
					<section class="content-inner">

						
							
								
									
								
								
								
									
								

								
									
								
								
							
						
						<div class="card-inner">
							<div class="tab-content">
								<div class="tab-pane fade active in" id="passwd_login">
									<div class="card">
										<div class="card-main">
											<div class="card-header">
												<div class="card-inner">
													<h1 class="card-heading">登录到用户中心</h1>
												</div>
											</div>
											<div class="card-inner">
												<form action="javascript:void(0);"  method="POST">
													<p class="text-center">
														<span class="avatar avatar-inline avatar-lg">
															<img alt="Login" src="/theme/material/images/users/avatar-001.jpg">
														</span>
													</p>

													<div class="form-group form-group-label">
														<div class="row">
															<div class="col-md-10 col-md-push-1">
																<label class="floating-label" for="email">邮箱</label>
																<input class="form-control" id="email" type="text" name="Email">
															</div>
														</div>
													</div>
													<div class="form-group form-group-label">
														<div class="row">
															<div class="col-md-10 col-md-push-1">
																<label class="floating-label" for="passwd">密码</label>
																<input class="form-control" id="passwd" type="password" name="Password">
															</div>
														</div>
													</div>

													<div class="form-group form-group-label">
														<div class="row">
															<div class="col-md-10 col-md-push-1">
																<label class="floating-label" for="code">两步验证码(没有就别填)</label>
																<input class="form-control" id="code" type="text" placeholder="没有就别填">
															</div>
														</div>
													</div>

													<?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
														<div class="form-group form-group-label">
															<div class="row">
																<div class="col-md-10 col-md-push-1">
																	<div id="embed-captcha"></div>
																</div>
															</div>
														</div>
													<?php }?>

													<div class="form-group">
														<div class="row">
															<div class="col-md-10 col-md-push-1">
																<button id="login" type="submit" class="btn btn-block btn-brand waves-attach waves-light">登录</button>
															</div>
														</div>
													</div>

													<div class="form-group">
														<div class="row">
															<div class="col-md-10 col-md-push-1">
																<div class="checkbox checkbox-adv">
																	<label for="remember_me">
																		<input class="access-hide" value="week" id="remember_me" name="remember_me" type="checkbox">记住我
																		<span class="checkbox-circle"></span><span class="checkbox-circle-check"></span><span class="checkbox-circle-icon icon">done</span>
																	</label>
																</div>
															</div>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_telegram'] == 'true') {?>
								<div class="tab-pane fade" id="qrcode_login">
									<div class="card">
										<div class="card-main">
											<div class="card-header">
												<div class="card-inner">
													<h1 class="card-heading">扫码登录</h1>
												</div>
											</div>
											<div class="card-inner">
												<p>添加机器人账号 <a href="https://t.me/<?php echo $_smarty_tpl->tpl_vars['telegram_bot']->value;?>
">@<?php echo $_smarty_tpl->tpl_vars['telegram_bot']->value;?>
</a>，拍下下面这张二维码发给它。</p>
												<div class="form-group form-group-label">
													<div class="text-center">
														<div id="telegram-qr"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="tab-pane fade" id="number_login">
									<div class="card">
										<div class="card-main">
											<div class="card-header">
												<div class="card-inner">
													<h1 class="card-heading">数字登录</h1>
												</div>
											</div>
											<div class="card-inner">
												<p>添加机器人账号 <a href="https://t.me/<?php echo $_smarty_tpl->tpl_vars['telegram_bot']->value;?>
">@<?php echo $_smarty_tpl->tpl_vars['telegram_bot']->value;?>
</a>，发送下面的数字给它。</p>
												<div class="form-group form-group-label">
													<div class="text-center">
														<h1><code id="code_number"><?php echo $_smarty_tpl->tpl_vars['login_number']->value;?>
</code></h1>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php }?>
							</div>
						</div>


						<div class="clearfix">
							<p class="margin-no-top pull-left"><a class="btn btn-flat btn-brand waves-attach" href="/password/reset">忘记密码</a></p>
							<p class="margin-no-top pull-right"><a class="btn btn-flat btn-brand waves-attach" href="/auth/register">注册个帐号</a></p>
						</div>


						<?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>






					</section>
				</div>
			</div>
		</div>
	</main>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
>
    $(document).ready(function(){
        function login(){
			<?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
			if(typeof validate == 'undefined')
			{
				$("#result").modal();
                $("#msg").html("请滑动验证码来完成验证。");
				return;
			}

			if (!validate) {
				$("#result").modal();
                $("#msg").html("请滑动验证码来完成验证。");
				return;
			}

			<?php }?>

			document.getElementById("login").disabled = true;

            $.ajax({
                type:"POST",
                url:"/auth/login",
                dataType:"json",
                data:{
                    email: $("#email").val(),
                    passwd: $("#passwd").val(),
					code: $("#code").val(),
                    remember_me: $("#remember_me:checked").val()<?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>,
					geetest_challenge: validate.geetest_challenge,
                    geetest_validate: validate.geetest_validate,
                    geetest_seccode: validate.geetest_seccode<?php }?>
                },
                success:function(data){
                    if(data.ret == 1){
						$("#result").modal();
                        $("#msg").html(data.msg);
                        window.setTimeout("location.href='/user'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                    }else{
			$("#result").modal();
                        $("#msg").html(data.msg);
			document.getElementById("login").disabled = false;
			<?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
			captcha.refresh();
			<?php }?>
                    }
                },
                error:function(jqXHR){
			$("#msg-error").hide(10);
			$("#msg-error").show(100);
			$("#msg-error-p").html("发生错误："+jqXHR.status);
					document.getElementById("login").disabled = false;
			<?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
			captcha.refresh();
			<?php }?>
                }
            });
        }
        $("html").keydown(function(event){
            if(event.keyCode==13){
                login();
            }
        });
        $("#login").click(function(){
            login();
        });

		$('div.modal').on('shown.bs.modal', function() {
			$("div.gt_slider_knob").hide();
		});

		$('div.modal').on('hidden.bs.modal', function() {
			$("div.gt_slider_knob").show();
		});
    })
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['config']->value['enable_telegram'] == 'true') {
echo '<script'; ?>
 src=" /assets/public/js/jquery.qrcode.min.js "><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	var telegram_qrcode = 'mod://login/<?php echo $_smarty_tpl->tpl_vars['login_token']->value;?>
';
	jQuery('#telegram-qr').qrcode({
		"text": telegram_qrcode
	});
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
$(document).ready(function () {
	function f(){
		$.ajax({
			type: "GET",
			url: "qrcode_check",
			dataType: "json",
			data: {
				token:"<?php echo $_smarty_tpl->tpl_vars['login_token']->value;?>
",
				number:"<?php echo $_smarty_tpl->tpl_vars['login_number']->value;?>
"
			},
			success: function (data) {
				if (data.ret > 0) {
					clearTimeout(tid);

					$.ajax({
						type: "POST",
						url: "/auth/qrcode_login",
						dataType: "json",
						data: {
							token:"<?php echo $_smarty_tpl->tpl_vars['login_token']->value;?>
",
							number:"<?php echo $_smarty_tpl->tpl_vars['login_number']->value;?>
"
						},
						success: function (data) {
							if (data.ret) {
								$("#result").modal();
								$("#msg").html("登录成功！");
								window.setTimeout("location.href=/user/", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
							}
						},
						error: function (jqXHR) {
							$("#result").modal();
							$("#msg").html("发生错误：" + jqXHR.status);
						}
					});

				} else {
					if(data.ret == -1)
					{
						jQuery('#telegram-qr').replaceWith('此二维码已经过期，请刷新页面后重试。');
						jQuery('#code_number').replaceWith('<code id="code_number">此数字已经过期，请刷新页面后重试。</code>');
					}
				}
			},
			error: function (jqXHR) {
				if(jqXHR.status != 200 && jqXHR.status != 0) {
					$("#result").modal();
					$("#msg").html("发生错误：" + jqXHR.status);
				}
			}
		});
		tid = setTimeout(f, 1000); //循环调用触发setTimeout
	}
	setTimeout(f, 1000);
})
<?php echo '</script'; ?>
>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {
echo '<script'; ?>
>
	var handlerEmbed = function (captchaObj) {
        // 将验证码加到id为captcha的元素里

		captchaObj.onSuccess(function () {
            		validate = captchaObj.getValidate();
		});

		captchaObj.appendTo("#embed-captcha");

		captcha = captchaObj;
		// 更多接口参考：http://www.geetest.com/install/sections/idx-client-sdk.html
    };

	initGeetest({
		gt: "<?php echo $_smarty_tpl->tpl_vars['geetest_html']->value->gt;?>
",
		challenge: "<?php echo $_smarty_tpl->tpl_vars['geetest_html']->value->challenge;?>
",
		product: "embed", // 产品形式，包括：float，embed，popup。注意只对PC版验证码有效
		offline: <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value->success) {?>0<?php } else { ?>1<?php }?> // 表示用户后台检测极验服务器是否宕机，与SDK配合，用户一般不需要关注
	}, handlerEmbed);
<?php echo '</script'; ?>
>

<?php }
}
}
