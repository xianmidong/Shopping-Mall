<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/30 0030
 * Time: 下午 2:08
 */

namespace Admin\Model;


use Think\Model;

class goodsdetailModel extends Model
{
    function query_all(){
        $a=M("goodsdetail");
        $result=$a->select();
        return $result;
    }
    function deldetail($id){
        $a=M("goodsdetail");
        $result=$a->where("photoid=$id")->delete();
        return $result;
    }
    function adddetail($data){
        $a=M("goodsdetail");
        $result=$a->add($data);
        return $result;
    }
    function alertdetail($data){
        $a=M("goodsdetail");
        $result=$a->save($data);
        return $result;
    }
}