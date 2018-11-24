<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>news</title>
    <script src="/furniture/Public/js/jquery-1.9.1.js"></script>
    <script src="/furniture/Public/bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="/furniture/Public/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/furniture/Public/css/goodsdetail/goods_detail.css">
    <script src="/furniture/Public/js/page/paginathing.js"></script>
    <script src="/furniture/Public/js/back-news/news.js"></script>


</head>
<body>
<div class="content">
    <div class="page-header">
        <h2>新闻动态展示</h2>
    </div>
    <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="#">新闻展示</a></li>
        <li role="presentation"><a href="#">添加新闻</a></li>
    </ul>
    <div class="container">
        <table class="table table-bordered">
            <thead>
            <th>编号</th>
            <th>新闻标题</th>
            <th>新闻内容</th>
            <th>新闻图片</th>
            <th>新闻日期</th>
            <th>操作</th>
            </thead>
            <tbody>
            <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td class="newsid "><?php echo ($vo["newsid"]); ?></td>
                    <td class="newstitle "><?php echo ($vo["newstitle"]); ?></td>
                    <td class="newscontent "><?php echo ($vo["newscontent"]); ?></td>
                    <td class="newsimg detail_img "><img src="/furniture/Public/upload-newsimg/<?php echo ($vo["newsimg"]); ?>"></td>
                    <td class="newsdata "><?php echo ($vo["newsdata"]); ?></td>
                    <td>
                        <button type="button" class="btn btn-info edit" data-toggle="modal" data-target="#myModal">编辑</button>
                        <button type="button" class="btn btn-danger">删除</button>
                    </td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </tbody>
        </table>
    </div>

    <div class="add_detail">
        <form method="post" action="add_news" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputPassword1">新闻标题</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="newstitle">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">新闻内容</label>
                <textarea style="height: 100px" class="form-control" id="exampleInputPassword2" name="newscontent"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">新闻图片</label>
                <input type="file" id="exampleInputFile" name="newsimg">
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
                    <h4 class="modal-title" id="myModalLabel">新闻修改</h4>
                </div>
                <div class="modal-body">
                    <div class="alert_detail">
                        <form method="post" action="alert_news" enctype="multipart/form-data">
                            <input type="text"  style="display: none" class="idhide" name="newsid">
                            <div class="form-group">
                                <label for="exampleInputPassword1">新闻标题</label>
                                <input type="text" class="form-control" id="exampleInputPassword3" name="newstitle">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">新闻内容</label>
                                <textarea style="height: 100px" class="form-control" id="exampleInputPassword4" name="newscontent"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">新闻图片</label>
                                <input type="file" id="exampleInputFile2" name="newsimg">
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