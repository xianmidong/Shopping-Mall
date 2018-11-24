<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/6 0006
 * Time: 下午 4:52
 */

namespace Home\Model;


use Think\Model;

class provincialModel extends Model
{
     function queryall(){
         $Mprovincial=M('provincial');
         return $Mprovincial->select();
     }

}