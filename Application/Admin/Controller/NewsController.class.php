<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/9 0009
 * Time: 下午 2:26
 */

namespace Admin\Controller;


use Admin\Model\NewsModel;
use Think\Controller;

class NewsController extends Controller
{
    //展示新闻动态数据
    function news()
    {
        $q=new NewsModel();
        $re=$q->query_news();
        $this->assign('all',$re);
        $this->display();
    }
    //添加新闻
    function add_news(){
        $img=$_FILES["newsimg"];
        $info["newstitle"]=I("newstitle");
        $info["newscontent"]=I("newscontent");
        $info["newsimg"]=$this->load($img);
        $info["newsdata"]=date('Y-m-d');
        $q=new NewsModel();
        $result=$q->addnews($info);
        if ($result){
            $this->redirect("news");
        }
    }
    //上传图片
    function load($name){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =      './Public/upload-newsimg/';   // 上传单个文件
        $info   =   $upload->uploadOne($name);
        if ($info){
            $imginfo=$info['savepath'].$info['savename'];
        }
        return $imginfo;
    }
    //删除
    function del_newsid(){
            $newsid=I("newsid");
            $q=new NewsModel();
            $result=$q->delnews($newsid);
            if ($result){
                echo 1;
            }
    }
    //编辑
   function alert_news(){
           $data["newsid"]=I("newsid");
           $data["newstitle"]=I("newstitle");
           $data["newscontent"]=I("newscontent");
           $data["newsdata"]=date('Y-m-d');
           $img=$_FILES['newsimg'];
           $imginfo=$this->load($img);
           if ($imginfo){
               $data["newsimg"]=$imginfo;
           }
           $q=new NewsModel();
           $result=$q->alertnews($data);
           if ($result){
               $this->redirect("news");
           }

       }
}