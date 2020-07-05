<?php


namespace app\index\controller;


use app\index\model\Imgs;
use think\Controller;

class Course extends Controller
{
    public function index()
    {
        $list = (new Imgs())->getAllCourse();
        $this->assign('list',$list);
        return $this->fetch();
    }
}