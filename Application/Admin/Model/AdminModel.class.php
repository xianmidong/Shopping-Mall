<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/29 0029
 * Time: 下午 8:21
 */

namespace Admin\Model;


use Think\Model;

class AdminModel extends Model
{
    function find_admin($adminname,$password){
        $a=M("admin");
        $result=$a->where("adminname='$adminname' and adminpwd='$password'")->find();
        return $result;
    }
}