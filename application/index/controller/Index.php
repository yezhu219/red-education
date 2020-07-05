<?php
namespace app\index\controller;

use app\index\model\Article;
use app\index\model\Imgs;
use think\Controller;

class Index extends Controller
{

    public function index()
    {
        $banner = (new Imgs())->getBanner();
        $swiper = (new Imgs())->getSwiper();
        $trainEnv = (new Imgs())->getTrainEnv();
        $article = (new Article())->getNews();
        $histroy = (new Article())->getHistory();
        $general = (new Article())->getGeneral();
        $this->assign([
            'banner'=>$banner,
            'swiper'=>$swiper,
            'trainEnv'=>$trainEnv,
            'article'=>$article,
            'history'=>$histroy,
            'general'=>$general
        ]);
        return $this->fetch();
    }
}
