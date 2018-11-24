<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/7 0007
 * Time: 上午 11:07
 */

namespace Home\Model;


use Think\Model;

class cartModel extends Model
{
    function query_allby_user($username){
        $a=M("cart");
        $result=$a->where("username='$username'")->select();
        return $result;
    }
    function addtocar($data){
        $a=M("cart");
        $result=$a->add($data);
        return $result;
    }
    function del_from_car($carid){
        $a=M("cart");
        $result=$a->where("cartid='$carid'")->delete();
        return $result;
    }
    function delall($ids){
        $a=M("cart");
        $result=$a->delete($ids);
        return $result;
    }
    function  updatacar($data){
        $a=M("cart");
        $result=$a->save($data);
        return $result;
    }

    function count_num($username){
        $a=M("cart");
        $result=$a->where("username='$username'")->count("goodscount");
        return $result;
    }
    function select_order_goods($arr){
        $a=M("cart");
        $result=$a->where($arr)->select();
        return $result;
    }
}