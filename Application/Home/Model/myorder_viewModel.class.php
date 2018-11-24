<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/13 0013
 * Time: 下午 3:59
 */

namespace Home\Model;


use Think\Model;

class myorder_viewModel extends Model
{
    function all($username){
        $myorder=M('myorder_view');
        $e= $myorder->where("username='".$username."'")->order("orderdate desc")->select();
        return $e;
    }
    function Unpaid($username){
        $myorder=M('myorder_view');
        $e= $myorder->where("username='".$username."'and orderstate=0")->order("orderdate desc")->select();
        return $e;
    }
    function Uncollected($username){
        $myorder=M('myorder_view');
        $e= $myorder->where("username='".$username."'and orderstate=1")->order("orderdate")->select();
        return $e;
    }
    function received($username){
        $myorder=M('myorder_view');
        $e= $myorder->where("username='".$username."'and orderstate=2")->order("orderdate")->select();
        return $e;
    }
}