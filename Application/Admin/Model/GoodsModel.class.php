<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/30 0030
 * Time: 下午 1:59
 */

namespace Admin\Model;


use Think\Model;

class GoodsModel extends Model
{
        function query_all(){
            $a=M("goods");
            $result=$a->select();
            return $result;
        }
        function queryby_typename($typename){
            $a=M("goods");
            $result=$a->where("typename='$typename'")->select();
            return $result;
        }
        function alertstate($state){
            $a=M("goods");
            $result=$a->save($state);
            return $result;
        }
        function delgoods($goodsid){
            $a=M("goods");
            $result=$a->where("goodsid=$goodsid")->delete();
            return $result;
        }
        function addgoods($data){
            $a=M("goods");
            $result=$a->add($data);
            return $result;
        }
        function alertgoods($data){
            $a=M("goods");
            $result=$a->save($data);
            return $result;
        }
        function query_goodsname(){
            $a=M("goods");
            $result=$a->getField("goodsname",true);
            return $result;
        }

}