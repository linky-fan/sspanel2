<?php
/* Smarty version 3.1.31, created on 2017-07-29 17:24:55
  from "D:\MAMP\htdocs\easyfq\resources\views\material\user\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597c5467dcc7a1_38490079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f92169a5a100f09a7b3aa65c5442a18557546e8' => 
    array (
      0 => 'D:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\user\\index.tpl',
      1 => 1490688224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:user/main.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:user/footer.tpl' => 1,
  ),
),false)) {
function content_597c5467dcc7a1_38490079 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:user/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main class="content">
<div class="content-header ui-content-header">
<div class="container">
<h1 class="content-heading">用户中心</h1>
</div>
</div>
<div class="container">
<section class="content-inner margin-top-no">
<div class="ui-card-wrap">

<div class="col-lg-6 col-md-6">

<div class="card">
<div class="card-main">
<div class="card-inner margin-bottom-no">
<p class="card-heading">系统中最新公告</p>
<p>其他公告请到<a href="/user/announcement"/>公告面板</a>查看。</p>
<?php if ($_smarty_tpl->tpl_vars['ann']->value != null) {?>
<p><?php echo $_smarty_tpl->tpl_vars['ann']->value->content;?>
</p>
<?php }?>
</div>

</div>
</div>

<div class="card">
<div class="card-main">
<div class="card-inner margin-bottom-no">
<p class="card-heading">配置导入</p>
<p>这里为您提供了自动化地配置文件生成，包含了所有 Shadowsocks 服务器的信息，方便您在诸多的服务器中快速添加，快速切换。</p>
<p>&nbsp;Windows<a href="https://github.com/shadowsocksr/shadowsocksr-csharp/releases"><i class="icon icon-lg">desktop_windows</i>&nbsp;下载客户端文件&nbsp;</a>，解压，然后<a href="/user/getpcconf">&nbsp;下载配置文件&nbsp;</a>，放到程序目录下，运行程序，选择一个合适的服务器，然后开启系统代理即可上网。</p>
<!--<p>&nbsp;Mac OS X<a href="https://github.com/shadowsocksr/ShadowsocksX-NG/releases"><i class="icon icon-lg">laptop_mac</i>&nbsp;下载客户端</a>，安装，然后<a href="/user/getpcconf">&nbsp;下载配置文件&nbsp;</a>，放到程序目录下，运行程序，选择一个合适的服务器，然后开启系统代理即可上网。</p>-->
<p>&nbsp;iOS<i class="icon icon-lg">laptop_mac</i><a href="/link/<?php echo $_smarty_tpl->tpl_vars['ios_token']->value;?>
">&nbsp;下载配置文件&nbsp;</a>，导入到 Surge 中，然后就可以随意切换服务器上网了。</p>
<p>&nbsp;Android<a href="https://github.com/shadowsocksr/shadowsocksr-android/releases"><i class="icon icon-lg">android</i>&nbsp;下载SSR客户端&nbsp;</a>，安装，然后点击<a id="android_add" href="<?php echo $_smarty_tpl->tpl_vars['android_add']->value;?>
">&nbsp;配置文件&nbsp;</a>导入客户端，然后选择一个合适的服务器即可上网。</p>
</div>

</div>
</div>

<div class="card">
<div class="card-main">
<div class="card-inner margin-bottom-no">
<p class="card-heading">帐号使用情况</p>
<dl class="dl-horizontal">
<dt>帐号等级</dt>
<dd><?php echo $_smarty_tpl->tpl_vars['user']->value->class;?>
</dd>

<dt>等级过期时间</dt>
<dd><?php echo $_smarty_tpl->tpl_vars['user']->value->class_expire;?>
</dd>

<dt>帐号过期时间</dt>
<dd><?php echo $_smarty_tpl->tpl_vars['user']->value->expire_in;?>
</dd>

<dt>速度限制</dt>
<?php if ($_smarty_tpl->tpl_vars['user']->value->node_speedlimit != 0) {?>
<dd><?php echo $_smarty_tpl->tpl_vars['user']->value->node_speedlimit;?>
Mbps</dd>
<?php } else { ?>
<dd>不限速</dd>
<?php }?>
</dl>
</div>

</div>
</div>




</div>

<div class="col-lg-6 col-md-6">



<div class="card">
<div class="card-main">
<div class="card-inner margin-bottom-no">

<div id="traffic_chart" style="height: 300px; width: 100%;"></div>

<?php echo '<script'; ?>
 src="//cdn.bootcss.com/canvasjs/1.7.0/canvasjs.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
var chart = new CanvasJS.Chart("traffic_chart",
{
title:{
text: "流量使用情况",
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
<?php if ($_smarty_tpl->tpl_vars['user']->value->transfer_enable != 0) {?>
{
y: <?php echo $_smarty_tpl->tpl_vars['user']->value->last_day_t/$_smarty_tpl->tpl_vars['user']->value->transfer_enable*100;?>
, legendText:"已用 <?php echo number_format($_smarty_tpl->tpl_vars['user']->value->last_day_t/$_smarty_tpl->tpl_vars['user']->value->transfer_enable*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['user']->value->LastusedTraffic();?>
", indexLabel: "已用 <?php echo number_format($_smarty_tpl->tpl_vars['user']->value->last_day_t/$_smarty_tpl->tpl_vars['user']->value->transfer_enable*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['user']->value->LastusedTraffic();?>
"
},
{
y: <?php echo ($_smarty_tpl->tpl_vars['user']->value->u+$_smarty_tpl->tpl_vars['user']->value->d-$_smarty_tpl->tpl_vars['user']->value->last_day_t)/$_smarty_tpl->tpl_vars['user']->value->transfer_enable*100;?>
, legendText:"今日 <?php echo number_format(($_smarty_tpl->tpl_vars['user']->value->u+$_smarty_tpl->tpl_vars['user']->value->d-$_smarty_tpl->tpl_vars['user']->value->last_day_t)/$_smarty_tpl->tpl_vars['user']->value->transfer_enable*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['user']->value->TodayusedTraffic();?>
", indexLabel: "今日 <?php echo number_format(($_smarty_tpl->tpl_vars['user']->value->u+$_smarty_tpl->tpl_vars['user']->value->d-$_smarty_tpl->tpl_vars['user']->value->last_day_t)/$_smarty_tpl->tpl_vars['user']->value->transfer_enable*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['user']->value->TodayusedTraffic();?>
"
},
{
y: <?php echo ($_smarty_tpl->tpl_vars['user']->value->transfer_enable-($_smarty_tpl->tpl_vars['user']->value->u+$_smarty_tpl->tpl_vars['user']->value->d))/$_smarty_tpl->tpl_vars['user']->value->transfer_enable*100;?>
, legendText:"剩余 <?php echo number_format(($_smarty_tpl->tpl_vars['user']->value->transfer_enable-($_smarty_tpl->tpl_vars['user']->value->u+$_smarty_tpl->tpl_vars['user']->value->d))/$_smarty_tpl->tpl_vars['user']->value->transfer_enable*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['user']->value->unusedTraffic();?>
", indexLabel: "剩余 <?php echo number_format(($_smarty_tpl->tpl_vars['user']->value->transfer_enable-($_smarty_tpl->tpl_vars['user']->value->u+$_smarty_tpl->tpl_vars['user']->value->d))/$_smarty_tpl->tpl_vars['user']->value->transfer_enable*100,2);?>
% <?php echo $_smarty_tpl->tpl_vars['user']->value->unusedTraffic();?>
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



<div class="card">
<div class="card-main">
<div class="card-inner margin-bottom-no">
<p class="card-heading">签到获取流量</p>
<p>每天可以通过签到获取流量。</p>

<p>每次签到可以获取<?php echo $_smarty_tpl->tpl_vars['config']->value['checkinMin'];?>
~<?php echo $_smarty_tpl->tpl_vars['config']->value['checkinMax'];?>
MB流量。</p>

<p>每天可以签到一次。请皇上签到。</p>

<p>上次签到时间：<code><?php echo $_smarty_tpl->tpl_vars['user']->value->lastCheckInTime();?>
</code></p>

<p id="checkin-msg"></p>

<?php if ($_smarty_tpl->tpl_vars['geetest_html']->value != null) {?>
<div id="popup-captcha"></div>
<?php }?>
</div>

<div class="card-action">
<div class="card-action-btn pull-left">
<?php if ($_smarty_tpl->tpl_vars['user']->value->isAbleToCheckin()) {?>
<p id="checkin-btn">
<button id="checkin" class="btn btn-brand btn-flat waves-attach"><span class="icon">check</span>&nbsp;签到</button>
</p>
<?php } else { ?>
<p><a class="btn btn-brand disabled btn-flat waves-attach" href="#"><span class="icon">check</span>&nbsp;今天已签到</a></p>
<?php }?>
</div>
</div>

</div>
</div>

<div class="card">
<div class="card-main">
<div class="card-inner margin-bottom-no">
<p class="card-heading">连接信息</p>
<dl class="dl-horizontal">
<dt>端口</dt>
<dd><?php echo $_smarty_tpl->tpl_vars['user']->value->port;?>
</dd>
<dt>密码</dt>
<dd><?php echo $_smarty_tpl->tpl_vars['user']->value->passwd;?>
</dd>
<!--
<dt>加密方式</dt>
<dd><?php echo $_smarty_tpl->tpl_vars['user']->value->method;?>
</dd>
-->
<dt>上次使用</dt>
<dd><?php echo $_smarty_tpl->tpl_vars['user']->value->lastSsTime();?>
</dd>
</dl>
</div>

</div>
</div>




<?php if ($_smarty_tpl->tpl_vars['enable_duoshuo']->value == 'true') {?>

<div class="card">
<div class="card-main">
<div class="card-inner margin-bottom-no">
<p class="card-heading">讨论区</p>
<div class="ds-thread" data-thread-key="0" data-title="index" data-url="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/user/"></div>
<?php echo '<script'; ?>
 type="text/javascript">
var duoshuoQuery = {

short_name:"<?php echo $_smarty_tpl->tpl_vars['duoshuo_shortname']->value;?>
"


};
(function() {
var ds = document.createElement('script');
ds.type = 'text/javascript';ds.async = true;
ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
ds.charset = 'UTF-8';
(document.getElementsByTagName('head')[0] 
 || document.getElementsByTagName('body')[0]).appendChild(ds);
})();
<?php echo '</script'; ?>
>
</div>

</div>
</div>

<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</div>


</div>
</section>
</div>
</main>







<?php $_smarty_tpl->_subTemplateRender('file:user/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
 src="theme/material/js/shake.js/shake.js"><?php echo '</script'; ?>
>



<?php if ($_smarty_tpl->tpl_vars['geetest_html']->value == null) {
echo '<script'; ?>
>
window.onload = function() { 
    var myShakeEvent = new Shake({ 
        threshold: 15 
    }); 
 
    myShakeEvent.start(); 
 
    window.addEventListener('shake', shakeEventDidOccur, false); 
 
    function shakeEventDidOccur () { 
if("vibrate" in navigator){
navigator.vibrate(500);
}

        $.ajax({
                type: "POST",
                url: "/user/checkin",
                dataType: "json",
                success: function (data) {
                    $("#checkin-msg").html(data.msg);
                    $("#checkin-btn").hide();
$("#result").modal();
                    $("#msg").html(data.msg);
                },
                error: function (jqXHR) {
$("#result").modal();
                    $("#msg").html("发生错误：" + jqXHR.status);
                }
            });
    } 
}; 

<?php echo '</script'; ?>
>



<?php echo '<script'; ?>
>
    $(document).ready(function () {
        $("#checkin").click(function () {
            $.ajax({
                type: "POST",
                url: "/user/checkin",
                dataType: "json",
                success: function (data) {
                    $("#checkin-msg").html(data.msg);
                    $("#checkin-btn").hide();
$("#result").modal();
                    $("#msg").html(data.msg);
                },
                error: function (jqXHR) {
$("#result").modal();
                    $("#msg").html("发生错误：" + jqXHR.status);
                }
            })
        })
    })

<?php echo '</script'; ?>
>
<?php } else { ?>


<?php echo '<script'; ?>
>
window.onload = function() { 
    var myShakeEvent = new Shake({ 
        threshold: 15 
    }); 
 
    myShakeEvent.start(); 
 
    window.addEventListener('shake', shakeEventDidOccur, false); 
 
    function shakeEventDidOccur () { 
if("vibrate" in navigator){
navigator.vibrate(500);
}

        c.show();
    } 
}; 

<?php echo '</script'; ?>
>



<?php echo '<script'; ?>
>


var handlerPopup = function (captchaObj) {
c = captchaObj;
captchaObj.onSuccess(function () {
var validate = captchaObj.getValidate();
            $.ajax({
                url: "/user/checkin", // 进行二次验证
                type: "post",
                dataType: "json",
                data: {
                    // 二次验证所需的三个值
                    geetest_challenge: validate.geetest_challenge,
                    geetest_validate: validate.geetest_validate,
                    geetest_seccode: validate.geetest_seccode
                },
                success: function (data) {
                    $("#checkin-msg").html(data.msg);
                    $("#checkin-btn").hide();
$("#result").modal();
                    $("#msg").html(data.msg);
                },
                error: function (jqXHR) {
$("#result").modal();
                    $("#msg").html("发生错误：" + jqXHR.status);
                }
            });
        });
        // 弹出式需要绑定触发验证码弹出按钮
        captchaObj.bindOn("#checkin");
        // 将验证码加到id为captcha的元素里
        captchaObj.appendTo("#popup-captcha");
        // 更多接口参考：http://www.geetest.com/install/sections/idx-client-sdk.html
    };

initGeetest({
gt: "<?php echo $_smarty_tpl->tpl_vars['geetest_html']->value->gt;?>
",
challenge: "<?php echo $_smarty_tpl->tpl_vars['geetest_html']->value->challenge;?>
",
product: "popup", // 产品形式，包括：float，embed，popup。注意只对PC版验证码有效
offline: <?php if ($_smarty_tpl->tpl_vars['geetest_html']->value->success) {?>0<?php } else { ?>1<?php }?> // 表示用户后台检测极验服务器是否宕机，与SDK配合，用户一般不需要关注
}, handlerPopup);


<?php echo '</script'; ?>
>


<?php }?>





<?php }
}
