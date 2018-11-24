<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/12 0012
 * Time: 下午 7:30
 */

namespace Home\Model;


use Think\Model;

class orderModel extends Model
{
    function addorder($data){
        $a=M("order");
        $result=$a->add($data);
        return $result;
    }
    function alertstate($data){
        $a=M("order");
        $result=$a->save($data);
        return $result;
    }

    function update($state){
        $a=M("order");
        $result=$a->save($state);
        return $result;
    }
}