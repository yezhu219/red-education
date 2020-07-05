<?php


namespace app\admin\model;


use think\Model;

class Imgs extends Model
{
    public function getImgList($id=0) {
        if($id!=0) {
            $data = [
                'type' => $id,

            ];
            $order = [
                'id' => 'desc'
            ];
            $res = $this->where($data)->where('status','<>',1)->order($order)->paginate(5);
        }else {
         $res = $this->where('status','<>',1)->paginate(5);
        }
        return $res;
    }
    public function delImgById($id) {
        $res = $this->save(['status'=>1],['id'=>$id]);
        return $res;
    }
}