
             $(function () {//Jquery入口函数
                $("body").delegate("span,img","selectstart",function () {
                    return false;
                });
                 function formateDate() {
                     // 获取年月日时分秒值
                     var time=new Date();
                     var year = time.getFullYear();
                     var month = ("0" + (time.getMonth() + 1)).slice(-2);
                     var date = ("0" + time.getDate()).slice(-2);
                     var day=time.getDay();
                     var hour = ("0" + time.getHours()).slice(-2);
                     var minute = ("0" + time.getMinutes()).slice(-2);
                     //var minute=time.getMinutes();
                     var second = ("0" + time.getSeconds()).slice(-2);
                         var result = year + "-"+ month +"-"+ date +" "+ hour +":"+ minute +":" + second;
                          $(".date span").eq(0).text(result);
                         switch (day) {
                             case 1: $(".date span").eq(1).text("星期 一");break;
                             case 2:   $(".date span").eq(1).text("星期 二");break;
                             case 3: $(".date span").eq(1).text("星期 三");break;
                             case 4: $(".date span").eq(1).text("星期 四");break;
                             case 5: $(".date span").eq(1).text("星期 五");break;
                             case 6: $(".date span").eq(1).text("星期 六");break;
                             case 0: $(".date span").eq(1).text("星期 日");break;
                         }

                 }
                 setInterval(formateDate,1000);
             });
