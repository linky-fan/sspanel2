<?php
/* Smarty version 3.1.31, created on 2017-08-07 21:10:34
  from "D:\MAMP\htdocs\easyfq\resources\views\material\auth\register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_598866ca3e0446_72167936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5229250fc92d187bee7e702fd5fb566834ea36a7' => 
    array (
      0 => 'D:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\auth\\register.tpl',
      1 => 1502111429,
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
function content_598866ca3e0446_72167936 (Smarty_Internal_Template $_smarty_tpl) {
?>


<?php $_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
						<div class="card">
							<div class="card-main">
								
									
										
									
								
								<div class="card-inner">
									<p class="text-center">
										<span class="avatar avatar-inline avatar-lg">
											<img alt="Login" src="/theme/material/images/users/avatar-001.jpg">
										</span>
									</p>
									
										<div class="form-group form-group-label">
											<div class="row">
												<div class="col-md-10 col-md-push-1">
													<label class="floating-label" for="name">昵称</label>
													<input class="form-control" id="name" type="text">
												</div>
											</div>
										</div>
										
										<div class="form-group form-group-label">
											<div class="row">
												<div class="col-md-10 col-md-push-1">
													<label class="floating-label" for="email">邮箱</label>
													<input class="form-control" id="email" type="text">
												</div>
											</div>
										</div>
										
										<?php if ($_smarty_tpl->tpl_vars['enable_email_verify']->value == 'true') {?>
										<div class="form-group form-group-label">
											<div class="row">
												<div class="col-md-10 col-md-push-1">
													<label class="floating-label" for="email_code">邮箱验证码</label>
													<input class="form-control" id="email_code" type="text">
													<button id="email_verify" class="btn btn-block btn-brand-accent waves-attach waves-light">获取验证码</button>
												</div>
											</div>
										</div>
										<?php }?>
										
										<div class="form-group form-group-label">
											<div class="row">
												<div class="col-md-10 col-md-push-1">
													<label class="floating-label" for="passwd">密码</label>
													<input class="form-control" id="passwd" type="password">
												</div>
											</div>
										</div>
										
										<div class="form-group form-group-label">
											<div class="row">
												<div class="col-md-10 col-md-push-1">
													<label class="floating-label" for="repasswd">重复密码</label>
													<input class="form-control" id="repasswd" type="password">
												</div>
											</div>
										</div>
										
										
										
											
												
													
													
														
														
														
														
														
													
												
											
										
										
										
										
											
												
													
													
												
											
										
										
										
										
										<?php if ($_smarty_tpl->tpl_vars['enable_invite_code']->value == 'true') {?>
											<div class="form-group form-group-label">
												<div class="row">
													<div class="col-md-10 col-md-push-1">
														<label class="floating-label" for="code">邀请码</label>
														<input class="form-control" id="code" type="text" value="<?php echo $_smarty_tpl->tpl_vars['code']->value;?>
">
													</div>
												</div>
											</div>
										<?php }?>
										
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
													<button id="reg" type="submit" class="btn btn-block btn-brand waves-attach waves-light">注册</button>
												</div>
											</div>
										</div>
										
										<div class="form-group">
											<div class="row">
												<div class="col-md-10 col-md-push-1">
													<p>注册即代表同意<a href="/tos">服务条款</a>，以及保证所录入信息的真实性，如有不实信息会导致账号被删除。</p>
												</div>
											</div>
										</div>
									
								</div>
							</div>
						</div>
						<div class="clearfix">
							<p class="margin-no-top pull-left"><a class="btn btn-flat btn-brand waves-attach" href="/auth/login">已经注册？请登录</a></p>
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
        function register(){
			
//			document.getElementById("tos").disabled = true;
			
            $.ajax({
                type:"POST",
                url:"/auth/register",
                dataType:"json",
                data:{
                    email: $("#email").val(),
                    name: $("#name").val(),
                    passwd: $("#passwd").val(),
                    repasswd: $("#repasswd").val(),
					wechat: $("#wechat").val(),
					imtype: $("#imtype").val()<?php if ($_smarty_tpl->tpl_vars['enable_invite_code']->value == 'true') {?>,
					code: $("#code").val()<?php }
if ($_smarty_tpl->tpl_vars['enable_email_verify']->value == 'true') {?>,
					emailcode: $("#email_code").val()<?php }
if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>,
					geetest_challenge: validate.geetest_challenge,
                    geetest_validate: validate.geetest_validate,
                    geetest_seccode: validate.geetest_seccode
					<?php }?>
                },
                success:function(data){
                    if(data.ret == 1){
                        $("#result").modal();
                        $("#msg").html(data.msg);
                        window.setTimeout("location.href='/auth/login'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                    }else{
                        $("#result").modal();
                        $("#msg").html(data.msg);
			document.getElementById("tos").disabled = false; 

			<?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
			captcha.refresh();
			<?php }?>
                    }
                },
                error:function(jqXHR){
			$("#msg-error").hide(10);
			$("#msg-error").show(100);
			$("#msg-error-p").html("发生错误："+jqXHR.status);
			document.getElementById("tos").disabled = false; 
			<?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
			captcha.refresh();
			<?php }?>
                }
            });
        }
        $("html").keydown(function(event){
            if(event.keyCode==13){
                $("#tos_modal").modal();
            }
        });
		
		<?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
		$('div.modal').on('shown.bs.modal', function() {
			$("div.gt_slider_knob").hide();
		});
		
		
		$('div.modal').on('hidden.bs.modal', function() {
			$("div.gt_slider_knob").show();
		});
		
        
		<?php }?>
		
		$("#reg").click(function(){
			console.log('dd');
            register();
        });
		
		$("#tos").click(function(){
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
            $("#tos_modal").modal();
        });
    })
<?php echo '</script'; ?>
>


<?php if ($_smarty_tpl->tpl_vars['enable_email_verify']->value == 'true') {
echo '<script'; ?>
>
var wait=60;
function time(o) {
		if (wait == 0) {
			o.removeAttr("disabled");			
			o.text("获取验证码");
			wait = 60;
		} else {
			o.attr("disabled","disabled");
			o.text("重新发送(" + wait + ")");
			wait--;
			setTimeout(function() {
				time(o)
			},
			1000)
		}
	}



    $(document).ready(function () {
        $("#email_verify").click(function () {
			time($("#email_verify"));
			
            $.ajax({
                type: "POST",
                url: "send",
                dataType: "json",
                data: {
                    email: $("#email").val()
                },
                success: function (data) {
                    if (data.ret) {
                        $("#result").modal();
			$("#msg").html(data.msg);
						
                    } else {
                        $("#result").modal();
			$("#msg").html(data.msg);
                    }
                },
                error: function (jqXHR) {
                    $("#result").modal();
			$("#msg").html(data.msg+"     出现了一些错误。");
                }
            })
        })
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

<?php }?>





	
<?php }
}
