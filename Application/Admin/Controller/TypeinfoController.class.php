<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/31 0031
 * Time: 上午 10:39
 */

namespace Admin\Controller;


use Admin\Model\GoodsModel;
use Admin\Model\GoodstypeModel;
use Think\Controller;

class TypeinfoController extends Controller
{

    function show_type(){
        $Mtype=new GoodstypeModel();
        $data=$Mtype->query_all_type();
        $this->assign('datas',$data);
        $this->display();
    }
    function add_type(){
        $date['typename']=$_GET['typename'];
        $date['typenote']=$_GET['typenote'];
        $m=new GoodstypeModel();
        $is_have=$m->querytypename($_GET['typename']);
        if ($is_have){
            echo 0;
        }else{
            $result=$m->addtype($date);
            if ($result){
                echo 1;
            }else{
                echo 2;
            }
        }
    }
    function queryGoodsbytypename(){
        $type_name=I("typename");
        $d=new GoodsModel();
        $result=$d->queryby_typename($type_name);
        if ($result){
            echo 1;
        }else{
            echo 0;
        }
    }

    function del_type(){
        $type_id=I("typeid");
        $q=new GoodstypeModel();
        $result=$q->deltype($type_id);
        if ($result){
            echo 1;
        }
    }

    function alert_type(){
        $data['typename']=I('typename');
        $data['typenote']=I('typenote');
        $data['typeid']=I('typeid');
        $q=new GoodstypeModel();
        $q->alerttype($data);
        $this->redirect("show_type");
    }
}