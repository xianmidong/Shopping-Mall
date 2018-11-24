<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>后台管理</title>
<link href="/furniture/Public/css/adminlogin.css" rel="stylesheet" type="text/css" />
<script src="/furniture/Public/js/jquery-1.9.1.js"></script>
<script src="/furniture/Public/js/Adminlogin/loginjs.js"></script>
    <style>
        .mask{
            width: 100%;
            height: 960px;
            clear: both;
            position: relative;
            background-image: url('/furniture/Public/images/bananer.png');
            filter: blur(2px);
            opacity: 0.8;
        }
    </style>
</head>
<body >
<div class="mask"></div>
      <div class="login">
          <div class="login_logo"><img src="/furniture/Public/images/adminlogin/login_logo.png"></div>
          <div class="login_name">
               <p>后台管理系统登录</p>
          </div>
          <form>
              <input name="adminname" type="text" placeholder="管理员账号">
              <span class="adminname">请填写管理员账号!</span>
              <input name="password" type="password" placeholder="密码"/>
              <span class="password">请填写管理员密码!</span>
              <input value="登录" style="width:100%;" type="submit">
          </form>
          <div class="error" >账号或密码错误</div>

</div>
</body>
</html>