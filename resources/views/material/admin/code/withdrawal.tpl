{include file='admin/main.tpl'}


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
                                            {$list->render()}
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
                                                {foreach $list as $item}
                                                    <tr>
                                                        <td>#{$item->id}</td>
                                                        <td>{$item->ali_id}</td>
                                                        <td>{$item->money}&nbsp;元</td>
                                                        <td>{$item->datetime}</td>
                                                        <td>{$item->user_id}</td>
                                                        <td>{$item->user_name}</td>
                                                        {if $item->status == 0}
                                                            <td><a class="btn btn-brand" href="javascript:void(0);"
                                                                   onclick="sure_withdrawal({$item->id},1)">确认提现</a></td>
                                                            <td><a class="btn btn-brand" href="javascript:void(0);"
                                                                   onclick="sure_withdrawal({$item->id},0)">不通过</a></td>
                                                        {else}
                                                            {if $item->is_withdrawal == 0}
                                                                <td><a class="btn btn-brand" href="javascript:void(0);"
                                                                       disabled>提现失败</a></td>
                                                            {else}
                                                                <td><a class="btn btn-brand" href="javascript:void(0);"
                                                                       disabled>提现完成</a></td>
                                                            {/if}

                                                        {/if}
                                                    </tr>
                                                {/foreach}
                                            </table>
                                            {$list->render()}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                {include file='dialog.tpl'}
            </div>
        </section>
    </div>
</main>


{include file='user/footer.tpl'}


<script>

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
                    window.setTimeout("location.href=window.location.href", {$config['jump_delay']});
                } else {
                    $("#result").modal();
                    $("#msg").html(data.msg);
                    window.setTimeout("location.href=window.location.href", {$config['jump_delay']});
                }
            },
            error: function (jqXHR) {
                $("#result").modal();
                $("#msg").html("发生错误：" + jqXHR.status);
            }
        })
    }
</script>

