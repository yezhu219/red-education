<?php


namespace app\index\controller;


use app\index\model\Imgs;
use think\Controller;

class Servise extends Controller
{
    public function index()
    {
        $type = input('param.type');
        if($type) {
            $list  = (new Imgs())->getAllServise();
        }else {
            $list = (new Imgs())->getServiseByType($type);
        }
        $this->assign('list',$list);
        return $this->fetch();
    }
}