<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/30 0030
 * Time: 下午 2:04
 */

namespace Admin\Model;


use Think\Model;

class AddressModel extends Model
{
    function queryaddress(){
        $address=M('address');
        return $address->select();
    }
}