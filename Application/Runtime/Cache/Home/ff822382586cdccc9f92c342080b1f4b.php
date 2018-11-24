<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>商品详情</title>
    <script src="/furniture/Public/js/jquery-1.9.1.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="/furniture/Public/js/pop/popup.js"></script>
    <script src="/furniture/Public/bootstrap/js/bootstrap.js"></script>
    <script src="/furniture/Public/js/Homelogin/login_reg.js"></script>
    <script src="/furniture/Public/lunbo/partialviewslider.js"></script>
    <link rel="stylesheet" href="/furniture/Public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/furniture/Public/css/pop/popup.css">
    <link rel="stylesheet" href="/furniture/Public/css/all.css" type="text/css">
    <script src="/furniture/Public/js/goodsdetail/goodsdetail.js"></script>
    <link rel="stylesheet" href="/furniture/Public/lunbo/partialviewslider.css">
    <link rel="stylesheet" href="/furniture/Public/css/goodsdetail/goodsdetail.css">


</head>
<body>
<a name="mytop"></a>
<div class="top">
    <div class="bananer">
        <div class="ba-img"> <img src="/furniture/Public/images/news/logo.png"/></div>
        <div class="nav">
            <ul>
                <li><a  href="index" >首页</a></li>
                <li><a href="about">关于我们</a></li>
                <li><a href="online" style="color: #138b8b;border-bottom: 2px solid #138b8b">在线商城</a></li>
                <li><a href="contact">联系我们</a></li>
                <li><a href="news " >新闻动态</a></li>
                <li class="li"><?php if($username == null): ?><a>登录/注册</a>
                    <?php else: ?>欢迎您:<a class="name"><?php echo ($username); ?></a> <span class="out"> [退出]</span><?php endif; ?></li>
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
<div class="type-nav">
<div class="myli">
 <ul class="color">
     <li ><a href="online">全部</a></li>
     <?php if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li><a href="online?typename=<?php echo ($data["typename"]); ?>"><?php echo ($data["typename"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
 </ul>
</div>
</div>
<div class="detail-main">
   <div class="m-main">
       <div class="title color">
           <span>在线商城</span>
           >
           <span><?php echo ($info['typename']); ?></span>
           >
           <span><?php echo ($info['goodsname']); ?></span>
       </div>
       <div class="conter">
           <div class="imgbox">
               <ul id="partial-view">
                   <?php if(is_array($ck)): $i = 0; $__LIST__ = $ck;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><img src="/furniture/Public/goods_colorimg/<?php echo ($vo["goodsimg"]); ?>"></li><?php endforeach; endif; else: echo "" ;endif; ?>

               </ul>
           </div>
           <div class="textbox" >
               <div class="goods-id" style="display: none"><?php echo ($info['goodsid']); ?></div>
              <div class="goodsname color"><?php echo ($info['goodsname']); ?></div>
              <div class="price color">￥<span><?php echo ($info['goodsprice']); ?></span></div>
              <div class="three"><img src="/furniture/Public/images/ensure.png"/></div>
              <div class="other color">
                  <div>尺      寸：<span><?php echo ($info['goodssize']); ?></span></div>
                  <div>重      量：<span><?php echo ($info['goodsweight']); ?></span><span> kg</span></div>
                  <div>材      料：<span><?php echo ($info['goodsmaterial']); ?></span></div>
              </div>
              <div class="colorblock color">
                 <span >颜色：</span>
                  <span class="kind">
                      <?php if(is_array($ck)): $i = 0; $__LIST__ = $ck;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><span >
                          <span class="in-circle" style="background-color:<?php echo ($vo["goodscolor"]); ?>"></span>
                      </span ><?php endforeach; endif; else: echo "" ;endif; ?>
                  </span>
              </div>
              <div class="count color">
                  <div>数量：</div>
                  <div>
                      <span id="plus">＋</span>
                      <span id="count-text">1</span>
                      <span id="sub">－</span>
                  </div>
              </div>
              <div class="paydiv">
                  <div class="addcart">加入购物车</div>
                  <div class="nowpay">立即购买</div>
              </div>
           </div>
       </div>
   </div>
</div>
<div class="goodsshow">
    <div class="showtitle color">
        <p>产品展示</p>
        <p>PRODUCT DISPLAY</p>
    </div>
    <div class="show-detailimg">
        <img src="/furniture/Public/goods_detail_img/<?php echo ($photo['photoimg']); ?>"/>
    </div>
</div>
<div class="detail-footer">
    <div class="footer-title color">
        <p>常见问题</p>
        <p>Q & A</p>
    </div>
    <div class="Answer">
        <div class="left">
            <div class="one bottom">
                <p >Q：请问有现货吗？</p>
                <p class="color">A：大部分产品是没有现货的，正常发货时
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 间为45天，部分现货的产品有标注。</p>
            </div>
            <div class="one">
                <p >Q：请问入门安装吗？</p>
                <p class="color">A：没有喔，需要自己动手搞定，随包有配
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 送工具，几分钟就ok。</p>
            </div>
        </div>
        <div class="right">
            <div class="one rightbottom">
                <p>Q：请问包邮上楼吗？</p>
                <p class="color">A：是的，顺丰包邮，除非您所居住的小区
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 没有电梯且楼层在三层以上，会收取少
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 量费用。</p>
            </div>
            <div class="one">
                <p >Q：请问是七天无理由退换货吗？</p>
                <p class="color">A：不是，非质量问题不接受七天无理由退
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 换。大件家具包装专业，拆装后无法确
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 保运回途中不受损伤，请谨慎下单。</p>
            </div>
        </div>
    </div>
</div>
<div class="backtop">
    <a class="backbtn" href="#mytop">返回顶部</a>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" style="text-align: center"><h3>商品已成功添加到购物车</h3></div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal -->
</div>
</body>
</html>