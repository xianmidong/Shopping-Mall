<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/30 0030
 * Time: 上午 9:29
 */

namespace Admin\Controller;


use Think\Controller;

class BackindexController extends Controller

{
      //展示后台首页
       function back_index(){
           if ($_SESSION['adminname']==""){
               $this->display("Adminlogin/login");
           }else{
               $this->display();
           }
       }
       //后台退出功能
      function logout(){
        session_destroy();
        $this->redirect("Adminlogin/login");
     }
}