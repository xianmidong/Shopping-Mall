<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
    <script src="/furniture/Public/js/goodsinfo/goods.js"></script>

</head>
<body>
   <div class="content">
       <div class="page-header">
           <h2>商品信息一览表</h2>
       </div>
       <ul class="nav nav-tabs">
           <li role="presentation" class="active"><a href="#">商品信息</a></li>
           <li role="presentation"><a href="#">添加商品</a></li>

       </ul>
       <div class="table-responsive">
           <table class="table table-bordered">
               <thead>
               <tr>
                   <th>商品ID</th>
                   <th>商品名称</th>
                   <th>商品类别</th>
                   <th>商品价格(元)</th>
                   <th>商品图片</th>
                   <th>商品库存(件)</th>
                   <th>商品尺寸</th>
                   <th>商品重量(kg)</th>
                   <th>商品材料</th>
                   <th>是否展示</th>
                   <th>是否新品</th>
                   <th>操作</th>
               </tr>
               </thead>
               <tbody class="haschild">
               <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                       <td class="goodsid"><?php echo ($vo["goodsid"]); ?></td>
                       <td class="goodsname"><?php echo ($vo["goodsname"]); ?></td>
                       <td class="goodstype"><?php echo ($vo["typename"]); ?></td>
                       <td class="price"><?php echo ($vo["goodsprice"]); ?></td>
                       <td class="goodsimg"><img src="/furniture/Public/goodsimg/<?php echo ($vo["goodsimg"]); ?>"></td>
                       <td class="goodscount"><?php echo ($vo["goodscount"]); ?></td>
                       <td class="goodssize"><?php echo ($vo["goodssize"]); ?></td>
                       <td class="goodsweight"><?php echo ($vo["goodsweight"]); ?></td>
                       <td class="goodsmaterial"><?php echo ($vo["goodsmaterial"]); ?></td>
                       <?php if($vo["isshow"] == 1): ?><td class="isshow "><input class="btn btn-default show" type="submit" value="" name="<?php echo ($vo["isshow"]); ?>" style="outline: none;background: #1cc09f"></td>
                            <?php else: ?>
                           <td class="isshow "><input class="btn btn-default show" type="submit" value="" name="<?php echo ($vo["isshow"]); ?>" style="outline: none;background: white"></td><?php endif; ?>
                       <?php if($vo["isnew"] == 1): ?><td class="isnew "><input class="btn btn-default show" type="submit" value="" name="<?php echo ($vo["isnew"]); ?>" style="outline: none;background: #1cc09f"></td>
                           <?php else: ?>
                           <td class="isnew "><input class="btn btn-default show" type="submit" value="" name="<?php echo ($vo["isnew"]); ?>" style="outline: none;background:white"></td><?php endif; ?>
                       <td><button type="button" class="btn btn-info edit" data-toggle="modal" data-target="#myModal">编辑</button><button type="button" class="btn btn-danger">删除</button></td>
                   </tr><?php endforeach; endif; else: echo "" ;endif; ?>
               </tbody>
           </table>
           <!--<div class="black2"><span class="disabled"> < </span><span class="current">1</span><a href="#?page=2">2</a><a href="#?page=3">3</a>...<a href="#?page=199">199</a><a href="#?page=2"> > </a></div></p>-->
       </div>

       <div class="alert">
           <form class="form-horizontal"  enctype="multipart/form-data" role="form" method="post" action="add_goods">
               <div class="form-group">
                   <label class="col-sm-2 control-label">商品名称</label>
                   <div class="col-sm-10">
                       <input type="text" class="form-control" name="goods_name" autocomplete="off">
                   </div>
               </div>

                   <div class="form-group">
                       <label class="col-sm-2 control-label">商品类型</label>
                       <div class="col-sm-10">
                           <select class="form-control" name="goods_type">
                               <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option><?php echo ($vo["typename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                           </select>
                       </div>
                   </div>


               <div class="form-group">
                   <label class="col-sm-2 control-label">商品图片</label>
                   <div class="col-sm-10">
                       <input type="file" name="goods_img">
                   </div>
               </div>

               <div class="form-group">
                   <label  class="col-sm-2 control-label">商品价格</label>
                   <div class="col-sm-10">
                       <input type="number" min="0" class="form-control" name="goods_price" >
                   </div>
               </div>

               <div class="form-group">
                   <label  class="col-sm-2 control-label">商品尺寸</label>
                   <div class="col-sm-10">
                       <input type="text" class="form-control" name="goods_size">
                   </div>
               </div>

               <div class="form-group">
                   <label  class="col-sm-2 control-label">商品材料</label>
                   <div class="col-sm-10">
                       <input type="text" class="form-control" name="goods_material" >
                   </div>
               </div>

               <div class="form-group">
                   <label class="col-sm-2 control-label">商品重量</label>
                   <div class="col-sm-10">
                       <input type="text" class="form-control" name="goods_weight">
                   </div>
               </div>

               <div class="form-group">
                   <label class="col-sm-2 control-label">商品库存</label>
                   <div class="col-sm-10">
                       <input type="text" class="form-control" name="goods_count">
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
                       <h4 class="modal-title" id="myModalLabel">商品修改</h4>
                   </div>
                   <div class="modal-body">
                       <form class="form-horizontal" role="form" enctype="multipart/form-data" method="post" action="alert_goods">
                           <input type="text" class="hidden_id" name="goodsid" style="display: none">
                           <div class="form-group">
                               <label class="col-sm-2 control-label" >商品名称</label>
                               <div class="col-sm-10">
                                   <input type="text" class="form-control a" name="goodsname" autocomplete="off">
                               </div>
                           </div>

                           <div class="form-group">
                               <label class="col-sm-2 control-label">商品类型</label>
                               <div class="col-sm-10">
                                   <select class="form-control b" name="choise_type">
                                       <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option><?php echo ($vo["typename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                   </select>
                               </div>
                           </div>
                           <div class="form-group">
                               <label class="col-sm-2 control-label ">商品图片</label>
                               <div class="col-sm-10">
                                   <input type="file" name="goodsimg" style="border-radius: 4px;">
                               </div>
                           </div>

                           <div class="form-group">
                               <label  class="col-sm-2 control-label ">商品价格</label>
                               <div class="col-sm-10">
                                   <input type="text" min="0" class="form-control c" name="goodsprice" >
                               </div>
                           </div>
                           <div class="form-group">
                               <label  class="col-sm-2 control-label">商品尺寸</label>
                               <div class="col-sm-10">
                                   <input type="text" class="form-control d" name="goodssize">
                               </div>
                           </div>
                           <div class="form-group">
                               <label  class="col-sm-2 control-label">商品材料</label>
                               <div class="col-sm-10">
                                   <input type="text" class="form-control e" name="goodsmaterial">
                               </div>
                           </div>
                           <div class="form-group">
                               <label class="col-sm-2 control-label">商品重量</label>
                               <div class="col-sm-10">
                                   <input type="text" class="form-control f" name="goodsweight" >
                               </div>
                           </div>
                           <div class="form-group">
                               <label class="col-sm-2 control-label">商品库存</label>
                               <div class="col-sm-10">
                                   <input type="text" class="form-control g" name="goodscount" >
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