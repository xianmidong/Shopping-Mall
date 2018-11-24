<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>购物车</title>
    <script src="/furniture/Public/js/jquery-1.9.1.js"></script>
    <script src="/furniture/Public/bootstrap/js/bootstrap.js"></script>
    <script src="/furniture/Public/icheck/icheck.js"></script>
    <link rel="stylesheet" href="/furniture/Public/bootstrap/css/bootstrap.css">
    <script src="/furniture/Public/js/page/paginathing.js"></script>
    <script src="/furniture/Public/js/pop/popup.js"></script>
    <script src="/furniture/Public/js/shoppingcar/car.js"></script>
    <link rel="stylesheet" href="/furniture/Public/icheck/_all.css">
    <link rel="stylesheet" href="/furniture/Public/icheck/green.css">
    <link rel="stylesheet" href="/furniture/Public/css/pop/popup.css">
    <link rel="stylesheet" href="/furniture/Public/css/all.css">
    <script src="/furniture/Public/js/Homelogin/login_reg.js"></script>
    <link rel="stylesheet" href="/furniture/Public/css/shoppingcar/car.css">
</head>
<body>
<div class="top">
    <div class="bananer">
        <div class="nav">
            <ul>
                <li><a  href="index" >首页</a></li>
                <li><a href="about">关于我们</a></li>
                <li><a href="online">在线商城</a></li>
                <li><a href="contact">联系我们</a></li>
                <li><a href="news">新闻动态</a></li>
                <li class="li"><?php if($username == null): ?><a>登录/注册</a>
                    <?php else: ?>欢迎您:<?php echo ($username); ?> <span class="out"> [退出]</span><?php endif; ?></li>
            </ul>
        </div>
        <div class="top_icon">
            <span class="search"><img src="/furniture/Public/images/search.png"/></span>
            <span class="login"><img src="/furniture/Public/images/login.png"/></span>
            <span class="cart_icon">
               <img src="/furniture/Public/images/cart_icon.png" title="购物车"/>
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
<!--头部结束-->
<!--购物车内容-->
<div style="height: 1px;"></div>
<div class="box">
    <table class="table table-hover">
        <thead>
            <tr>
            <th><input type="radio" class="all_choise"><span class="allchoise">全选</span></th>
            <th>商品信息</th>
            <th>单价</th>
            <th>数量</th>
            <th>小计</th>
            <th>操作</th>
            </tr>
        </thead>
        <tbody>
        <?php if(is_array($car)): $i = 0; $__LIST__ = $car;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                <td><input type="radio" class="alone_choise"></td>
                <td style="display: none" class="cart_id"><?php echo ($vo["cartid"]); ?></td>
                <td class="goods_info">
                    <img src="<?php echo ($vo["goodsimg"]); ?>">
                    <div class="info">
                        <span class="name"><?php echo ($vo["goodsname"]); ?></span>
                        <span class="color" style="background-color: <?php echo ($vo["goodscolor"]); ?>"></span>
                    </div>
                </td>
                <td>￥<span><?php echo ($vo["goodsprice"]); ?></span></td>
                <td class="op">
                    <span class="plus">＋</span>
                    <span  class="num"><?php echo ($vo["goodscount"]); ?></span>
                    <span class="sub">&minus;</span>
                </td>
                <td class="little_count">￥<span><?php echo ($vo["sum"]); ?></span></td>
                <td class="del">删除</td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>


        </tbody>
    </table>
</div>
<div class="final">
<span class="has_choise">已选 (<span> 0</span>)</span>
<span class="del_all">批量删除</span>
    <span class="sum">总计: &nbsp;&nbsp;￥<a>0</a></span>
    <span class="acount">下单</span>
</div>

</body>
</html>