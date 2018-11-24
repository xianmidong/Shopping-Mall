$(function () {
    $(".mytype .all").click(function () {
        var text = $(this).text();
        if (text == "个人信息") {
            $(".personal-info").show();
            $(".personal-info").siblings().hide();
        }
        if (text == "我的订单") {
            $(".myorder").show();
            $(".myorder").siblings().hide();
        }
        if (text == "送货地址") {
            $(".delivery-address").show();
            $(".delivery-address").siblings().hide()
        }
        if (text == "我的卡券") {
            $(".juan").show();
            $(".juan").siblings().hide();
        }
        $(this).css({
            borderLeft: "2px solid rgb(19,139,139)",
            color: "rgb(19,139,139"
        });
        $(this).siblings().css({
            borderLeft: "none",
            color: "rgb(51,51,51)"
        });

    });
    $("#came").click(function () {
        $(".icon>input").trigger("click");
    });

    //我的订单
    $(".myorder>ul>li").click(function () {
        var text = $(this).text();
        if (text == "所有订单") {
            $(".all-order").css({display: "block"});
            $(".all-order").siblings().css({display: "none"});
        }
        if (text == "待付款") {
            $(".Unpaid").css({display: "block"});
            $(".Unpaid").siblings().css({display: "none"});
        }
        if (text == "待收货") {
            $(".Uncollected").css({display: "block"});
            $(".Uncollected").siblings().css({display: "none"});
        }
        if (text == "已收货") {
            $(".received").css({display: "block"});
            $(".received").siblings().css({display: "none"});
        }
        $(this).css({
            background: "rgb(19,139,139)",
            color: " #FFFFFF"
        });
        $(this).siblings().css({
            background: " rgb(239, 240, 240)",
            color: " #333333"
        });


    });

    //送货地址显示
    //市
    $(".getcity").click(function () {
        var pid = $(this).val();
        $.ajax({
            url: "getcity",
            type: "post",
            data: {pid: pid},
            success: function (msg) {
                var cityarr = (eval("(" + msg + ")"));
                var city = document.getElementById("city");
                city.options.length = 0;
                for (var i = 0; i < cityarr.length; i++) {
                    var option = document.createElement('option');
                    option.value = cityarr[i].cid;
                    option.text = cityarr[i].city;
                    city.append(option);
                }
            }

        });
    });

    //封装消息框
    function remind(word, fn) {
        var popup = new Popup({
            'type': 'submit',
            'title': "提示",
            'text': word,
            'submitCallBack': fn,
        })
    }


    //添加地址
    $("#addre-mybtn").click(function () {
        var p = $(".getcity option:selected");
        var provicial = p.text();
        var select = $("#city option:selected");
        var city = select.text();
        var detail_address = $("input[name=detail_address]").val();
        var address = provicial + city + detail_address;
        var consignee = $(".Consignee input").val();
        var telphone = $(".phone input").val();
        $.ajax({
            url: "add_address",
            type: "post",
            data: {consignee: consignee, telphone: telphone, address: address},
            success: function (msg) {
                if (msg) {
                    var data = $("<div class=\"address-data\">" +
                        "<div class=\"check\"><input hidden type=\"checkbox\" tit=" + msg + "></div>" +
                        "<div class=\"addre \">" +
                        "<span>" + consignee + "</span>" +
                        "<span style=\"padding: 0 10px 0 10px\">" + telphone + "</span>" +
                        "<span>" + address + "</span>" +
                        "</div>" + "<div class=\"del\">删除</div>" + "</div>");
                    $(".address-box").append(data);
                }
            }
        });
    });

    //删除
    $(".address-box").on("click", ".del", function () {
        var addressid = $(this).siblings(".check").find("input").attr("tit");
        console.log(addressid);
        var that = $(this);
        remind("确定删除？", function () {
            $.ajax({
                    type: "get",
                    url: "del_address",
                    data: {addressid: addressid},
                    success: function (msg) {
                        if (msg == 1) {
                            that.parent().hide();
                        }
                    }
                }
            );
        });
    });
    //初始化滚动条
    var customScroll = new scrollbot(".all-order", 8);
    var customScroll_one = new scrollbot(".Unpaid", 8);
    var customScroll_two = new scrollbot(".Uncollected", 8);
    var customScroll_three = new scrollbot(".received", 8);

    //订单里按钮的点击事件
    $(".myorder button").click(function () {
        var text = $(this).text();
        var orderid=$(this).parent().siblings(".one").find(".ordernum a").text();
        var that=$(this);
        if (text == "现在支付") {
           var  num = 1;
            $.ajax({
                url: "update",
                type: "post",
                data: {orderstate: num,orderid:orderid},
                success: function (msg) {
                    if (msg == 1) {
                       that.parents(".order-data").hide();

                    }
                }
            });
        }
        else if (text == "确认收货") {
            that.parents(".order-data").hide();
            
        }


    });

});