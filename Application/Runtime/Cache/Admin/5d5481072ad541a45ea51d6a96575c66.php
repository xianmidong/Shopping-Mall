<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="/furniture/Public/css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<form  action="" method="post" id="form1">
    <input type="hidden" name="dels" value="1">
    <div class="main" id="main">
        <div class="list-box">
            <div class="title">
                <ul>
                    <li style="width:10%">&nbsp;&nbsp;<input type="checkbox" id="all_select" class="check-style" ></li>
                    <li style="width:20%">类型编号</li>
                    <li style="width:30%">类型名称</li>
                    <li style="width:30%">类型说明</li>
                    <li style="width:10%">操作</li>
                    <div class="clear"></div>
                </ul>
            </div>

            <div class="list" id="list">
                <ul>
                    <a>
                        <?php if(is_array($datas)): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li style="width:10%">&nbsp;&nbsp;<input type="checkbox" class="check-style" name="id[]"  value="<?php echo ($data["typeid"]); ?>"></li>
                            <li style="width:20%" ><?php echo ($data["typeid"]); ?></li>
                            <li style="width:30%" ><div class="left" ><?php echo ($data["typename"]); ?></div></li>
                            <li style="width:30%"><div class="left" ><?php echo ($data["typenote"]); ?></div></li>
                            <li style="width:10%">
                                <div class="mod-icon mod" url="">编</div>
                                <div class="del-icon del" url="" >删</div><div class="clear"></div></li>
                            <div class="clear"></div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </a>

                </ul>

            </div>
        </div><!-- end of list-box -->

        <div class="fun-box">
            <div class="button">
                <ul>
                    <li class="add" id="add">添加</li>
                    <li class="dels"  id="dels">删除</li>
                    <div class="clear"></div>

                </ul>
            </div>
        </div>
        <div class="page grey_l link"><?php echo ($page); ?></div>
        <div class="clear"></div>
    </div>

    </div><!-- end of main -->
</form>
</body>
</html>