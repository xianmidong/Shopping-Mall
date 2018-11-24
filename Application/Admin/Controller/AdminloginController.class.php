<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/29 0029
 * Time: 下午 7:01
 */

namespace Admin\Controller;
use Admin\Model\AdminModel;
use \Think\Controller;

class AdminloginController extends Controller
{
    function login(){
        $this->display("login");
    }
    function login_verify(){
        $adminname=$_POST['adminname'];
        $password=md5($_POST['password']);
        $q=new AdminModel();
        $result=$q->find_admin($adminname,$password);
        if ($result){
            $_SESSION['adminname']=$adminname;
            echo 1;
        }else{
            echo 0;
        }
    }


}