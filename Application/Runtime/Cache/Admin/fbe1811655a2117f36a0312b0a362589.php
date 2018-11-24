<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <title>furture</title>
    <!-- Bootstrap Styles-->
    <link href="/furniture/Public/bootstrap/css/bootstrap.css" rel="stylesheet"/>
    <link href="/furniture/Public/css/backgroundindex/custom-styles.css" rel="stylesheet"/>
    <script src="/furniture/Public/js/jquery-1.9.1.js"></script>
    <script src="/furniture/Public/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="/furniture/Public/css/backgroundindex/index.css">
    <script src="/furniture/Public/js/Adminlogin/backgroundindex.js"></script>
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default top-navbar" role="navigation">
        <!--<div class="navbar-header">-->
        <!--<a class="navbar-brand" ><i style="visibility: hidden" class="fa fa-comments"></i>你好: <strong><?php echo (session('adminname')); ?></strong></a>-->
         <!--</div>-->
        <div class="title">
            <img src="/furniture/Public/images/logo.png"/>
        </div>
        <div class="btn-group">
            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               选项 <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">切换用户</a></li>
                <li><a href="logout">退出</a></li>
                <li><a href="#">设置</a></li>
            </ul>
        </div>
        <a class="navbar-brand" ><i style="visibility: hidden" class="fa fa-comments"></i>你好: <strong><?php echo (session('adminname')); ?></strong></a>
        <div class="date">
            <span></span>&nbsp;&nbsp;<span></span>
        </div>

    </nav>
    <!--/. NAV TOP  -->

    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <!--<li>-->
                    <!--<a target="myif" href=""><i style="visibility: hidden" class="fa fa-dashboard"></i><i style="visibility: hidden" class="fa fa-table"></i> 首页</a>-->
                <!--</li>-->
                <li>
                    <a target="myif" href="<?php echo U('Index/index');?>"><i style="visibility: hidden" class="fa fa-dashboard"></i><i style="visibility: hidden" class="fa fa-table"></i>首页</a>
                </li>
                <li>
                    <a target="myif" href="<?php echo U('Goodsinfo/show_goods');?>"><i style="visibility: hidden" class="fa fa-dashboard"></i><i style="visibility: hidden" class="fa fa-table"></i> 商品管理</a>
                </li>
                <li>
                    <a target="myif" href="<?php echo U('Goodsdetail/show_detail');?>"><i style="visibility: hidden" class="fa fa-desktop"></i><i style="visibility: hidden" class="fa fa-table"></i> 商品详情管理</a>
                </li>
                <li>
                    <a target="myif" href="<?php echo U('Typeinfo/show_type');?>" ><i style="visibility: hidden" class="fa fa-bar-chart-o"></i><i style="visibility: hidden" class="fa fa-table"></i> 商品类型管理</a>
                </li>
                <li>
                    <a target="myif" href="<?php echo U('Goodscolor/show_goodscolor');?>"><i style="visibility: hidden" class="fa fa-qrcode"></i><i style="visibility: hidden" class="fa fa-table"></i> 商品颜色管理</a>
                </li>

                <li>
                    <a target="myif" href="<?php echo U('News/news');?>"><i style="visibility: hidden" class="fa fa-table"></i><i style="visibility: hidden" class="fa fa-table"></i> 新闻动态管理</a>
                </li>
                <li>
                    <a target="myif" href="<?php echo U('Order/orderinfo');?>"><i style="visibility: hidden" class="fa fa-edit"></i><i style="visibility: hidden" class="fa fa-table"></i> 订单管理 </a>
                </li>
                <!--<li>-->
                    <!--<a target="myif" href="#"><i style="visibility: hidden" class="fa fa-edit"></i><i style="visibility: hidden" class="fa fa-table"></i> 订单详情管理 </a>-->
                <!--</li>-->
                <li>
                    <a target="myif" href="<?php echo U('Address/address');?>"><i style="visibility: hidden" class="fa fa-edit"></i><i style="visibility: hidden" class="fa fa-table"></i> 地址管理 </a>
                </li>
                <!--<li>-->
                    <!--<a target="myif" href="#"><i style="visibility: hidden" class="fa fa-edit"></i><i style="visibility: hidden" class="fa fa-table"></i> 用户管理 </a>-->
                <!--</li>-->
            </ul>
        </div>
    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
            <iframe  name="myif"  width="100%" height="100%" src="<?php echo U('Index/index');?>"></iframe>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
</div>
</body>
</html>