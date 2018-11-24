<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>address</title>
    <script src="/furniture/Public/js/jquery-1.9.1.js"></script>
    <script src="/furniture/Public/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="/furniture/Public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/furniture/Public/css/pop/popup.css">
    <script src="/furniture/Public/js/page/paginathing.js"></script>
    <script src="/furniture/Public/js/pop/popup.js"></script>
    <!--<script src="/furniture/Public/js/typeinfo/type.js"></script>-->
    <link rel="stylesheet" href="/furniture/Public/css/typeinfo/type.css">
    <script src="/furniture/Public/js/back_address/address.js"></script>


</head>
<body>
<div class="content">
    <div class="page-header">
        <h2>地址一览表</h2>
    </div>
    <div>
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <th>地址ID</th>
                <th>用户名称</th>
                <th>收货人</th>
                <th>电话号码</th>
                <th>收货地址</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                    <td class="typeid"><?php echo ($data["addressid"]); ?></td>
                    <td class="name"><?php echo ($data["username"]); ?></td>
                    <td class="note"><?php echo ($data["consignee"]); ?></td>
                    <td class="note"><?php echo ($data["telphone"]); ?></td>
                    <td class="note"><?php echo ($data["address"]); ?></td>
                    <!--<td><button type="button" class="btn btn-info">编辑</button><button type="button" class="btn btn-danger">删除</button></td>-->
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>