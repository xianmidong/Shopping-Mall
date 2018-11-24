<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/8 0008
 * Time: 下午 1:56
 */

namespace Home\Model;


use Think\Model;

class personalModel extends Model
{
    function query_userinfo($username){
        $a=M("personal");
        $result=$a->where("personalname='$username'")->find();
        return $result;
    }
    function alertinfo($username,$data){
        $a=M("personal");
        $result=$a->where("personalname='$username'")->save($data);
        return $result;
    }

}