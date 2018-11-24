<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/1 0001
 * Time: 下午 8:08
 */

namespace Home\Model;


use Think\Model;

class userinfoModel extends Model
{
    function  check_namepwd($username,$userpwd){
        $Muser=M("userinfo");
        return $Muser->where("username='".$username."'and userpwd='".$userpwd."'")->find();
    }
    function userall($username){
        $Muser=M("userinfo");
        return $Muser->where("username='".$username."'")->find();
    }
    function findtel($username){
        $a=M("userinfo");
        $result=$a->where("username='$username'")->getField("telphone");
        return $result;
    }
}