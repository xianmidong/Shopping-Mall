<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/13 0013
 * Time: 下午 4:51
 */

namespace Home\Model;


use Think\Model;

class orderdetailModel extends Model
{
    function add_info($data){
        $a=M("orderdetail");
        $result=$a->addAll($data);
        return $result;
    }
    function addinfo($arr){
        $a=M("orderdetail");
        $result=$a->add($arr);
        return $result;
    }
}