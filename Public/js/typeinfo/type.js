
$(function () {//Jquery入口函数

    //提示框
    function remind(word,fn){
        var popup = new Popup({
            'type': 'submit',
            'title': "提示",
            'text': word,
            'submitCallBack':fn
        })
    }

        $("table").delegate(".btn-info","click",function () {
                var type_name=$(this).parent().siblings(".name").text();
                var type_note=$(this).parent().siblings(".note").text();
                var type_id=$(this).parent().siblings(".typeid").text();
                $(".a").val(type_name);
                $(".form-group textarea").text(type_note);
                $(".hide").val(type_id);
                $(".edit").show();
        });

        $(".close").click(function () {
            $(".edit").hide();
        });

        //删除类型
        $("body").delegate(".btn-danger","click",
            function () {
                var typename=$(this).parent().siblings(".name").text();
                var typeid=$(this).parent().siblings(".typeid").text();
                var that=$(this);
                remind( '你将删除 '+typename+" 这个类型,"+"是否确定?",function () {
                    $.ajax({
                        type:"get",
                        url:"queryGoodsbytypename",
                        data:{typename:typename},
                        success:function (msg) {
                           if (msg == 1) {
                               remind("该类型下已有商品,您不能删除!")
                           }else if(msg==0){
                               $.ajax({
                                   type:"get",
                                   url:"del_type",
                                   data:{typeid:typeid},
                                   success:function (msg) {
                                       if (msg == 1) {
                                           that.parent().parent().hide();
                                       }
                                   }
                               });
                           }
                        }
                    });
                });
            }
        );
            //添加类型
        $(".add").click(function (e) {
                e.preventDefault();
                var typename=$("#exampleInputName2").val();
                var typenote=$("#exampleInputEmail2").val();
                if (typename.length == 0 || typenote.length == 0) {
                   remind("信息填写不全!");
                    return false;
                }
                $.ajax({
                    type:"get",
                    url: "../Typeinfo/add_type",
                    data:{typename:typename,typenote:typenote},
                    success:function (msg) {
                        if (msg == 2) {
                            remind("类型添加失败!")
                        }else if (msg == 1) {
                            remind("类型添加成功!",function () {
                                $("#exampleInputName2,#exampleInputEmail2").val("");
                                window.location="show_type";
                            })
                        }else if(msg==0){
                           remind("该类型已存在!")
                        }
                    }
                })
        });
    $('.table tbody').paginathing({
        perPage: 6,
        insertAfter: '.table',
        pageNumbers: true,
        firstText:"首页",
        lastText:"尾页"
    });
});
