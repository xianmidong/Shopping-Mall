$(function () {
    // span不可被选
    $("body").on("selectstart","span",function () {
        return false;
    });
//如果在购物车页面清空浏览器数据，页面应跳转到首页

    $('.all_choise').iCheck({
        checkboxClass: 'icheckbox_square-green',
        radioClass: 'iradio_square-green',
        increaseArea: '10%',
        labelHover: true,
    });
    $('.alone_choise').iCheck({
        checkboxClass: 'icheckbox_square-green',
        radioClass: 'iradio_square-green',
        increaseArea: '10%',
        labelHover: true,
    });
    $('.all_choise,.alone_choise').on('ifClicked', function(event){
        if($(this).prop("checked")){
            $(this).iCheck('uncheck');
        }else {
            $(this).iCheck('update');
        }
    });
    //全选按钮事件监听
    $(".all_choise").on("ifChecked ifUnchecked",function (event) {
            if (event.type == "ifChecked") {
            $(".alone_choise").iCheck("check");
            acount();// $(".all_choise").iCheck("uncheck");
            }else {
                    $(".alone_choise").iCheck("uncheck");
                    $(".sum a").text(0);
                    $(".has_choise span").text(0);
            }
    });
    // $(".all_choise").on("ifUnchecked",function () {
    //     $(".alone_choise").iCheck("uncheck");
    //     $(".sum a").text(0);
    //     $(".has_choise span").text(0);
    // });
    //单选按钮事件监听
    $(".alone_choise").on("ifChanged",function () {
        var m=parseFloat($(".sum a").text());
        var n=parseInt($(".has_choise span").text());
        var cm=parseFloat($(this).parents("tr").find(".little_count span").text());
        var cn=parseInt($(this).parents("tr").find(".op .num").text());
        var l=$(this).parents("tbody").children().length;

        if($(this).prop("checked")==true){
            $(".sum a").text(m+cm);
            $(".has_choise span").text(n+cn);
        }else{
            $(".sum a").text(m-cm);
            $(".has_choise span").text(n-cn);
        }
        var temp=0;
        $(".alone_choise").each(function (i, e) {
            if ($(".alone_choise").eq(i).prop("checked") == true) {
                temp++;
            }
        });
        if (temp==l){
            $(".all_choise").prop("checked","checked");
        } else {
            $(".all_choise").removeProp("checked");

        }
        $(".all_choise").iCheck("update");

    });
    //数量修改监听
    //plus
    $(".plus").click(function () {
        var sum=0;
        var num=0;
        var price=$(this).parent().prev().find("span").text();
        var this_count=parseInt($(this).next("span").text())+1;
        $(this).next("span").text(this_count);
        $(this).parent().siblings(".little_count").find("span").text(price*this_count);
        $(".alone_choise").each(function (i,e) {
            if ($(".alone_choise").eq(i).prop("checked")==true){
                var m=$(".alone_choise").eq(i).parents("tr").find(".little_count span").text();
                var m1=parseFloat(m);
                var n=$(".alone_choise").eq(i).parents("tr").find(".op .num").text();
                var n1=parseInt(n);
                sum+=m1;
                num+=n1;
                $(".has_choise span").text(num);
                $(".sum a").text(sum);
            }
        });
        if ($(this).parents("tr").find(".alone_choise").prop("checked")==true){
            var number=$(this).parents("tr").find(".num").text();
            var count=$(this).parents("tr").find(".little_count span").text();
            var id=$(this).parents("tr").find(".cart_id").text();
            $.ajax({
                type:"post",
                url:"update_cart",
                data:{number:number,count:count,id:id},
                success:function (msg) {
                    console.log(msg);
                }
            });
        }
    });
    //sub
    $(".sub").click(function () {
        var sum=0;
        var num=0;
        var price=$(this).parent().prev().find("span").text();
        var this_count=parseInt($(this).prev("span").text())-1;
        $(this).prev("span").text(this_count);
        if (this_count < 1) {
            $(this).prev("span").text(1);
            this_count=1;
        }
        $(this).parent().siblings(".little_count").find("span").text(price*this_count);
        $(".alone_choise").each(function (i,e) {
            if ($(".alone_choise").eq(i).prop("checked")==true){
                var m=$(".alone_choise").eq(i).parents("tr").find(".little_count span").text();
                var m1=parseFloat(m);
                var n=$(".alone_choise").eq(i).parents("tr").find(".op .num").text();
                var n1=parseInt(n);
                sum+=m1;
                num+=n1;
                $(".has_choise span").text(num);
                $(".sum a").text(sum);
            }

        });
        if ($(this).parents("tr").find(".alone_choise").prop("checked") == true) {
            var number=$(this).parents("tr").find(".num").text();
            var count=$(this).parents("tr").find(".little_count span").text();
            var id=$(this).parents("tr").find(".cart_id").text();
            $.ajax({
                type:"post",
                url:"update_cart",
                data:{number:number,count:count,id:id},
                success:function (msg) {
                    console.log(msg);
                }
            });
        }
    });




    //总金额和总数量函数
    function acount() {
        var sum_money=0;
        var sum_count=0;
        $(".little_count span").each(function (i,e) {
             sum_money+=parseFloat($(this).text());
        });

        $(".num").each(function () {
            sum_count+=parseInt($(this).text());
        });
         $(".sum a").text(sum_money);
         $(".has_choise span").text(sum_count);
    }
    $('.table tbody').paginathing({
        perPage: 3,
        insertAfter: '.table',
        pageNumbers: true,
        firstText:"首页",
        lastText:"尾页"
    });
    //结算按钮点击事件监听
    $(".acount").click(function () {
        var sum=$(".sum a").text();
        if (sum == 0) {
            remind("你还没选择商品哦!")
        }else{//转到订单生成页面
            var arr=[];
            $(".alone_choise").each(function (i,e) {
                if ($(".alone_choise").eq(i).prop("checked")==true){
                    arr.push($(".alone_choise").eq(i).parents("tr").find(".cart_id").text());
                }
            });
            var allmoney=$(".sum a").text();
            var allnum=$(".has_choise span").text();
            window.location.href="submit_order?id="+arr+"&allmoney="+allmoney+"&allnum="+allnum;
        }
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
    //单一删除事件监听
        $(".del").click(function () {
            var cartid=$(this).parents("tr").find(".cart_id").text();
            var is_check=$(this).parents("tr").find(".alone_choise").prop("checked");
            if (is_check) {
                $.ajax({
                    type:"get",
                    url:"del_fromcart",
                    data:{cartid:cartid},
                    success:function (msg) {
                        if (msg == 1) {
                            window.location.reload();
                        }
                    }
                });
            }
        });

    //批量删除事件
    $(".del_all").click(function () {
        var arr=new Array();
        $(".alone_choise").each(function (i,e) {
           if ($(".alone_choise").eq(i).prop("checked")) {
               var cartid=$(".alone_choise").eq(i).parents("tr").find(".cart_id").text();
               arr.push(cartid);
           }
        });
        $.ajax({
                type:"post",
                url:"del_all",
                data:{ids:arr},
                success:function (msg) {
                   if (msg == 1) {
                       window.location.reload();
                   }
                }
        });
    });
});