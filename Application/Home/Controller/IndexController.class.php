<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/30 0030
 * Time: 下午 2:32
 */
namespace Home\Controller;
use Home\Model\addressModel;
use Home\Model\cartModel;
use Home\Model\goodscolorModel;
use Home\Model\goodsdetailModel;
use Home\Model\goodsModel;
use Home\Model\goodstypeModel;
use Home\Model\myorder_view;
use Home\Model\myorder_viewModel;
use Home\Model\newsModel;
use Home\Model\orderdetailModel;
use Home\Model\orderModel;
use Home\Model\personalModel;
use Home\Model\provincialModel;
use Home\Model\userinfoModel;
use Think\Controller;

class IndexController extends Controller
{      //展示首页
      function index(){
          $this->assign("username", $_SESSION['username']);
          $q=new goodsModel();   //检索所有商品信息
          $result=$q->query_all_goods();
          $newgoods=$q->querynewgoods();
          $this->assign("new",$newgoods);
          $this->assign("info",$result);
          $this->display();
      }
      //登录判断
      function login_check(){
          $username=I('username');
          $pwd=I('userpwd');
          $userpwd=md5($pwd);
          $Muser=new userinfoModel();
          $re=$Muser->check_namepwd($username,$userpwd);
          if($re){
              $_SESSION['username']=$username;
              $q=new cartModel();
              $count=$q->count_num($_SESSION["username"]);
              $_SESSION['goodscount']=$count;
              echo "ok";
          }else{
              echo "error";
          }
      }
      //展示在线商城
      function online(){
          $q=new goodsModel();
          $typename=I("typename");
         if (I("typename")){
             $result=$q->queryby_goodstype($typename);
          }else{
              $result=$q->query_all_goods();
         }
         $type= new goodstypeModel();
         $re=$type->typeall();
         $this->assign('datas',$re);//商品类型
         $this->assign("goods",$result);
         $this->assign("username", $_SESSION['username']);
         $this->display("online");
      }
      //展示商品详情
    function goodsdetail(){
        $goodsname=I("goodsname");
        $color=new goodscolorModel();
        $colorimg=$color->queryimg($goodsname);
        $this->assign("ck",$colorimg);//商品颜色
        $type= new goodstypeModel();
        $re=$type->typeall();
        $this->assign('datas',$re);//商品类别
        $detail=new goodsdetailModel();
        $detail_img=$detail->querydetail($goodsname);
        $this->assign("photo",$detail_img);//商品细节图片
        $goods=new goodsModel();
        $goodsinfo=$goods->querygoodsbyname($goodsname);
        $this->assign("info",$goodsinfo);//通过商品名取得商品信息
        $this->assign("username", $_SESSION['username']);
        $this->display();
    }
      //展示关于我们
     function  about(){
         $this->assign("username", $_SESSION['username']);
        $this->display();
     }
     //展示联系我们
    function contact(){
        $this->assign("username", $_SESSION['username']);
        $this->display();
    }
    //展示新闻
    function news(){
         $news= new newsModel();
         $re=$news->query_news();
         $this->assign('news',$re);
        $this->assign("username", $_SESSION['username']);
        $this->display();
    }
   //展示购物车
    function shoppingcar(){
          $q=new cartModel();
          $result=$q->query_allby_user($_SESSION['username']);
          $this->assign("car",$result);
          $this->assign("username", $_SESSION['username']);
          $this->display();
    }

    function has_login(){
          if($_SESSION['username']){
              echo 1;
          }
          else{
              echo 0;
          }

    }
    //退出
    function logout(){
          session_destroy();
          $this->redirect("index");
    }

    //个人信息
    function personal(){
          $username=$_SESSION['username'];
          $user=new userinfoModel();
          $userdata=$user->userall($username);
          $userid=$userdata['userid'];
        //查询地址
        $address=new addressModel();
        $re=$address->all($userid);
        $this->assign('datas',$re);
        //查询省
        $provicial=new provincialModel();
        $result=$provicial->queryall();
        $this->assign('provicial', $result);
        //根据名字查询用户信息
        $q=new personalModel();
        $userinfo=$q->query_userinfo($_SESSION['username']);
        $this->assign("info",$userinfo);
        $this->assign("username", $_SESSION['username']);
        //显示订单
        $order=new myorder_viewModel();
        $orderdata=$order->all($username);
        $this->assign('order',$orderdata);

        $Unpaid=$order->Unpaid($username);
        $this->assign('Unpaid',$Unpaid);

        $Unpaid=$order->Uncollected($username);
        $this->assign('Uncollected',$Unpaid);

        $Unpaid=$order->received($username);
        $this->assign('received',$Unpaid);

        $this->display();
    }

    //修改
    function update(){
          $data["orderstate"]=I('orderstate');
          $data["orderid"]=I("orderid");
          $u=new orderModel();
          $re=$u->update($data);
          if($re){
            echo 1;
          }
    }

