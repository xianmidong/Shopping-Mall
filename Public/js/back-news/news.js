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
        var newsid=$(this).parents("tr").find(".newsid").text();
        var that=$(this);
        $.ajax({
            type:"get",
            data:{newsid:newsid},
            url:"del_newsid",
            success:function (msg) {
                if (msg == 1) {
                    that.parents("tr").hide();
                }
            }
        });
    });
    //修改事件
    $(".edit").click(function () {
        var newstitle=$(this).parents("tr").find(".newstitle").text();
        var newsid=$(this).parents("tr").find(".newsid").text();
        var newscontent=$(this).parents("tr").find(".newscontent").text();
        $("#exampleInputPassword3").val(newstitle);
        $("#exampleInputPassword4").val(newscontent);
        $(".idhide").val(newsid);
    });




    $('.table tbody').paginathing({
        perPage: 6,
        insertAfter: '.table',
        pageNumbers: true,
        firstText:"首页",
        lastText:"尾页"
    });

});