<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/9 0009
 * Time: 下午 3:50
 */

namespace Home\Model;


use Think\Model;

class goodsdetailModel extends Model
{
        function querydetail($goodsname){
            $a=M("goodsdetail");
            $result=$a->where("goodsname='$goodsname'")->find();
            return $result;
        }
}