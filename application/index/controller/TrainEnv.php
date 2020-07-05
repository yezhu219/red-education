<?php


namespace app\index\controller;


use app\index\model\Imgs;
use think\Controller;

class TrainEnv extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
    public function detail()
    {
        $id = input('param.id');
        $data = (new Imgs())->getImgById($id);
        $this->assign('data',$data);
        return $this->fetch();
    }
}