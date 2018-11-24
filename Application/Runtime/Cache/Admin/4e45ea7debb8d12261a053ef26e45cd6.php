<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>showtype</title>
    <script src="/furniture/Public/js/jquery-1.9.1.js"></script>
    <script src="/furniture/Public/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="/furniture/Public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/furniture/Public/css/pop/popup.css">
    <script src="/furniture/Public/js/page/paginathing.js"></script>
    <script src="/furniture/Public/js/pop/popup.js"></script>
    <script src="/furniture/Public/js/typeinfo/type.js"></script>
    <link rel="stylesheet" href="/furniture/Public/css/typeinfo/type.css">

</head>
<body>
<div class="content">
    <div class="page-header">
        <h2>商品类型总览</h2>
    </div>
    <div>
        <table class="table table-hover table-bordered">
            <thead>
            <tr>
                <th>类别ID</th>
                <th>类别名称</th>
                <th>类别简介</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                    <td class="typeid"><?php echo ($data["typeid"]); ?></td>
                    <td class="name"><?php echo ($data["typename"]); ?></td>
                    <td class="note"><?php echo ($data["typenote"]); ?></td>
                    <td><button type="button" class="btn btn-info">编辑</button><button type="button" class="btn btn-danger">删除</button></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
    <form class="form-inline" >
        <div class="form-group">
            <label for="exampleInputName2">类型名称:</label>
            <input type="text" class="form-control" id="exampleInputName2" >
        </div>
        <div class="form-group">
            <label for="exampleInputEmail2">类型简介:</label>
            <input type="text" class="form-control" id="exampleInputEmail2">
        </div>
        <button type="submit" class="btn btn-default add">确定添加</button>
    </form>
    <div class="edit">
        <form action="alert_type" method="post">
        <div class="row" style="margin-top: 30px">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="form-group">
                    <label>类型名称:</label>
                    <input class="form-control a" type="text" name="typename">
                </div>
            </div>
            <input class="hide" type="text" name="typeid">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="form-group">
                    <label>类型简介:</label>
                    <textarea class="form-control"  name="typenote" rows="4"></textarea>
                </div>
            </div>
            <div class="col-xs-4 col-lg-offset-4">
                <input class="btn btn-default btn-block" type="submit" value="确定修改">
            </div>
        </div>
            <div class="close">
                ×
            </div>
        </form>
</div>
</div>
</body>
</html>