<?php


namespace app\admin\controller;


use app\admin\model\Imgs;
use think\Controller;

class Images extends BaseController
{
    public function index() {
        $id = input('param.id');
        $list = (new Imgs())->getImgList($id);
        $this->assign('list',$list);
        return $this->fetch();
    }
    public function pictureAdd() {
        return $this->fetch();
    }
    public function  upload() {
        // 获取表单上传文件 例如上传了001.jpg
        $file = \request()->file('file');
        // 移动到框架应用根目录/uploads/ 目录下
//        return json($file);
        $info = $file->move( 'uploads');
        $path = $info->getSaveName();
        $path = preg_replace("/\\\/","/",$path);
        return json(['url'=>'/uploads/'.$path]);
//
    }
    public function add() {
        $data = input('post.');

        $res = (new Imgs())->allowField(true)->save($data);
        if($res) {
            $this->success('添加成功');

        }else {
            $this->error('添加失败');
        }
    }
    public function  delOne() {
        $id = input('param.id');
        $res = (new Imgs())->delImgById($id);
        if($res) {
            $code = '1';
            $msg = '删除成功';
        }else {
            $code = '0';
            $msg = '删除失败';
        }
        $data=[
            'code'=>$code,
            'msg'=>$msg
        ];
        return json($data);
    }
}