<?php


namespace app\admin\controller;


use app\admin\model\User;
use think\Controller;

class Login extends Controller
{
    public function initialize()
    {

    }

    public function login() {
        return $this->fetch();
    }
    public function checkLogin() {
        $user = input('param.');
        $res = (new User())->checkUser($user);
        if($res->isEmpty()) {
            $this->error('用户名或密码错误');
        }else {
            session('user',$user);
            return $this->fetch('index/index');
        }
    }
}