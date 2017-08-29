<?php
/* Smarty version 3.1.31, created on 2017-08-07 10:06:44
  from "C:\MAMP\htdocs\easyfq\resources\views\material\user\index_new.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5987cb347a5185_53286917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5819e7ece159c0e0018a4f914db15fec512b890f' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\user\\index_new.tpl',
      1 => 1502020005,
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
function content_5987cb347a5185_53286917 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<section class="index_2">
    <section class="question">
        <div class="container">
            <div class="col-md-3 left text-center">
                <div class="left-box">
                    <ul>
                        <li>
                            <div class="user_info">个人中心</div>
                        </li>
                        <li><a class="active" href="/user">我的资料</a></li>
                        <li><a href="/user/edit">修改密码</a></li>
                        <li><a href="/user/invite">我的邀请</a></li>
                        <li><a href="/user/bought">购买记录</a></li>
                        
                        <li><a href="/user/node">节点信息</a></li>
                        <li><a href="/user/ticket">建议反馈</a></li>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->isAdmin()) {?>
                            <li>
                                <a href="/admin">
                                    管理面板
                                </a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 right">
                <div class="title">我的资料</div>
                <div class="right-box"  style="padding-left: 45px;">
                    <p class=" col-lg-12">
                        <div class="col-lg-2">用户名:</div>
                        <div class="col-lg-4"><?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
</div>
                        <div class="col-lg-2"><a href="javascript:void(0);" onclick="edit_name(<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
)">修改昵称</a></div>
                    </p>
                    <p class=" col-lg-12">
                        <div class="col-lg-2">邮箱:</div>
                        <div class="col-lg-4"><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</div>
                    </p>
                    <p class=" col-lg-12">
                        <div class="col-lg-2">密码:</div>
                        <div class="col-lg-4"><?php echo $_smarty_tpl->tpl_vars['user']->value->passwd;?>
</div>
                        <div class="col-lg-2"><a href="/user/edit">修改密码</a></div>
                    </p>
                    <p class=" col-lg-12">
                        <div class="col-lg-2">剩余套餐:</div>
                        <div class="col-lg-4"><span style="color: red"><?php echo $_smarty_tpl->tpl_vars['user']->value->expire_in;?>
</span>到期
                            <br>剩余流量: <span style="color: red"><?php echo $_smarty_tpl->tpl_vars['user']->value->unusedTraffic();?>
</span>
                        </div>
                        <div class="col-lg-2"><a href="/package">马上续费</a></div>
                    </p>
                    <p class=" col-lg-12">  <br></p>
                    <?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                </div>
            </div>
        </div>
    </section>
</section>

<div aria-hidden="true" class="modal modal-va-middle fade" id="edit_name_modal" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-xs">
        <div class="modal-content">
            <div class="modal-heading">
                <a class="modal-close" data-dismiss="modal">×</a>

                <h2 class="modal-title">修改昵称</h2>
            </div>
            <div class="modal-inner">
                <div class="form-group form-group-label">
                    <label class="floating-label" for="oldpwd">当前昵称</label>
                    <input class="form-control" id="name" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->user_name;?>
">
                </div>
            </div>
            <div class="modal-footer">
                <p class="text-right">
                    <button class="btn btn-flat btn-brand waves-attach" data-dismiss="modal"
                            id="name_input" type="button">确定
                    </button>
                </p>
            </div>
        </div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
>
    function edit_name(id){
        $("#edit_name_modal").modal();
        $("#name_input").click(function () {
            $.ajax({
                type: "POST",
                url: "/user/edit_name",
                dataType: "json",
                data: {
                    user_name: $("#name").val(),
                    id:id
                },
                success: function (data) {
                    $("#result").modal();
                    $("#msg").html(data.msg);
                    window.setTimeout("location.href='/user'", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                },
                error: function (jqXHR) {
                    $("#result").modal();
                    $("#msg").html(data.msg + "  发生了错误。");
                }
            });
        });
    }
<?php echo '</script'; ?>
><?php }
}
