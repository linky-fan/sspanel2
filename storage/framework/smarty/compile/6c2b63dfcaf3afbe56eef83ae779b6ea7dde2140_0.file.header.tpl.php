<?php
/* Smarty version 3.1.31, created on 2017-08-07 10:12:06
  from "C:\MAMP\htdocs\easyfq\resources\views\material\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5987cc766bc568_01659339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2b63dfcaf3afbe56eef83ae779b6ea7dde2140' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\header.tpl',
      1 => 1502071911,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5987cc766bc568_01659339 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" name="viewport">
    <meta name="theme-color" content="#3f51b5">
    <title><?php echo $_smarty_tpl->tpl_vars['config']->value["appName"];?>
</title>

    <!-- css -->
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="/theme/material/css/base.min.css" rel="stylesheet">
    <link href="/theme/material/css/project.min.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="/theme/material/css/new.css" rel="stylesheet">

    <!-- favicon -->
    <!-- ... -->
</head>
<body class="page-brand">


<header class="header header-transparent header-waterfall ui-header">
    <?php if ($_smarty_tpl->tpl_vars['ann']->value != null) {?>
        <div class="text-center ann"><?php echo $_smarty_tpl->tpl_vars['ann']->value->markdown;?>
</div>
    <?php }?>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="logo" href="#">易连加速器</span>
                </div>
                <div id="navbar" class="navbar-collapse collapse pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="/">&nbsp;首页</a></li>
                        <li><a href="/package">&nbsp;套餐服务</a></li>
                        <li><a href="/question">&nbsp;常见问题</a></li>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->isLogin) {?>
                            <li>
                                <a href="/user">&nbsp;<?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
</a>
                            </li>
                            <li>
                                <a href="/user/logout">&nbsp;退出</a>
                            </li>
                        <?php } else { ?>
                            <li>
                                <a class="login" href="/auth/login">&nbsp;登录</a>
                            </li>
                            <li>
                                <a class="register" href="/auth/register">&nbsp;免费注册</a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>



<?php }
}
