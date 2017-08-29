<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" name="viewport">
    <meta name="theme-color" content="#3f51b5">
    <title>{$config["appName"]}</title>

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
    {if $ann != null}
        <div class="text-center ann">{$ann->markdown}</div>
    {/if}
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
                        {if $user->isLogin}
                            <li>
                                <a href="/user">&nbsp;{$user->user_name}</a>
                            </li>
                            <li>
                                <a href="/user/logout">&nbsp;退出</a>
                            </li>
                        {else}
                            <li>
                                <a class="login" href="/auth/login">&nbsp;登录</a>
                            </li>
                            <li>
                                <a class="register" href="/auth/register">&nbsp;免费注册</a>
                            </li>
                        {/if}
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>



