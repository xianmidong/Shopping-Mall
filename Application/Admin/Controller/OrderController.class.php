<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/13 0013
 * Time: 下午 7:36
 */

namespace Admin\Controller;


use Admin\Model\OrderModel;
use Think\Controller;

class OrderController extends Controller
{
    function orderinfo(){
        $q=new OrderModel();
        $result=$q->query_all();
        $this->assign("order",$result);
        $this->display();
    }
    function del_pay_order(){
        $orderid=I("orderid");
        $q=new OrderModel();
        $result=$q->del_order($orderid);
        if ($result){
            echo 1;
        }
    }
}