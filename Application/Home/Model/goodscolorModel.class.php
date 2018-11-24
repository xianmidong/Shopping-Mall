<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/9 0009
 * Time: 下午 3:27
 */

namespace Home\Model;


use Think\Model;

class goodscolorModel extends Model
{
        function queryimg($goodsname){
            $a=M("goodscolor");
            $result=$a->where("goodsname='$goodsname'")->select();
            return $result;
        }
}