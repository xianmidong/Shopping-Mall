<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/10 0010
 * Time: 下午 1:42
 */

namespace Home\Model;


use Think\Model;

class addressModel extends Model
{

    function all($userid){
       $address= M('address');
       $result=$address->where("userid=".$userid)->select();
       return $result;
    }
    function add_addre($data){
        $address= M('address');
        $result=$address->add($data);
        return $result;
    }
    function del_addre($addressid){
        $address= M('address');
        $result=$address->where("addressid=".$addressid)->delete();
        return $result;
    }
    function query_view($username){
        $a=M("address_view");
        $result=$a->where("username='$username'")->select();
        return $result;
    }
}