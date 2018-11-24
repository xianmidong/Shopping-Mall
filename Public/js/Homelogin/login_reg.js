$(function () {
    //显示遮罩
    $(".li").click(function () {
        if ($(".li>a").text()=="登录/注册"){
        $(".login_reg").css("display","block");
        $("body").css("overflow","hidden");
        }
        
    });
    //关闭遮罩
    $(".login_box>img").click(function () {
        $(".login_reg").css("display","none");
        $("body").css("overflow","auto");
    });

    //可见
    $(".d,.b").find(".block").mousedown(function () {
            $(this).siblings("input").attr("type","text");
    }).mouseup(function () {
        $(this).siblings("input").attr("type","password");
    });

    // 登录注册功能
    $("body").on("click",".btn span",function () {
        $(this).css({
            backgroundColor:"rgb(19,139,139)",
            color:" #FFFFFF",
        });
        $(this).siblings().css(
            {
                backgroundColor:"white",
                color:" #333333",
            }
        );
        if($(this).text()=="注册"){
            $(".log").css("display","none");
            $(".reg").css({display:"block"});
        }else {
            $(".log").css({display:"block"});
            $(".reg").css({display:"none"});
        }
    });

      //验证码计时、发送验证码
       var verify_code;
      $(".verfy .send").click(function () {
          var tel=$("input[type=tel]").val();
          $.ajax({
              type:"post",
              url:"http://localhost/furniture/Admin/Userlogin/send_code",
              data:"telphone="+tel,
              success:function (msg) {
                  var arr=JSON.parse(msg);
                   verify_code=arr.k;
                  console.log(arr);
                  setTimeout(function () {
                       verify_code=undefined;
                   },180000);
              }
          });
           $(this).prop("disabled",true);
            var time=60;
                var a=setInterval(function () {
                    time--;
                    $(".verfy .send").text(time+"s后重新发送");
                    if (time < 0) {
                        clearInterval(a);
                        $(".verfy .send").text("发送验证码");
                        $(".verfy .send").prop("disabled",false);
                    }},1000);
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


      //登录验证
        $(".logbtn").click(function () {
            var url=window.location.href;
            var username=$(".a>input").val();
            var password=$(".b>input").val();
            if($(".a input").val().length==0){
                remind("请填写您的用户名");
                return false;
            }
            else if($(".b input").val().length==0){
                remind("请填写您的密码");
                return false;
            }
            else {
                $.ajax({
                    type:"post",
                    data:{username:username,userpwd:password},
                    url:"login_check",
                    success: function (msg) {
                            if (msg=="ok"){
                                remind("登入成功!",function () {
                                   window.href=url;
                                   window.location.reload();
                                });
                            }else if(msg=="error") {
                                remind("账号或密码错误,请重新输入!");
                            }
                    }
                })
            }
        });

    //注册验证
    $(".regbtn").click(function () {
        var username = $(".c input").val();
        var tel = $("input[type=tel]").val();
        var password = $(".d input[type=password]").val();
        var code = $(".text>input").val();
        // console.log(username);
        // return;
        // console.log(tel);
        // console.log(password);
        // console.log(code);
        if (username.length == 0 || tel.length == 0 || password.length == 0) {
            remind("信息填写不全!");
            return false;
        }
        if (password.length < 6 || password.length > 32) {
            remind("密码格式错误");
            return false;
        }
        if (!(/^1[34578]\d{9}$/).test(tel)) {
            remind("手机号格式错误!");
            return false;
        }
        if ($(".verfy input").val() == 0) {
            remind("请填写验证码!");
            return false;
        }
        if ($(".circle input").prop("checked") == false) {
            remind("你必须同意我们的规定才能注册!");
            return false;
        }
        if (code == verify_code) {
            $.ajax({
                type: "post",
                url: "http://localhost/furniture/Admin/Userlogin/resit_verify",
                data: {username: username, password: password, telphone: tel},
                success: function (msg) {
                    if (msg == 1) {
                        remind("恭喜你注册成功!", function () {
                            $(".c input").val("");
                            $("input[type=tel]").val("");
                            $(".d input[type=password]").val("");
                            $(".text>input").val("");
                            $(".btn span:first").trigger("click");
                        })
                    } else {
                        remind("注册失败!")
                    }
                }
            });

        } else {
            remind("验证码输入错误!");
        }
    });

            //验证手机号/用户名是否被注册
    $(".c>input[type=text],.user>input[type=tel]").blur(function () {
          var that=$(this);
          var val=$(this).val();
          $.ajax({
              type:"get",
              data:{val:val},
              url:"http://localhost/furniture/Admin/Userlogin/blur_event",
              success:function (msg) {
                  if (msg == 1) {
                      that.next().show();
                      $(".regbtn").css("disabled",true);
                  }
              }
          })
      }
    ).focus(function () {
        $(this).next().hide();
        $(".regbtn").css("disabled",false);
    });


    //验证点击个人信息和购物车时是否登录
    $(".cart_icon>img").click(function () {
        $.ajax({
            url:"has_login",
            success:function (msg) {
                if (msg == 0) {
                    remind("请先登录!")
                }else if (msg == 1) {
                    window.location="shoppingcar";
                }
            }
        });
    });

    $(".login img").click(function () {
        $.ajax({
            url:"has_login",
            success:function (msg) {
                if (msg == 0) {
                    remind("请先登录!")
                }else if (msg == 1) {
                    window.location="personal";
                }
            }
        });
    });

    //退出登录
    $(".out").click(function () {
        window.location="logout";
    });


});