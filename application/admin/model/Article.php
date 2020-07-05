<?php


namespace app\admin\model;


use think\Model;

class Article extends Model
{
    public function getArticleList($id=0) {
        if($id!=0) {
            $data = [
                'type' => $id,
                'status'=>['neq',1]
            ];
            $order = [
                'id' => 'desc'
            ];
            $res = $this->where($data)->where('status','<>',1)->order($order)->paginate(5);
        }else {

            $res =  $this->where('status','<>',1)->paginate(5);
        }
        return $res;
    }
    public function  getArticleById($id) {
        $res = $this->where('id',$id)->select();
        return $res;
    }
    public function delArticleById($id) {
        $res = $this->save(['status'=>1],['id'=>$id]);
        return $res;
    }
    public function search($keyword) {
        return $this->where('status','<>',1)->whereLike('title','%'.$keyword.'%')->paginate();

    }
}