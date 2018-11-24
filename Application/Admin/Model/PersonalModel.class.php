<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/2 0002
 * Time: 下午 1:49
 */

namespace Admin\Model;
use Think\Model;

class PersonalModel extends Model
{
        function add_info($data){
            $a=M("personal");
            $result=$a->add($data);
            return $result;
        }
}