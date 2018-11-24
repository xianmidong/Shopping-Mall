$(function () {
        $("body").delegate("input","input",function () {
            if ($(this).next().css("display") === "block") {
                $(this).next().css("display","none");
            }
            $(".error").css("display","none");
        });
        $(":input[type=submit]").click(function (e) {
            e.preventDefault();
            if ($(":input[name=adminname]").val() === "") {
                $(".adminname").css("display","block");
                return false;
            }
            else  if ($(":input[name=password]").val() === "") {
                $(".password").css("display","block");
                return false;
            }else{
                    var adminname=$(":input[name=adminname]").val();
                    var password=$(":input[name=password]").val();
                    $.ajax({
                        url:"http://localhost/furniture/Admin/Adminlogin/login_verify",
                        type:"post",
                        data:{adminname:adminname,password:password},
                        success (msg) {
                            if (msg ==0) {
                                $(".error").css("display","block");
                            }else{
                                window.location="/furniture/Admin/Backindex/back_index";
                            }
                        }
                    });
            }


        });
});