<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/7 0007
 * Time: 下午 4:08
 */

namespace Admin\Controller;


use Admin\Model\GoodscolorModel;
use Admin\Model\GoodsModel;
use Think\Controller;

class goodscolorController extends Controller
{
    //展示颜色数据
    function  show_goodscolor(){
        //商品颜色数据
        $color=new GoodscolorModel();
        $colorarr=$color->querycolor_all();
        $this->assign('colordata',$colorarr);

        //商品名称
        $goods=new GoodsModel();
        $re=$goods->query_all();
        $this->assign('goodsname',$re);
        $this->display();
    }
    //图片上传
    function load($name){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =      './Public/goods_colorimg/';   // 上传单个文件
        $info   =   $upload->uploadOne($name);
        if ($info){
            $imginfo=$info['savepath'].$info['savename'];
        }
        return $imginfo;
    }
    //添加
    function add_goodscolor(){
        $img=$_FILES['goods_img'];
        $info['goodsimg']=$this->load($img);
        $info["goodsname"]=I("goodsname");
        $info['goodscolor']=I("color");
        $q=new GoodscolorModel();
        $result=$q->addcolor($info);
        if ($result){
            $this->redirect("show_goodscolor");
        }
    }
    //删除
    function del_goodscolor(){
        $colorid=I("colorid");
        $q=new GoodscolorModel();
        $result=$q->delgoodscolor($colorid);
        if ($result){
            echo 1;
        }
    }
     //修改
    function alert_goodscolor(){
        $img=$_FILES['goods_img'];
        $ap  = $this->load($img);
        if ($ap){
            $data['goodsimg'] = $ap;
        }
        $data['colorid']=I("goodsid");

        $data["goodsname"]=I("goodsname");
        $data["goodscolor"]=I("color");
        $q=new GoodscolorModel();
        $result=$q->alertgoodscolor($data);
        if ($result){
            $this->redirect("show_goodscolor");
        }
    }
}