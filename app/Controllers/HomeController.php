<?php

namespace App\Controllers;

use App\Models\Ann;
use App\Models\InviteCode;
use App\Models\Question;
use App\Models\Shop;
use App\Models\ShopPackage;
use App\Models\User;
use App\Models\Code;
use App\Models\Payback;
use App\Models\Paylist;
use App\Services\Auth;
use App\Services\Config;
use App\Utils\Tools;
use App\Utils\Telegram;
use App\Utils\Tuling;
use App\Utils\TelegramSessionManager;
use App\Utils\QRcode;
use App\Utils\Pay;
use App\Utils\TelegramProcess;
use App\Utils\Spay_tool;

/**
 *  HomeController
 */
class HomeController extends BaseController
{
    public function index()
    {
        $Ann = Ann::orderBy('date', 'desc')->first();
        return $this->view()->assign('ann',$Ann)->display('index.tpl');
    }

    public function code()
    {
        $codes = InviteCode::where('user_id', '=', '0')->take(10)->get();
        return $this->view()->assign('codes', $codes)->display('code.tpl');
    }

    public function down()
    {
    }

    public function shop_package()
    {
        $Ann = Ann::orderBy('date', 'desc')->first();
        $user = Auth::getUser();
        $packages = ShopPackage::get();
        foreach ($packages as $k => $package) {
            $shops = Shop::where("status", 1)->where('type', $package->id)->get();
            $packages[$k]['data'] = $shops;
        }
        return $this->view()->assign('ann',$Ann)->assign('package_list', $packages)->assign('user',$user)->display('package.tpl');
    }

    public function question()
    {
        $Ann = Ann::orderBy('date', 'desc')->first();
        $question = Question::where('type', '=', 1)->get();
        return $this->view()->assign('question_list', $question)->assign('ann',$Ann)->assign('id',1)->display('question.tpl');
    }
    public function questionByClassify($request, $response, $args)
    {
        $Ann = Ann::orderBy('date', 'desc')->first();
        $id = $args['id'];
        $question = Question::where('type', '=', $id)->get();
        return $this->view()->assign('question_list', $question)->assign('ann',$Ann)->assign('id',$id)->display('question.tpl');
    }

    public function tos()
    {
        $Ann = Ann::orderBy('date', 'desc')->first();
        return $this->view()->assign('ann',$Ann)->display('tos.tpl');
    }

    public function staff()
    {
        return $this->view()->display('staff.tpl');
    }

    public function telegram($request, $response, $args)
    {
        $token = "";
        if (isset($request->getQueryParams()["token"])) {
            $token = $request->getQueryParams()["token"];
        }

        if ($token == Config::get('telegram_request_token')) {
            TelegramProcess::process();
        } else {
            echo("不正确请求！");
        }
    }

    public function page404($request, $response, $args)
    {
        $pics = scandir(BASE_PATH . "/public/theme/" . (Auth::getUser()->isLogin == false ? Config::get("theme") : Auth::getUser()->theme) . "/images/error/404/");

        if (count($pics) > 2) {
            $pic = $pics[rand(2, count($pics) - 1)];
        } else {
            $pic = "4041.png";
        }

        $newResponse = $response->withStatus(404);
        $newResponse->getBody()->write($this->view()->assign("pic", "/theme/" . (Auth::getUser()->isLogin == false ? Config::get("theme") : Auth::getUser()->theme) . "/images/error/404/" . $pic)->display('404.tpl'));
        return $newResponse;
    }

    public function page405($request, $response, $args)
    {
        $pics = scandir(BASE_PATH . "/public/theme/" . (Auth::getUser()->isLogin == false ? Config::get("theme") : Auth::getUser()->theme) . "/images/error/405/");
        if (count($pics) > 2) {
            $pic = $pics[rand(2, count($pics) - 1)];
        } else {
            $pic = "4051.png";
        }

        $newResponse = $response->withStatus(405);
        $newResponse->getBody()->write($this->view()->assign("pic", "/theme/" . (Auth::getUser()->isLogin == false ? Config::get("theme") : Auth::getUser()->theme) . "/images/error/405/" . $pic)->display('405.tpl'));
        return $newResponse;
    }

    public function page500($request, $response, $args)
    {
        $pics = scandir(BASE_PATH . "/public/theme/" . (Auth::getUser()->isLogin == false ? Config::get("theme") : Auth::getUser()->theme) . "/images/error/500/");
        if (count($pics) > 2) {
            $pic = $pics[rand(2, count($pics) - 1)];
        } else {
            $pic = "5001.png";
        }

        $newResponse = $response->withStatus(500);
        $newResponse->getBody()->write($this->view()->assign("pic", "/theme/" . (Auth::getUser()->isLogin == false ? Config::get("theme") : Auth::getUser()->theme) . "/images/error/500/" . $pic)->display('500.tpl'));
        return $newResponse;
    }

    public function pay_callback($request, $response, $args)
    {
        Pay::callback($request);
    }
}
