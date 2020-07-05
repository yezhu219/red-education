<?php


namespace app\index\model;


use think\Model;

class Imgs extends Model
{
    public function getBanner() {
       $res = $this->where('status','<>',1)
           ->where('type','=',1)->select();
       return $res;
    }
    public function getSwiper() {
        $res = $this->where('status','<>',1)
            ->where('type','=',2)->select();
        return $res;
    }
    public function getTrainEnv() {
        $res = $this->where('status','<>',1)
            ->where('type','=',3)->select();
        return $res;
    }
    public function getAllCourse() {
        $res = $this->where('status','<>',1)
            ->where('type','=',4)->select();
        return $res;
    }
    public function getAllServise() {
        $res = $this->where('status','<>',1)
            ->where('type','in','7,8,9,10')->select();
        return $res;
    }
    public function getServiseByType($type) {
        $res = $this->where('status','<>',1)
            ->where('type','=',$type)->select();
        return $res;
    }
    public function getImgById($id) {
        $res = $this->where('status','<>',1)
            ->where('id','=',$id)->select();
        return $res;
    }
}