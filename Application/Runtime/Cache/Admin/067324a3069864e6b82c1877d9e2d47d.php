<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>show_goods</title>
    <script src="/furniture/Public/js/jquery-1.9.1.js"></script>
    <link rel="stylesheet" href="/furniture/Public/bootstrap/css/bootstrap.css">
    <script src="/furniture/Public/bootstrap/js/bootstrap.js"></script>
    <script src="/furniture/Public/js/pop/popup.js"></script>
    <script src="/furniture/Public/js/page/paginathing.js"></script>
    <link rel="stylesheet" href="/furniture/Public/css/pop/popup.css">
    <link rel="stylesheet" href="/furniture/Public/css/goodsinfo/goods.css">
    <script src="/furniture/Public/js/back_goodscolor/goodscolor.js"></script>

</head>
<body>
<div class="content">
    <div class="page-header">
        <h2>商品颜色一览表</h2>
    </div>
    <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="#">商品颜色信息</a></li>
        <li role="presentation"><a href="#">添加商品颜色</a></li>

    </ul>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>颜色ID</th>
                <th>商品名称</th>
                <th>商品颜色</th>
                <th>商品颜色图片</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody class="haschild">
            <?php if(is_array($colordata)): $i = 0; $__LIST__ = $colordata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td class="colorid"><?php echo ($vo["colorid"]); ?></td>
                    <td class="goodsname"><?php echo ($vo["goodsname"]); ?></td>
                    <td class="color"><?php echo ($vo["goodscolor"]); ?><span class="co" style="display: inline-block;width: 20px;height: 20px;background-color: <?php echo ($vo["goodscolor"]); ?>;float: right;margin-right: 20px"></span></td>
                    <td class="goodsimg"><img src="/furniture/Public/goods_colorimg/<?php echo ($vo["goodsimg"]); ?>"></td>
                    <td><button type="button" class="btn btn-info edit" data-toggle="modal" data-target="#myModal">编辑</button><button type="button" class="btn btn-danger">删除</button></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
        <!--<div class="black2"><span class="disabled"> < </span><span class="current">1</span><a href="#?page=2">2</a><a href="#?page=3">3</a>...<a href="#?page=199">199</a><a href="#?page=2"> > </a></div></p>-->
    </div>

    <div class="alert">
        <form class="form-horizontal"  enctype="multipart/form-data" role="form" method="post" action="add_goodscolor">

            <div class="form-group">
                <label class="col-sm-2 control-label">商品名称</label>
                <div class="col-sm-10">
                    <select class="form-control" name="goodsname">
                        <?php if(is_array($goodsname)): $i = 0; $__LIST__ = $goodsname;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><option><?php echo ($data["goodsname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label  class="col-sm-2 control-label">商品颜色</label>
                <div class="col-sm-10">
                    <input type="color"  class="form-control" name="color" >
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">商品颜色图片</label>
                <div class="col-sm-10">
                    <input type="file" name="goods_img">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-10">
                    <button type="submit" class="btn btn-default add">确定添加</button>
                </div>
            </div>

        </form>
    </div>



    <!--模态框 修改界面-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">商品颜色修改</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="alert_goodscolor">

                        <input type="text" class="hidden_id" name="goodsid" style="display: none">

                        <div class="form-group">
                            <label class="col-sm-3 control-label">商品名称</label>
                            <div class="col-sm-9">
                                <select class="form-control a" name="goodsname" readonly="readonly">
                                    <?php if(is_array($goodsname)): $i = 0; $__LIST__ = $goodsname;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><option><?php echo ($data["goodsname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label  class="col-sm-3 control-label">商品颜色</label>
                            <div class="col-sm-9">
                                <input type="color"  class="form-control b"  name="color" >
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label">商品颜色图片</label>
                            <div class="col-sm-9">
                                <input type="file" name="goods_img" class="c">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                            <button type="submit" class="btn btn-primary">提交更改</button>
                        </div>
                    </form>
                </div>

            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>
</div>
</body>
</html>