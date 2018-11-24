<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>新闻动态</title>
    <script src="/furniture/Public/js/jquery-1.9.1.js"></script>
    <script src="/furniture/Public/js/pop/popup.js"></script>
    <script src="/furniture/Public/bootstrap/js/bootstrap.js"></script>
    <script src="/furniture/Public/js/Homelogin/login_reg.js"></script>
    <link rel="stylesheet" href="/furniture/Public/css/pop/popup.css">
    <link rel="stylesheet" href="/furniture/Public/css/all.css" type="text/css">
    <link rel="stylesheet" href="/furniture/Public/css/news/news.css">

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
                <li><a href="news " style="color: #138b8b;border-bottom: 2px solid #138b8b">新闻动态</a></li>
                <li class="li"><?php if($username == null): ?><a>登录/注册</a>
                    <?php else: ?>欢迎您:<?php echo ($username); ?> <span class="out"> [退出]</span><?php endif; ?></li>
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
   <div class="news-main">
       <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="box ">
               <div class="img"><img src="/furniture/Public/upload-newsimg/<?php echo ($data["newsimg"]); ?>"/></div>
               <div class="text">
                   <div class="news-size magin-border">家装参观：<?php echo ($data["newstitle"]); ?></div>
                   <div class="magin-border"><?php echo ($data["newsdata"]); ?></div>
                   <div class="magin-border"><?php echo ($data["newscontent"]); ?></div>
               </div>
           </div><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
</body>
</html>