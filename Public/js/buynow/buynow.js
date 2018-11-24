$(function () {
    //订单提交时间
    var orderid;
    $("#submit_order").click(function () {
        var address_id=$(".check input:checked").attr("data-tit");
        var total=$(".total span").text();
        var sum=$(".count span").text();
        if (!address_id) {
            remind("请选择收货信息!");
            return false;
        }else{
            $.ajax({
                type:"post",
                url:"write_to_order",
                data:{address_id:address_id,total:total,sum:sum},
                success:function (msg) {
                    orderid=msg;
                    $("#pay").modal();
                }
            });
        }
    });
    //付款按钮点击事件
    $(".btn-primary").click(function () {
        $(".count span").html("");
        $(".total span").html(" ");
        $.ajax({
            type:"get",
            url:"alert_state",
            data:{orderid:orderid},
            success:function (msg) {
                if (msg == 1) {
                    $("#pay").modal("hide");
                    setTimeout(function () {
                        $("#payover").modal();
                        setTimeout(function () {
                            window.location.href="online";
                        },3000);
                    },500);
                }
            }
        });

    });


    //消息框
    function remind(word,fn){
        var popup = new Popup({
            'type': 'submit',
            'title': "提示",
            'text': word,

        })
    }


});