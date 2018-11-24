<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/30 0030
 * Time: 下午 2:09
 */

namespace Admin\Model;


use Think\Model;

class OrderModel extends Model
{
    function query_all(){
        $a=M("myorder_view");//查询视图
        $result=$a->select();
        return $result;
    }
    //删除已付款的订单
    function del_order($orderid){
        $a=M("order");
        $result=$a->where("orderid='$orderid'")->delete();
        return $result;
    }
}