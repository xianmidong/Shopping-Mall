$(function () {

        $(".nav-tabs li").eq(0).click(function () {
            $(".container").show();
            $(".add_detail").hide();
            $(this).addClass("active");
            $(this).siblings().removeClass("active");
        });
        $(".nav-tabs li").eq(1).click(function () {
            $(".container").hide();
            $(".add_detail").show();
            $(this).addClass("active");
            $(this).siblings().removeClass("active");
        });

        //删除事件
        $(".btn-danger").click(function () {
            var detailid=$(this).parents("tr").find(".detail_id").text();
            var that=$(this);
            $.ajax({
                type:"get",
                data:{detailid:detailid},
                url:"del_detail",
                success:function (msg) {
                    if (msg == 1) {
                        that.parents("tr").hide();
                    }
                }
            });
        });
        //修改事件
    $(".edit").click(function () {
        var goodsname=$(this).parents("tr").find(".goods_name").text();
        var id=$(this).parents("tr").find(".detail_id").text();
        $("#a").val(goodsname);
        $(".idhide").val(id);
    });








    $('.table tbody').paginathing({
        perPage: 6,
        insertAfter: '.table',
        pageNumbers: true,
        firstText:"首页",
        lastText:"尾页"
    });

});