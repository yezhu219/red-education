<?php


namespace app\admin\controller;


use think\Controller;

class BaseController extends Controller
{
    public function initialize(){
        if(!session('user')){
            $this->error('请先登陆','login/login');//未登录则自动跳转到登陆页面
        }
    }
}