<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/9 0009
 * Time: 下午 12:40
 */

namespace Home\Model;


use Think\Model;

class goodsModel extends Model
{
        function query_all_goods(){
            $a=M("goods");
            $result=$a->select();
            return $result;
        }
        function querynewgoods(){
            $a=M("goods");
            $result=$a->where("isnew=1")->order('goodsid desc')->limit(8)->select();
            return $result;
        }
        function querygoodsbyname($goodsname){
            $a=M("goods");
            $result=$a->where("goodsname='$goodsname'")->find();
            return $result;
        }
        function queryby_goodstype($typename){
            $a=M("goods");
            $result=$a->where("typename='$typename'")->select();
            return $result;
        }
      function newgoods(){
        $a=M("goods");
        $result=$a->where("isnew=1")->order('goodsid desc')->select();
        return $result;
    }
    function query_img($goodsid){
            $a=M("goods");
            $result=$a->where("goodsid=$goodsid")->getField("goodsimg");
            return $result;
    }
}