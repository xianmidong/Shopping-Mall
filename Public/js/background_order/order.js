//分页
$(function () {
    $('.table tbody').paginathing({
        perPage: 8,
        insertAfter: '.table',
        pageNumbers: true,
        firstText:"首页",
        lastText:"尾页"
    });
    $(".no-pay").parents("tr").addClass("warning");//未付款的行添加警告样式

    //删除按钮事件监听
    $(".btn-danger").click(function () {
        if ($(this).parent().siblings(".is_pay").text() == "未付款") {
            $("#myModal").modal("show");
            setTimeout(function () {
                $("#myModal").modal("hide");
            },1000);
        }else{
            var orderid=$(this).parents("tr").find(".orderid").text();
            var that=$(this);
            $.ajax({
                type:"get",
                url:"del_pay_order",
                data:{orderid:orderid},
                success:function (msg) {
                    if (msg == 1) {
                        that.parents("tr").hide();
                    }
                }
            });
        }
    });
});
