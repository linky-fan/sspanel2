<?php
/* Smarty version 3.1.31, created on 2017-07-29 17:33:11
  from "D:\MAMP\htdocs\easyfq\resources\views\material\admin\code\withdrawal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_597c5657a45857_23117486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1cde9c7defb175f8627aadcc0ba1fdc92474a8b4' => 
    array (
      0 => 'D:\\MAMP\\htdocs\\easyfq\\resources\\views\\material\\admin\\code\\withdrawal.tpl',
      1 => 1500659479,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/main.tpl' => 1,
    'file:dialog.tpl' => 1,
    'file:user/footer.tpl' => 1,
  ),
),false)) {
function content_597c5657a45857_23117486 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:admin/main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<main class="content">
    <div class="container">
        <section class="content-inner margin-top-no">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card margin-bottom-no">
                        <div class="card-main">
                            <div class="card-inner">
                                <div class="card-action">
                                    <div class="card-action-btn pull-left">
                                        <button class="btn btn-flat waves-attach" id="code-update"><span class="icon">check</span>&nbsp;提现记录
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12">
                    <div class="card margin-bottom-no">
                        <div class="card-main">
                            <div class="card-inner">
                                <div class="card-inner">
                                    <div class="card-table">
                                        <div class="table-responsive">
                                            <?php echo $_smarty_tpl->tpl_vars['list']->value->render();?>

                                            <table class="table table-hover">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>支付宝账号</th>
                                                    <th>体现金额</th>
                                                    <th>提交时间</th>
                                                    <th>申请用户ID</th>
                                                    <th>申请用户</th>
                                                    <th>操作</th>
                                                </tr>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
                                                    <tr>
                                                        <td>#<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->ali_id;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->money;?>
&nbsp;元</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->datetime;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->user_id;?>
</td>
                                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->user_name;?>
</td>
                                                        <?php if ($_smarty_tpl->tpl_vars['item']->value->status == 0) {?>
                                                            <td><a class="btn btn-brand" href="javascript:void(0);"
                                                                   onclick="sure_withdrawal(<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
,1)">确认提现</a></td>
                                                            <td><a class="btn btn-brand" href="javascript:void(0);"
                                                                   onclick="sure_withdrawal(<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
,0)">不通过</a></td>
                                                        <?php } else { ?>
                                                            <?php if ($_smarty_tpl->tpl_vars['item']->value->is_withdrawal == 0) {?>
                                                                <td><a class="btn btn-brand" href="javascript:void(0);"
                                                                       disabled>提现失败</a></td>
                                                            <?php } else { ?>
                                                                <td><a class="btn btn-brand" href="javascript:void(0);"
                                                                       disabled>提现完成</a></td>
                                                            <?php }?>

                                                        <?php }?>
                                                    </tr>
                                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                                            </table>
                                            <?php echo $_smarty_tpl->tpl_vars['list']->value->render();?>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <?php $_smarty_tpl->_subTemplateRender('file:dialog.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            </div>
        </section>
    </div>
</main>


<?php $_smarty_tpl->_subTemplateRender('file:user/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php echo '<script'; ?>
>

    function withdrawal() {
        $("#withdrawal_modal").modal();
    }
    function sure_withdrawal(id,is_withdrawal) {
        $.ajax({
            type: "POST",
            url: "sure_withdrawal",
            dataType: "json",
            data: {
                id:id,
                is_withdrawal:is_withdrawal
            },
            success: function (data) {
                if (data.ret) {
                    $("#result").modal();
                    $("#msg").html(data.msg);
                    window.setTimeout("location.href=window.location.href", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                } else {
                    $("#result").modal();
                    $("#msg").html(data.msg);
                    window.setTimeout("location.href=window.location.href", <?php echo $_smarty_tpl->tpl_vars['config']->value['jump_delay'];?>
);
                }
            },
            error: function (jqXHR) {
                $("#result").modal();
                $("#msg").html("发生错误：" + jqXHR.status);
            }
        })
    }
<?php echo '</script'; ?>
>

<?php }
}
