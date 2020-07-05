<?php


namespace app\admin\model;


use think\Model;

class User extends Model
{
    public function checkUser($user) {

       $res = $this->where('name','=',$user['name'])->where('password','=',$user['password'])->select();
       return $res;
    }
}