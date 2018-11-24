<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>show_detail</title>
    <script src="/furniture/Public/js/jquery-1.9.1.js"></script>
    <script src="/furniture/Public/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="/furniture/Public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/furniture/Public/css/goodsdetail/goods_detail.css">
    <script src="/furniture/Public/js/page/paginathing.js"></script>
    <script src="/furniture/Public/js/goodsdetail/goods_detail.js"></script>

</head>
<body>
<div class="content">
    <div class="page-header">
        <h2>商品细节展示</h2>
    </div>
    <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="#">细节展示</a></li>
        <li role="presentation"><a href="#">添加商品细节图</a></li>
    </ul>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <th>图片编号</th>
                <th>商品名称</th>
                <th>细节图片</th>
                <th>操作</th>
            </thead>
            <tbody>
            <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td class="detail_id"><?php echo ($vo["photoid"]); ?></td>
                    <td class="goods_name"><?php echo ($vo["goodsname"]); ?></td>
                    <td class="detail_img"><img src="/furniture/Public/goods_detail_img/<?php echo ($vo["photoimg"]); ?>"></td>
                    <td>
                        <button type="button" class="btn btn-info edit" data-toggle="modal" data-target="#myModal">更换细节图</button>
                        <button type="button" class="btn btn-danger">删除细节图</button>
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>
    <div class="add_detail">
        <form method="post" action="add_detail" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputPassword1">商品名称</label>
            <select class="form-control" id="exampleInputPassword1" name="goods_name">
               <?php if(is_array($goodsname)): foreach($goodsname as $key=>$vo): ?><option><?php echo ($vo["goodsname"]); ?></option><?php endforeach; endif; ?>
            </select>
        </div>
            <div class="form-group">
                <label for="exampleInputFile">选择细节图</label>
                <input type="file" id="exampleInputFile" name="detail_img">
            </div>
            <button type="submit" class="btn btn-default">确定添加</button>
        </form>
    </div>

    <!--模态框-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">细节图修改</h4>
                </div>
                <div class="modal-body">
                    <div class="alert_detail">
                        <form method="post" action="alert_detail" enctype="multipart/form-data">
                            <input type="text"  style="display: none" class="idhide" name="photo_id">
                            <div class="form-group">
                                <label for="a">商品名称</label>
                                <select class="form-control" id="a" name="goods_name" disabled>
                                    <?php if(is_array($goodsname)): $i = 0; $__LIST__ = $goodsname;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option><?php echo ($vo["goodsname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="b">选择细节图</label>
                                <input type="file" id="b" name="img">
                            </div>
                            <button type="submit" class="btn btn-default ">确定修改</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>