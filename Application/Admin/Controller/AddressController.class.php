<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/12 0012
 * Time: 上午 8:58
 */

namespace Admin\Controller;


use Admin\Model\Address_viewModel;
use Admin\Model\AddressModel;
use Think\Controller;
use Think\Model;

class AddressController extends Controller
{
   function address(){
      $Madd= new Address_viewModel();
      $re=$Madd->queryaddress();
      $this->assign('datas',$re);
       $this->display();


   }
}