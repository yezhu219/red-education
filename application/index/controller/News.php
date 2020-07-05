<?php


namespace app\index\controller;


use app\index\model\Article;
use think\Controller;

class News extends Controller
{
    public function index()
    {
        $type = input('param.type');
        print_r($type);
        if($type) {
            $data = (new Article())->getNewsByTpye($type,20);
        }else {

            $data = (new Article())->getNews(20);
        }
        $this->assign('list',$data);
        return $this->fetch();
    }
    public function detail()
    {
        $id = input('param.id');
        $data = (new Article())->getArticleById($id);
        $this->assign('data',$data[0]);
        return $this->fetch();
    }
}