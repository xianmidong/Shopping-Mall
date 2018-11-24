<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/30 0030
 * Time: 下午 2:03
 */

namespace Admin\Model;


use Think\Model;

class GoodstypeModel extends Model
{   function query_all_type(){
        $a=M("goodstype");
        $result=$a->select();
        return $result;
}
    function deltype($typeid){
        $a=M("goodstype");
        $result=$a->where("typeid=$typeid")->delete();
        return $result;
    }
    function addtype($date){
        $a=M("goodstype");
        $result=$a->add($date);
        return $result;
    }
    function querytypename($typename){
        $a=M("goodstype");
        $result=$a->where("typename='$typename'")->find();
        return $result;
    }
    function queryByid($type_id){
        $a=M("goodstype");
        $result=$a->where("typeid=$type_id")->find();
        return $result;
    }
    function alerttype($data){
        $a=M("goodstype");
        $result=$a->save($data);
        return $result;
    }
}