    //显示城市
    public function getcity(){
        $pid=$_POST['pid'];
        $Mcity=D("city");
        $citydata=$Mcity->where("pid = '".$pid."'")->select();
        echo json_encode($citydata);
    }
    //添加地址
    function add_address(){
        $username=$_SESSION['username'];
        $user=new userinfoModel();
        $userdata=$user->userall($username);
        $userid=$userdata['userid'];
        $data['userid']=$userid;
        $data['consignee']=I('consignee');
        $data['telphone']=I('telphone');
        $data['address']=I('address');
        $myadd=new addressModel();
        $re=$myadd->add_addre($data);
        if($re){
            echo $re;
        }
    }
  //删除
    function del_address(){
          $addressid=I('addressid');
          $address=new addressModel();
          $re=$address->del_addre($addressid);
          if($re){
              echo 1;
          }
    }
    //封装上传函数
    function load($name){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =      './Public/personal_img/';   // 上传单个文件
        $info   =   $upload->uploadOne($name);
        if ($info){
            $imginfo=$info['savepath'].$info['savename'];
        }
        return $imginfo;
    }
    //修改个人信息
    function alert_info(){
        $img=$_FILES['personal_img'];
        $is_have=$this->load($img);
        if ($is_have){
            $arr['photo']=$is_have;
        }
        $arr['sex']=I("sex");
        $arr["telphone"]=I("telphone");
        $arr["email"]=I("email");
        $arr["personalname"]=I("person");
        $q=new personalModel();
        $result=$q->alertinfo($arr["personalname"],$arr);
        if ($result){
            $this->redirect("personal");
        }
    }
    //添加商品到购物车
    function add_to_cart(){
           $arr["username"]=I("username");
           $arr["goodsid"]=I("goodsid");
           $arr['goodsimg']=I("goodsimg");
           $arr["goodsname"]=I("goodsname");
           $arr["goodscolor"]=I("goodscolor");
           $arr["goodsprice"]=I("goodsprice");
           $arr["goodscount"]=I("goodscount");
           $arr["sum"]=I('sum');
           $q=new cartModel();
           $result=$q->addtocar($arr);
           if ($result){
               echo 1;
           }
    }
    //从购物车中删除商品
    function del_fromcart(){
          $cartid=I("cartid");
          $q=new cartModel();
          $result=$q->del_from_car($cartid);
          if ($result){
              echo 1;
          }

    }
    //批量删除
    function del_all(){
          $id=I("ids");
          $ids=implode(",",$id);
          $q=new cartModel();
          $result=$q->delall($ids);
          if ($result){
              echo 1;
          }
    }
    //提交订单
    function submit_order(){
          //查找地址信息
        $a=new addressModel();
        $result=$a->query_view($_SESSION['username']);
        $this->assign("address",$result);
        //查询下单的商品
        $cartid=I("id");
        $arr["cartid"]=array("in",$cartid);
        $allmoney=I("allmoney");
        $allcount=I("allnum");
        $q=new cartModel();
        $goods=$q->select_order_goods($arr);
        $_SESSION['detail'] = $goods;
        $this->assign("num",$allcount);
        $this->assign("money",$allmoney);
        $this->assign("order",$goods);
        $this->display();
    }

    function write_to_order(){
          //查找用户电话号码
        $u=new userinfoModel();
        $tel=$u->findtel($_SESSION['username']);
        //将下单的商品写入订单表中
        $data["username"]=$_SESSION['username'];
        $now_time=$this->orderid();
        $data["orderid"]=$now_time;
        $data["orderdate"]=$this->date_order();
        $data["addressid"]=I("address_id");
        $data["total"]=I("total");
        $data["telphone"]=$tel;
        $data["ordersum"]=I("sum");
        $f=new orderdetailModel();
        if ($_SESSION["detail"]){
        foreach ($_SESSION['detail'] as $i=>$v){
            $_SESSION['detail'][$i]['orderid'] =   $data["orderid"];
        }
        $f->add_info($_SESSION["detail"]);
        }else{
            $arr["orderid"]=$data['orderid'];
            $arr['goodsid']=$_SESSION['gid'];
            $arr["goodscount"]=$_SESSION["gcount"];
            $f->addinfo($arr);
        }
        $o=new orderModel();
        $insert=$o->addorder($data);
        if ($insert){
            echo $now_time;
        }
    }
    //更新购物车
    function update_cart(){
          $arr["cartid"]=I("id");
          $arr["goodscount"]=I("number");
          $arr["sum"]=I("count");
          $a=new cartModel();
          $result=$a->updatacar($arr);
          if ($result){
              echo 1;
          }
    }
    //展示更多
    function more(){
        $q=new goodsModel();   //检索所有商品信息
        $newgoods=$q->newgoods();
        $this->assign("new",$newgoods);
        $this->display();
    }

    //订单id生成
    function orderid(){
          $time=time();
          $date=date("YmdHis");
          return $date.$time;
    }
    //订单时间生成
    function date_order(){
          $date=date("Y-m-d H:i:s");
          return $date;
    }
    //修改订单状态
    function alert_state(){
          $orderid=I("orderid");
          $arr["orderid"]=$orderid;
          $arr["orderstate"]=1;
          $a=new orderModel();
          $result=$a->alertstate($arr);
          if ($result){
              echo 1;
          }
    }

    //立即购买
    function buy_now(){
          //显示地址信息
        $a=new addressModel();
        $result=$a->query_view($_SESSION['username']);
        $this->assign("address",$result);
        //获取商品图片
        $goodsid=I("goodsid");
        $_SESSION['gid']=$goodsid;
        $q=new goodsModel();
        $img=$q->query_img($goodsid);
        $this->assign("img",$img);
        $goodsname=I("goodsname");
        $goodsprice=I("goodsprice");
        $goodscount=I("goodscount");
        $_SESSION["gcount"]=$goodscount;
        $sum=I("summoney");
        $this->assign("goodsname",$goodsname);
        $this->assign("goodsprice",$goodsprice);
        $this->assign("goodscount",$goodscount);
        $this->assign("sum",$sum);
        $this->display();
    }


}