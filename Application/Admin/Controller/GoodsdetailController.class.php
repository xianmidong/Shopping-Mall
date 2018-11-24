<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/7 0007
 * Time: 下午 1:45
 */

namespace Admin\Controller;


use Admin\Model\goodsdetailModel;
use Admin\Model\GoodsModel;
use Think\Controller;

class GoodsdetailController extends Controller
{
    function show_detail(){
            $a=new GoodsModel();
            $result=$a->query_all();
            $b=new goodsdetailModel();
            $console=$b->query_all();
            $this->assign("all",$console);
            $this->assign("goodsname",$result);
            $this->display();
        }
    function load($name){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =      './Public/goods_detail_img/';   // 上传单个文件
        $info   =   $upload->uploadOne($name);
        if ($info){
            $imginfo=$info['savepath'].$info['savename'];
        }
        return $imginfo;
    }

    function del_detail(){
            $img_id=I("detailid");
            $q=new goodsdetailModel();
            $result=$q->deldetail($img_id);
            if ($result){
                echo 1;
            }
    }
    function add_detail(){
            $img=$_FILES["detail_img"];
           $info["goodsname"]=I("goods_name");
           $info["photoimg"]=$this->load($img);
           $q=new goodsdetailModel();
           $result=$q->adddetail($info);
           if ($result){
               $this->redirect("show_detail");
           }

    }
    function alert_detail(){
            $data["photoid"]=I("photo_id");
            $img=$_FILES['img'];
            $imginfo=$this->load($img);
            if ($imginfo){
                $data["photoimg"]=$imginfo;
            }else{
                $this->redirect("show_detail");
                return;
            }
            $q=new goodsdetailModel();
            $result=$q->alertdetail($data);
            if ($result){
                $this->redirect("show_detail");
            }

    }

}