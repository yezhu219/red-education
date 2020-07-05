<?php


namespace app\index\model;


use think\Model;

class Article extends Model
{
    public function getNews($pageSize=10) {
        $res =  $this->where('status','<>',1)
            ->where('type','in','1,2,3')->paginate($pageSize);
        return $res;
    }
    public function getNewsByTpye($type,$pageSize) {
        $res =  $this->where('status','<>',1)
            ->where('type','in',$type)->paginate($pageSize);
        return $res;
    }
    public function getHistory() {
        $res =  $this->where('status','<>',1)
            ->where('type','=','4')->paginate();
        return $res;
    }
    public function getGeneral() {
        $res =  $this->where('status','<>',1)
            ->where('type','=','6')->paginate();
        return $res;
    }
    public function getArticleById($id) {
        $res = $this->where('status','<>',1)
            ->where('id','=',$id)->select();
        return $res;
    }
}