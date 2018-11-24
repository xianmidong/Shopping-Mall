$(function () {
    if($(".haschild").childElementCount==0){
        $(".pagination-container").hide();
    }else {
        $(".pagination-container").show();
    }
    //封装消息框
    function remind(word,fn){
        var popup = new Popup({
            'type': 'submit',
            'title': "提示",
            'text': word,
            'submitCallBack':fn,
            'cancelbutton': true,
        })
    }
    //导航条样式改变
    $(".nav-tabs li").eq(0).click(function () {
        $(".table-responsive").show();
        $(".alert").hide();
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
    });
    $(".nav-tabs li").eq(1).click(function () {
        $(".table-responsive").hide();
        $(".alert").show();
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
    });

    //是否展示与是否新品处理
    $(".show").click(function () {
        var goods_id=$(this).parent().siblings(".goodsid").text();
        var state=$(this).attr("name");
        if (state == 0) {
            $(this).css("backgroundColor","#1CC09F");
            $(this).attr("name","1");
        }else if (state == 1) {
            $(this).css("backgroundColor","white");
            $(this).attr("name","0");
        }
        var isshow=$(this).parent().parent().children(".isshow").children("input").attr("name");
        var isnew=$(this).parent().parent().children(".isnew").children("input").attr("name");
        $.ajax({
            type:"get",
            url:"alert_state",
            data:{isshow:isshow,isnew:isnew,goodsid:goods_id},
        });
    });

    //删除操作
    $(".btn-danger").click(function () {
        var goodsid=$(this).parent().siblings(".goodsid").text();
        // console.log(goodsid);
        // return;
        var that=$(this);
        remind("确定删除这件商品?",function () {
            $.ajax({
                type:"get",
                url:"del_goods",
                data:{goodsid:goodsid},
                success:function (msg) {
                    if(msg==1){
                        that.parents("tr").hide();
                    }
                }
            });
        })
    });

    //修改商品信息
    $(".edit").click(function () {
        var goodsid=$(this).parent().siblings(".goodsid").text();
        var goodsname=$(this).parent().siblings(".goodsname").text();
        var goodstype=$(this).parents("tr").find(".goodstype").text();
        var goodsprice=$(this).parent().siblings(".price").text();
        var goodscount=$(this).parent().siblings(".goodscount").text();
        var goodssize=$(this).parent().siblings(".goodssize").text();
        var goodsweight=$(this).parent().siblings(".goodsweight").text();
        var goodsmaterial=$(this).parent().siblings(".goodsmaterial").text();
        $(".hidden_id").val(goodsid);
        $(".b").val(goodstype);
        $(".a").val(goodsname);
        $(".c").val(goodsprice);
        $(".d").val(goodssize);
        $(".e").val(goodsmaterial);
        $(".f").val(goodsweight);
        $(".g").val(goodscount);
    });

    $('.table tbody').paginathing({
        perPage: 7,
        insertAfter: '.table',
        pageNumbers: true,
        firstText:"首页",
        lastText:"尾页"
    });





});