<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/6 0006
 * Time: 下午 8:43
 */

namespace Home\Model;


use Think\Model;

class goodstypeModel extends Model
{
  function typeall(){
      $type=M("goodstype");
      return $type->select();
  }
}