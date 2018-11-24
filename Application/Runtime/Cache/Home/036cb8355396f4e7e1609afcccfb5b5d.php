<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>提交订单</title>
    <script src="/furniture/Public/js/jquery-1.9.1.js"></script>
    <script src="/furniture/Public/js/pop/popup.js"></script>
    <script src="/furniture/Public/bootstrap/js/bootstrap.js"></script>
    <script src="/furniture/Public/js/Homelogin/login_reg.js"></script>
    <link rel="stylesheet" href="/furniture/Public/css/pop/popup.css">
    <link rel="stylesheet" href="/furniture/Public/css/all.css" type="text/css">
    <link rel="stylesheet" href="/furniture/Public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/furniture/Public/order/submit_order.css">
    <script src="/furniture/Public/js/order/submit_order.js"></script>

</head>
<body>
<div class="top">
    <div class="bananer">
        <div class="ba-img"> <img src="/furniture/Public/images/news/logo.png"/></div>
        <div class="nav">
            <ul>
                <li><a  href="index" >首页</a></li>
                <li><a href="about">关于我们</a></li>
                <li><a href="online">在线商城</a></li>
                <li><a href="contact">联系我们</a></li>
                <li><a href="news ">新闻动态</a></li>
                <!--<li class="li"><?php if($username == null): ?><a>登录/注册</a>-->
                    <!--<?php else: ?>欢迎您:<?php echo ($username); ?> <span class="out"> [退出]</span>-->
                <!--<?php endif; ?></li>-->
                <li></li>
            </ul>
        </div>
        <div class="top_icon">
            <span class="search"><img src="/furniture/Public/images/search.png"/></span>
            <span class="login"><img src="/furniture/Public/images/login.png"/></span>
            <span class="cart_icon">
                <img src="/furniture/Public/images/cart_icon.png"/>
                 <div id="count"><?php echo (session('goodscount')); ?></div>
            </span>

        </div>
    </div>
    <div class="login_reg">
        <div class="login_box">
            <img src="/furniture/Public/images/loginimg/X.png"/>
            <div class="btn">
                <span >登录</span>
                <span  class="magin">注册</span>
            </div>
            <div class="log" >
                <div class="user a">
                    <input type="text" placeholder="请输入用户名">
                    <img src="/furniture/Public/images/loginimg/user.png"/>
                </div>
                <div class="user b">
                    <input  type="password" placeholder="请输入密码">
                    <img src="/furniture/Public/images/loginimg/pwd.png"/>
                    <div class="block"><img src="/furniture/Public/images/loginimg/block.png"/></div>
                </div>
                <button class="logbtn">登录</button>

            </div>


            <div class="reg">
                <div class="user c">
                    <input type="text" placeholder="请输入用户名" required>
                    <span style="position: absolute;top: 10px;right: -110px;color: red;font-size: 12px;display: none">该用户名已被注册!</span>
                    <img src="/furniture/Public/images/loginimg/user.png"/>
                </div>

                <div class="user d">
                    <input  type="password" placeholder="请输入6-32位数字或字母" required>
                    <img src="/furniture/Public/images/loginimg/pwd.png"/>
                    <div class="block"><img src="/furniture/Public/images/loginimg/block.png"/></div>
                </div>
                <div class="user">
                    <input type="tel" placeholder="请输入手机号" required>
                    <span style="position: absolute;top: 10px;right: -110px;color: red;font-size: 12px;display: none" >该手机号已被注册!</span>
                    <img src="/furniture/Public/images/regimg/phone_icon.png"/>
                </div>

                <div class="verfy">
                     <span class="text">
                         <input type="text" placeholder="请输入验证码" required>
                         <img src="/furniture/Public/images/regimg/verfy_icon.png"/></span>
                    <button class="send">发送验证码</button>
                </div>
                <button class="regbtn">注册</button>

                <div class="checkbox">
                    <div class="circle">
                        <input type="checkbox" class="a" value="1"/>
                        <span>我已阅读并同意 <a href="" style="color: rgb(19,139,139)">《一方家居服务条款》</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="order_main">

   <div class="text">确认订单信息</div>
   <div class="consign_info">
     <div class="t">收货人信息</div>
       <?php if(is_array($address)): $i = 0; $__LIST__ = $address;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="address-data">
               <div class="check"><input name="addressid" type="radio"  data-tit="<?php echo ($vo["addressid"]); ?>"></div>
               <div class="addre">
                   <span><?php echo ($vo["consignee"]); ?></span>
                   <span style="padding: 0 10px 0 10px"><?php echo ($vo["telphone"]); ?></span>
                   <span><?php echo ($vo["address"]); ?></span>
               </div>
           </div><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
   <div class="order_info">
       <div class="t">商品清单</div>
       <div class="goods">
           <span style="width: 45%">商品</span>
           <span style="width: 20%">单价</span>
           <span style="width: 12%">数量</span>
           <span style="width: 20%">小计</span>
       </div>
       <?php if(is_array($order)): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="order_box">
               <div style="width: 45%">
                   <span class="goodsimg"><img src="<?php echo ($vo["goodsimg"]); ?>"/></span>
                   <span class="goodsname "><?php echo ($vo["goodsname"]); ?></span>
               </div>
               <div style="width: 20%">￥<span class=""><?php echo ($vo["goodsprice"]); ?></span></div>
               <div style="width: 12%" class="goodscount"><span class=""><?php echo ($vo["goodscount"]); ?></span></div>
               <div style="width: 20%">￥<span class=""><?php echo ($vo["sum"]); ?></span></div>
               <span class="catrid" style="display: none"><?php echo ($vo["cartid"]); ?></span>
               <span class="goodsid" style="display: none"><?php echo ($vo["goodsid"]); ?></span>
           </div><?php endforeach; endif; else: echo "" ;endif; ?>


   </div>
   <div class="order_footer">
    <div class="count">总件数:<span><?php echo ($num?$num:'0'); ?></span></div>
    <div class="total">总金额(￥):<span><?php echo ($money?$money:'0'); ?></span></div>
    <button id="submit_order" >提交订单</button>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="pay">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">支付</h4>
            </div>
            <div class="modal-body">
               <div class="payment"><img src="/furniture/Public/images/erweima.png"/></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消支付</button>
                <button type="button" class="btn btn-primary">确认支付</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="payover" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" style="text-align: center"><h3>你已完成付款，三秒后跳到商城页面!</h3></div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>


</body>
</html>