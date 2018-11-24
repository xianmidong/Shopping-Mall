<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/4 0004
 * Time: 上午 10:05
 */

namespace Admin\Controller;


use Admin\Model\GoodsModel;
use Admin\Model\GoodstypeModel;
use Think\Controller;

class GoodsinfoController extends Controller
{
        function show_goods(){
            $q=new GoodstypeModel();
            $result1=$q->query_all_type();
            $g=new GoodsModel();
            $result2=$g->query_all();
            $this->assign("type",$result1);
            $this->assign("goods",$result2);
            $this->display();
        }
        function alert_state(){
            $state['goodsid']=I('goodsid');
            $state['isshow']=I("isshow");
            $state['isnew']=I("isnew");
            $q=new GoodsModel();
            $q->alertstate($state);
        }
        function del_goods(){
            $goodsid=I("goodsid");
            $q=new GoodsModel();
            $result=$q->delgoods($goodsid);
            if ($result){
                echo 1;
            }
        }
        function load($name){
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  =      './Public/goodsimg/';   // 上传单个文件
            $info   =   $upload->uploadOne($name);
            if ($info){
                $imginfo=$info['savepath'].$info['savename'];
            }
            return $imginfo;
        }

        function add_goods(){
            $img=$_FILES['goods_img'];
            $info['goodsimg']=$this->load($img);
            $info["goodsname"]=I("goods_name");
            $info['typename']=I("goods_type");
            $info['goodsprice']=I("goods_price");
            $info['goodssize']=I("goods_size");
            $info['goodsweight']=I('goods_weight');
            $info['goodsmaterial']=I("goods_material");
            $info['goodscount']=I("goods_count");
            $q=new GoodsModel();
            $result=$q->addgoods($info);
            if ($result){
                $this->redirect("show_goods");
            }
        }


        function alert_goods(){
            $img=$_FILES['goodsimg'];
            $ap  = $this->load($img);
            if ($ap){
                $data['goodsimg'] = $ap;
            }
            $data['goodsid']=I("goodsid");
            $data["goodsname"]=I("goodsname");
            $data["typename"]=I("choise_type");
            $data['goodsprice']=I("goodsprice");
            $data["goodssize"]=I("goodssize");
            $data["goodsmaterial"]=I("goodsmaterial");
            $data["goodsweight"]=I("goodsweight");
            $data["goodscount"]=I("goodscount");
            $q=new GoodsModel();
            $result=$q->alertgoods($data);
            if ($result){
                $this->redirect("show_goods");
            }
        }
}