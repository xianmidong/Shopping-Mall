<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>orderinfo</title>
    <script src="/furniture/Public/js/jquery-1.9.1.js"></script>
    <script src="/furniture/Public/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="/furniture/Public/bootstrap/css/bootstrap.css">
    <script src="/furniture/Public/js/page/paginathing.js"></script>
    <link rel="stylesheet" href="/furniture/Public/css/background_order/order.css">
    <script src="/furniture/Public/js/background_order/order.js"></script>

</head>
<body>
<div class="content">
    <div class="page-header">
        <h2>订单信息展示</h2>
    </div>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>订单ID</th>
                <th>订单客户</th>
                <th>联系电话</th>
                <th>订单金额(元)</th>
                <th>商品件数</th>
                <th>下单时间</th>
                <th>收件人</th>
                <th>订单状态</th>
                <th>是否发货</th>
                <th>配送地址</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($order)): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td class="orderid"><?php echo ($vo["orderid"]); ?></td>
                    <td><?php echo ($vo["username"]); ?></td>
                    <td><?php echo ($vo["telphone"]); ?></td>
                    <td><?php echo ($vo["total"]); ?></td>
                    <td><?php echo ($vo["ordersum"]); ?></td>
                    <td><?php echo ($vo["orderdate"]); ?></td>
                    <td><?php echo ($vo["consignee"]); ?></td>
                    <td class="is_pay"><?php if($vo["orderstate"] == 0): ?><span class="no-pay">未付款</span><?php else: ?>已付款</else><?php endif; ?></td>
                    <td><?php if($vo["orderstate"] == 0): ?>未付钱,不给发货<?php else: ?><span class="deliver"></span><?php endif; ?></td>
                    <td><?php echo ($vo["address"]); ?></td>
                    <td><button class="btn btn-danger">删除</button></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <!--模态框-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body" style="text-align: center"><h3>该订单未付款,不能删除此订单</h3></div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>
</div>
</body>
</html>