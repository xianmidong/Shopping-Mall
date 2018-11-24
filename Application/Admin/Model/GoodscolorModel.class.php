<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/30 0030
 * Time: 下午 2:04
 */

namespace Admin\Model;


use Think\Model;

class GoodscolorModel extends Model
{

    //所有
    function querycolor_all(){
        $color=M('goodscolor');
        $re=$color->select();
        return $re;
    }
    //添加
     function addcolor($info){
        $color=M('goodscolor');
        return $color->add($info);
     }
     //删除
    function delgoodscolor($colorid){
        $color=M('goodscolor');
        $result=$color->where("colorid=".$colorid)->delete();
        return $result;
    }
    //修改
    function alertgoodscolor($data){
        $color=M('goodscolor');
        $result=$color->save($data);
        return $result;
    }
}