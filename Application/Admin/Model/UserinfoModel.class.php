<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/30 0030
 * Time: 下午 2:09
 */

namespace Admin\Model;


use Think\Model;

class UserinfoModel extends Model
{
    function resit_user($data){
        $a=M("userinfo");
        $result=$a->add($data);
        return $result;
    }

    function  query_someone($date){
        $a=M("userinfo");
        $result=$a->where("username='$date'or telphone='$date'")->find();
       if ($result){
           echo 1;
       }
    }

}