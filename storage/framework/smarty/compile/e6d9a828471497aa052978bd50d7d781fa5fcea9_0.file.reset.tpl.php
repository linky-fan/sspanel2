<?php
/* Smarty version 3.1.31, created on 2017-07-30 16:45:30
  from "D:\MAMP\htdocs\easyfq\resources\views\material\password\reset.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597d9caa819b33_86947639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6d9a828471497aa052978bd50d7d781fa5fcea9' => 
    array (
      0 => 'D:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\password\\reset.tpl',
      1 => 1501404327,
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
function content_597d9caa819b33_86947639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<br>
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
								<div class="card-header">
									<div class="card-inner">
										<h1 class="card-heading">重置密码</h1>
									</div>
								</div>
								<div class="card-inner">
									<p class="text-center">
										<span class="avatar avatar-inline avatar-lg">
											<img alt="Login" src="/theme/material/images/users/avatar-001.jpg">
										</span>
									</p>
									
										
										
										<div class="form-group form-group-label">
											<div class="row">
												<div class="col-md-10 col-md-push-1">
													<label class="floating-label" for="email">邮箱</label>
													<input class="form-control" id="email" type="text">
												</div>
											</div>
										</div>
										
										<div class="form-group">
											<div class="row">
												<div class="col-md-10 col-md-push-1">
													<button id="reset" type="submit" class="btn btn-block btn-brand waves-attach waves-light">重置密码</button>
												</div>
											</div>
										</div>
										
										
									
								</div>
							</div>
						</div>
						<div class="clearfix">
							<p class="margin-no-top pull-left"><a class="btn btn-flat btn-brand waves-attach" href="/auth/login">登录</a></p>
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
        function reset(){
			$("#result").modal();
            $("#msg").html("正在发送，请稍候。。。");
            $.ajax({
                type:"POST",
                url:"/password/reset",
                dataType:"json",
                data:{
                    email: $("#email").val(),
                },
                success:function(data){
                    if(data.ret == 1){
                        $("#result").modal();
                        $("#msg").html(data.msg);
                       // window.setTimeout("location.href='/auth/login'", 2000);
                    }else{
                        $("#result").modal();
                        $("#msg").html(data.msg);
                    }
                },
                error:function(jqXHR){
                    $("#result").modal();
                    $("#msg").html(data.msg);
                }
            });
        }
        $("html").keydown(function(event){
            if(event.keyCode==13){
                login();
            }
        });
        $("#reset").click(function(){
            reset();
        });
    })
<?php echo '</script'; ?>
><?php }
}
