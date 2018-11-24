$(function () {

    //防止span元素选中
    $("body").on("selectstart","span",function () {
        return false;
    });
    //数量加减
    $("#plus").click(function () {
        var value=parseFloat($(this).next().text());
        $(this).next().text(value+1);
    });
    $("#sub").click(function () {
        var value=parseFloat($(this).prev().text());
        $(this).prev().text(value-1);
        if (value <= 1) {
            $(this).prev().text(1);
        }
    });
    //加入购物车和立即购买时判断是否登录
        $(".addcart").click(function () {
            $.ajax({
                type:"get",
                url:"has_login",
                success:function (msg) {
                    if (msg == 0) {
                        remind("请先登录!");
                    }else{
                        var username=$(".name").text();
                        var goodsid=$(".goods-id").text();
                        var goodsimg=$("li img").prop("src");
                        var goodsname=$(".goodsname").text();
                        var goodscolor=$(".out-circle span").css("backgroundColor");
                        var goodsprice=$(".price span").text();
                        var goodscount=$("#count-text").text();
                        var sum=goodsprice*goodscount;
                        if (!goodscolor) {
                            remind("请至少选择一种颜色!");
                            return false;
                        }else {
                        $.ajax({
                            type:"post",
                            url:"add_to_cart",
                            data:{username:username,goodsid:goodsid,goodsimg:goodsimg,
                            goodsname:goodsname,goodscolor:goodscolor,goodsprice:goodsprice,
                                goodscount:goodscount,sum:sum
                            },
                            success:function (msg) {
                               if (msg == 1) {
                                   $("#myModal").modal("show");
                                   setTimeout(function () {
                                       $("#myModal").modal("hide");
                                   },1000);
                               }

                            }
                        });
                        }
                    }
                }

            });
        });
        $(".nowpay").click(function () {
        $.ajax({
            type:"get",
            url:"has_login",
            success:function (msg) {
                if (msg == 0) {
                    remind("请先登录!");
                }else{
                    var goodscolor=$(".out-circle span").css("backgroundColor");
                    if (!goodscolor) {
                        remind("请至少选择一种颜色!");
                        return false;
                    }else {
                        var goodsid=$(".goods-id").text();
                        var goodsname=$(".goodsname").text();
                        var goodsprice=$(".price span").text();
                        var goodscount=$("#count-text").text();
                        var sum_money=goodsprice*goodscount;
                        window.location.href="buy_now?goodsid="+goodsid+"&goodsname="+goodsname+"&goodsprice="+
                        goodsprice+"&goodscount=+"+goodscount+"&summoney="+sum_money;
                    }

                }
            }

        });
    });


    //提示框
    function remind(word,fn){
        var popup = new Popup({
            'type': 'submit',
            'title': "提示",
            'text': word,
            'submitCallBack':fn
        })
    }
    //颜色选择
    $(".in-circle").click(function () {
        $(this).parent().addClass("out-circle");
        $(this).parent().siblings().removeClass("out-circle");
    });


    //轮播初始化
    $(document).ready(function(){
        $('#partial-view').partialViewSlider({

        });
    });
});