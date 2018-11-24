<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人信息</title>
    <script src="/furniture/Public/js/jquery-1.9.1.js"></script>
    <script src="/furniture/Public/js/pop/popup.js"></script>
    <script src="/furniture/Public/bootstrap/js/bootstrap.js"></script>
    <script src="/furniture/Public/js/Homelogin/login_reg.js"></script>
    <script src="/furniture/Public/js/roll/scrollbot.js"></script>
    <script src="/furniture/Public/js/personal/personal.js"></script>
    <link rel="stylesheet" href="/furniture/Public/css/pop/popup.css">
    <link rel="stylesheet" href="/furniture/Public/css/all.css" type="text/css">
    <link rel="stylesheet" href="/furniture/Public/css/personal/personal.css">



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
                <li><a href="news " >新闻动态</a></li>
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

<div class="personal-main">
    <div class="left">
        <div class="mytype ">
            <div class="all " style="border-left: 2px solid rgb(19,139,139);color: rgb(19,139,139)" >个人信息</div>
            <div class="all">我的订单</div>
            <div class="all">送货地址</div>
            <div class="all">我的卡券</div>
            <div class="all">在线客服</div>
        </div>
    </div>
    <div class="right">
        <!--个人信息块-->
      <div class="personal-info">
        <form method="post" action="alert_info" enctype="multipart/form-data">
              <!--头像上传-->
          <div class="camera ">
            <div class="text">头像：</div>
            <div class="photo">
                <img  src="/furniture/Public/personal_img/<?php echo ($info['photo']); ?>"/>
                <div class="icon">
                    <input type="file"   style="display: none" name="personal_img">
                    <img id="came" src="/furniture/Public/images/personal/camera.png"/>
                </div>
            </div>
        </div>

          <div class="nickname tongyong">
              <div class="text">昵称：</div>
              <input type="text" value="<?php echo ($username); ?>" readonly name="person">
          </div>
          <div class="sex tongyong">
              <div class="text">性别：</div>
              <?php if($info['sex'] == 1): ?><input type="radio"  name="sex" value="1" checked>男&nbsp;
                  <input type="radio"  name="sex" value="0">女&nbsp;
              <?php else: ?>
                  <input type="radio"  name="sex" value="1">男&nbsp;
                  <input type="radio"  name="sex" value="0" checked>女&nbsp;<?php endif; ?>
          </div>
          <div class="telphone tongyong">
                <div class="text">手机：</div>
                <input type="tel" value="<?php echo ($info['telphone']); ?>" name="telphone">
           </div>
          <div class="email tongyong">
                <div class="text">邮箱：</div>
                <input type="email" name="email" value="<?php echo ($info['email']); ?>">
            </div>
          <button type="submit">保存</button>
        </form>
      </div>
      <!--我的订单块-->
      <div class="myorder">
          <ul>
                  <li style="background:rgb(19,139,139);
                  color:#FFFFFF">所有订单</li>
                  <li>待付款</li>
                  <li>待收货</li>
                  <li>已收货</li>
              </ul>
          <div>
          <!--所有订单-->
          <div class="all-order">
              <!--订单数据-->
              <?php if(is_array($order)): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$o): $mod = ($i % 2 );++$i;?><div class="order-data">
                      <div class="one">
                          <span class="ordernum">订单号：<a><?php echo ($o["orderid"]); ?></a></span>
                          <span>下单时间：<?php echo ($o["orderdate"]); ?></span>
                      </div>
                      <div class="two">
                          <div class="padding">收货人：<span ><?php echo ($o["consignee"]); ?></span></div>
                          <div>联系电话：<span><?php echo ($o["telphone"]); ?></span></div>
                          <div class="padding">总数量：<span><?php echo ($o["ordersum"]); ?></span></div>
                          <div>订单金额：<span><?php echo ($o["total"]); ?></span></div>
                          <div class="padding">订单状态：<span class="mystate">
                              <?php if($o["orderstate"] == 0): ?>待付款
                               <?php elseif($o["orderstate"] == 1): ?>待收货
                               <?php else: ?> 已收货<?php endif; ?>
                          </span></div>
                          <div >送货地址：<span ><?php echo ($o["address"]); ?></span></div>
                      </div>
                      <div class="three">
                          <?php if($o["orderstate"] == 0): ?><button>现在支付</button><button>取消订单</button>
                           <?php elseif($o["orderstate"] == 1): ?><button>确认收货</button>
                           <?php else: ?> <button>删除订单</button><?php endif; ?>
                      </div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>

          </div>
          <!--待付款-->
          <div class="Unpaid ">
              <!--订单数据-->
              <?php if(is_array($Unpaid)): $i = 0; $__LIST__ = $Unpaid;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$o): $mod = ($i % 2 );++$i;?><div class="order-data">
                      <div class="one">
                          <span class="ordernum">订单号：<?php echo ($o["orderid"]); ?></span>
                          <span>下单时间：<?php echo ($o["orderdate"]); ?></span>
                      </div>
                      <div class="two">
                          <div class="padding">收货人：<span ><?php echo ($o["consignee"]); ?></span></div>
                          <div>联系电话：<span><?php echo ($o["telphone"]); ?></span></div>
                          <div class="padding">总数量：<span><?php echo ($o["ordersum"]); ?></span></div>
                          <div>订单金额：<span><?php echo ($o["total"]); ?></span></div>
                          <div class="padding">订单状态：待付款<span class="mystate"></span></div>
                          <div >送货地址：<span ><?php echo ($o["address"]); ?></span></div>
                      </div>
                      <div class="three">
                          <button>现在支付</button>
                          <button>取消订单</button>
                      </div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>


          </div>
          <!--待收货-->
          <div class="Uncollected ">
              <!--订单数据-->
              <?php if(is_array($Uncollected)): $i = 0; $__LIST__ = $Uncollected;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$o): $mod = ($i % 2 );++$i;?><div class="order-data">
                      <div class="one">
                          <span class="ordernum">订单号：<?php echo ($o["orderid"]); ?></span>
                          <span>下单时间：<?php echo ($o["orderdate"]); ?></span>
                      </div>
                      <div class="two">
                          <div class="padding">收货人：<span ><?php echo ($o["consignee"]); ?></span></div>
                          <div>联系电话：<span><?php echo ($o["telphone"]); ?></span></div>
                          <div class="padding">总数量：<span><?php echo ($o["ordersum"]); ?></span></div>
                          <div>订单金额：<span><?php echo ($o["total"]); ?></span></div>
                          <div class="padding">订单状态：待收货<span class="mystate"></span></div>
                          <div >送货地址：<span ><?php echo ($o["address"]); ?></span></div>
                      </div>
                      <div class="three">
                          <button>确认收货</button>
                      </div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>

          </div>
          <!--已收货-->
          <div class="received ">
              <!--订单数据-->
              <?php if(is_array($received)): $i = 0; $__LIST__ = $received;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$o): $mod = ($i % 2 );++$i;?><div class="order-data">
                      <div class="one">
                          <span class="ordernum">订单号：<?php echo ($o["orderid"]); ?></span>
                          <span>下单时间：<?php echo ($o["orderdate"]); ?></span>
                      </div>
                      <div class="two">
                          <div class="padding">收货人：<span ><?php echo ($o["consignee"]); ?></span></div>
                          <div>联系电话：<span><?php echo ($o["telphone"]); ?></span></div>
                          <div class="padding">总数量：<span><?php echo ($o["ordersum"]); ?></span></div>
                          <div>订单金额：<span><?php echo ($o["total"]); ?></span></div>
                          <div class="padding">订单状态：已收货<span class="mystate"></span></div>
                          <div >送货地址：<span ><?php echo ($o["address"]); ?></span></div>
                      </div>
                      <div class="three">
                          <button>删除订单</button>
                      </div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>
          </div>
          </div>
      </div>

       <!--送货地址 -->
      <div class="delivery-address">
        <hr>
            <div class="a">我的收货地址</div>
          <div class="address-box">
              <?php if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="address-data">
                      <div class="check"><input hidden type="checkbox"  tit="<?php echo ($data["addressid"]); ?>"></div>
                      <div class="addre">
                          <span><?php echo ($data["consignee"]); ?></span>
                          <span style="padding: 0 10px 0 10px"><?php echo ($data["telphone"]); ?></span>
                          <span><?php echo ($data["address"]); ?></span>
                      </div>
                      <div class="del">删除</div>
                  </div><?php endforeach; endif; else: echo "" ;endif; ?>

          </div>
          <hr>
          <div class="a">添加收货地址</div>
          <div class="center">
                  <div class="Consignee">
                      <div class="text">收货人：</div>
                      <input type="text"  >
                  </div>
                  <div class="phone ">
                      <div class="text">手机号：</div>
                      <input type="tel"  >
                  </div>
                  <div class="text">选择地址：</div>
                  <div id="address">
                      <select  class="getcity" name="pro" >
                          <?php if(is_array($provicial)): $i = 0; $__LIST__ = $provicial;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$p): $mod = ($i % 2 );++$i;?><option id="myp" value="<?php echo ($p["pid"]); ?>"><?php echo ($p["provincial"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                      </select>
                      <select id="city"  name="ci"></select>
                      <!--<select id="county"  name="ty"></select>-->
                      <p><input name="detail_address" type="text" placeholder="详细地址:如县、道路、门牌号、小区等"></p>
                  </div>
                  <button id="addre-mybtn" type="submit">添加地址</button>
          </div>

          </div>
        <!--我的卡劵-->
        <div class="juan">暂时没有哦！</div>
        <!--在线客服-->

      </div>

    </div>
</div>
</body>
</html>