<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/9 0009
 * Time: 下午 4:24
 */

namespace Home\Model;


use Think\Model;

class newsModel extends Model
{
   function query_news(){
       $news=M('news');
       return $news->select();
   }
}