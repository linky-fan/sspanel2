<?php

namespace App\Controllers\Admin;

use App\Models\Code;
use App\Models\User;
use App\Controllers\AdminController;
use App\Models\Withdrawal;
use App\Utils\Tools;
use App\Services\Auth;

use Ozdemir\Datatables\Datatables;
use App\Utils\DatatablesHelper;

class CodeController extends AdminController
{
    public function index($request, $response, $args)
    {
        $table_config['total_column'] = array("id" => "ID", "code" => "内容",
            "type" => "类型", "number" => "操作",
            "isused" => "是否已经使用", "userid" => "用户ID",
            "user_name" => "用户名", "usedatetime" => "使用时间");
        $table_config['default_show_column'] = array();
        foreach ($table_config['total_column'] as $column => $value) {
            array_push($table_config['default_show_column'], $column);
        }
        $table_config['ajax_url'] = 'code/ajax';
        return $this->view()->assign('table_config', $table_config)->display('admin/code/index.tpl');
    }

    public function withdrawal($request, $response, $args)
    {
        $pageNum = 1;
        if (isset($request->getQueryParams()["page"])) {
            $pageNum = $request->getQueryParams()["page"];
        }
        $list = Withdrawal::orderBy('datetime', 'desc')->paginate(15, ['*'], 'page', $pageNum);
        foreach($list as $k=>$val){
            $list[$k]['datetime'] = date("Y-m-d H:i:s",$val['datetime']);
        }
        $list->setPath('/user/code/withdrawal');
        return $this->view()->assign('list', $list)->display('admin/code/withdrawal.tpl');

    }
    public function sure_withdrawal($request, $response, $args){
        $id = $request->getParam('id');
        $is_withdrawal = $request->getParam('is_withdrawal');
        if($id == ''){
            $res['ret'] = 0;
            $res['msg'] = "数据错误.";
            return $response->getBody()->write(json_encode($res));
        }
        $withdrawal = Withdrawal::where('id', '=', $id)->first();
        $withdrawal->status = 1;
        if($is_withdrawal == 1){
            $withdrawal->is_withdrawal = 1;
        }else{
            $user = User::find($withdrawal->user_id);
            $user->money =  $user->money + $withdrawal->money;
            $user->save();
        }
        if($withdrawal->save()){
            $res['ret'] = 1;
            $res['msg'] = "确认完成.";
        }else{
            $res['ret'] = 0;
            $res['msg'] = "数据错误.";
        }
        return $response->getBody()->write(json_encode($res));
    }


    public function create($request, $response, $args)
    {
        return $this->view()->display('admin/code/add.tpl');
    }

    public function donate_create($request, $response, $args)
    {
        return $this->view()->display('admin/code/add_donate.tpl');
    }

    public function add($request, $response, $args)
    {
        $n = $request->getParam('amount');
        $type = $request->getParam('type');
        $number = $request->getParam('number');


        for ($i = 0; $i < $n; $i++) {
            $char = Tools::genRandomChar(32);
            $code = new Code();
            $code->code = time() . $char;
            $code->type = -1;
            $code->number = $number;
            $code->userid = 0;
            $code->usedatetime = "1989:06:04 02:30:00";
            $code->save();
        }


        $rs['ret'] = 1;
        $rs['msg'] = "充值码添加成功";
        return $response->getBody()->write(json_encode($rs));
    }


    public function donate_add($request, $response, $args)
    {
        $amount = $request->getParam('amount');
        $type = $request->getParam('type');
        $text = $request->getParam('code');

        $code = new Code();
        $code->code = $text;
        $code->type = $type;
        $code->number = $amount;
        $code->userid = Auth::getUser()->id;
        $code->isused = 1;
        $code->usedatetime = date("Y:m:d H:i:s");

        $code->save();

        $rs['ret'] = 1;
        $rs['msg'] = "添加成功";
        return $response->getBody()->write(json_encode($rs));
    }

    public function ajax_code($request, $response, $args)
    {
        $datatables = new Datatables(new DatatablesHelper());
        $datatables->query('Select code.id,code.code,code.type,code.number,code.isused,code.userid,code.userid as user_name,code.usedatetime from code');

        $datatables->edit('number', function ($data) {
            switch ($data['type']) {
                case -1:
                    return "充值 " . $data['number'] . " 元";

                case -2:
                    return "支出 " . $data['number'] . " 元";

                default:
                    return "已经废弃";
            }
        });

        $datatables->edit('isused', function ($data) {
            return $data['isused'] == 1 ? '已使用' : '未使用';
        });

        $datatables->edit('userid', function ($data) {
            return $data['userid'] == 0 ? '未使用' : $data['userid'];
        });

        $datatables->edit('user_name', function ($data) {
            $user = User::find($data['user_name']);
            if ($user == null) {
                return "未使用";
            }

            return $user->user_name;
        });

        $datatables->edit('type', function ($data) {
            switch ($data['type']) {
                case -1:
                    return "充值金额";

                case -2:
                    return "财务支出";

                default:
                    return "已经废弃";
            }
        });

        $datatables->edit('usedatetime', function ($data) {
            return $data['usedatetime'] > '2000-1-1 0:0:0' ? $data['usedatetime'] : "未使用";
        });

        $body = $response->getBody();
        $body->write($datatables->generate());
    }
}
