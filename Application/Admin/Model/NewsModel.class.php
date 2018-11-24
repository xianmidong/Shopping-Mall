<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/30 0030
 * Time: 下午 2:07
 */

namespace Admin\Model;


use Think\Model;

class NewsModel extends Model
{
    function query_news(){
        $a=M("news");
        $result=$a->select();
        return $result;
    }
    //添加
    function addnews($data){
        $a=M("news");
        $result=$a->add($data);
        return $result;
    }
    //删除
    function delnews($newsid){
        $news=M('news');
        $result=$news->where("newsid=".$newsid)->delete();
        return $result;
    }
    //编辑
    function alertnews($data){
        $news=M('news');
        $result=$news->save($data);
        return $result;
    }

}