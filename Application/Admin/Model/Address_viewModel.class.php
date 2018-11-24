<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/12 0012
 * Time: 下午 7:17
 */

namespace Admin\Model;


use Think\Model;

class Address_viewModel extends Model
{
    function queryaddress(){
        $address=M('address_view');
        return $address->select();
    }
}