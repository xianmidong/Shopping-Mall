<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>在线商城</title>
    <script src="/furniture/Public/js/jquery-1.9.1.js"></script>
    <script src="/furniture/Public/js/pop/popup.js"></script>
    <script src="/furniture/Public/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="/furniture/Public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/furniture/Public/css/pop/popup.css">
    <link rel="stylesheet" href="/furniture/Public/css/all.css" type="text/css">
    <link rel="stylesheet" href="/furniture/Public/css/online.css">
    <script src="/furniture/Public/js/page/paginathing.js"></script>
    <script src="/furniture/Public/js/Homelogin/login_reg.js"></script>
    <script src="/furniture/Public/js/online/online.js"></script>



</head>
<body>
<div class="warper clear">
    <a name="back"></a>
    <!--头部-->
    <div class="top">
        <div class="bananer"><img src="/furniture/Public/images/online-Bananer.png"/>
            <div class="nav">
                <ul>
                    <li><a  href="index" >首页</a></li>
                    <li><a href="about">关于我们</a></li>
                    <li><a href="online" style="color: #138b8b;border-bottom: 2px solid #138b8b">在线商城</a></li>
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
                <img src="/furniture/Public/images/cart_icon.png"/>
                 <div id="count"><?php echo (session('goodscount')); ?></div>
            </span>

            </div>
            <button>立即购买</button>
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
    <!--主体-->
    <div  class="main ">
        <!--展示商品区-->
        <div class="mytype ">
            <div class="all" ><a href="online">全部</a></div>
            <?php if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="all" ><a href="online?typename=<?php echo ($data["typename"]); ?>"><?php echo ($data["typename"]); ?></a></div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <div class="main_footer">
            <ul class="list-group">
                <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <div class="goods_box " title="点击查看详情">
                            <div class="goods_imgbox">
                                <a href="goodsdetail?goodsname=<?php echo ($vo["goodsname"]); ?>"><img src="/furniture/Public/goodsimg/<?php echo ($vo["goodsimg"]); ?>"/></a>
                                <!--<div class="mask"><a class="a" href="">点击查看详情</a></div>-->
                            </div>
                            <div class="goods_text">
                                <p><?php echo ($vo["goodsname"]); ?></p>
                                <p> ¥ <span><?php echo ($vo["goodsprice"]); ?></span></p>
                            </div>
                        </div>


                </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
    <!--主体结束-->
    <div class="back "><a href="#back"><img src="/furniture/Public/images/fanhui.png"/></a></div>

    <div class="footer ">
        <div class="one"><img src="/furniture/Public/images/footer.png"/></div>
        <div class="two">
            <div class="two_left">
                <p class="size">联系我们 -</p>
                <p>XiaoYi Dong</p>
                <p>1021517054@qq.com</p>
            </div>
            <div class="two_left">
                <p class="size">客服热线 -</p>
                <p>400-123-1234</p>
                <p>+61 433 679 520</p>
            </div>
            <div class="two_left">
                <p class="size">关于我们 -</p>
                <p>weibo：yifang-home</p>
                <p>WeChat：yifang-home</p>
            </div>
            <div class="two_right">
                <div class="ma"><img src="/furniture/Public/images/erweima.png"/></div>
                <p>扫一扫下载客户端</p>
            </div>
        </div>
        <div class="three">
            <p>Copyright © 2017 yifanghome.com Inc.All Rights Reserved. 厦门一方家居有限公司</p>
            <p>版权所有 京ICP备14049645号-0 增值电信业务经营许可证：京ICP证123456号</p>
        </div>
    </div>
</div>
</body>
</html>