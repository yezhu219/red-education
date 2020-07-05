<?php
namespace app\admin\controller;


use app\admin\model\Article;
use app\admin\model\User;
use think\Controller;
use app\admin\controller\BaseController;


class Index extends BaseController
{
    public function index()
    {
//        $id = input('param.id');
        return $this->fetch();
    }
    public function welcome () {
        return $this->fetch();
    }
    public function articleList () {
        $id = input('param.id');
        $articleList = (new Article())->getArticleList($id);
        $this->assign('list',$articleList);
        return $this->fetch();
    }
    public function articleAdd () {
        $id = input('param.id');
        if($id) {
            $data = (new Article())->getArticleById($id);
            $this->assign('article',$data[0]);

        }else {
            $this->assign('article',[
                'title'=>'',
                'sort'=>'',
                'des'=>'',
                'content'=>'',
                'poster'=>'',
                'type'=>'',
                'author'=>''
            ]);
        }
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
        $data['content'] = $data['editorValue'];
        unset($data['editorValue']);
        $res = (new Article())->allowField(true)->save($data);
        if($res) {
             $this->success('添加成功');

        }else {
            $this->error('添加失败');
        }
    }
    public function  delOne() {
        $id = input('param.id');
//        print_r($id.'----');
        $res = (new Article())->delArticleById($id);
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
    public function search ($keyword) {
        $res = (new Article())->search($keyword);
        $this->assign('list',$res);
        return $this->fetch('index/article_list');
    }
    public function login() {
        return $this->fetch();
    }

    public function loginout() {
        session(null);
        return $this->fetch('login/login');
    }
}
