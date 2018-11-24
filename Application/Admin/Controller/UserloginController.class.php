<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/1 0001
 * Time: 下午 1:38
 */

namespace Admin\Controller;
use Admin\Model\PersonalModel;
use Admin\Model\UserinfoModel;

class UserloginController extends ZhenziSmsClient
{
    function resit_verify(){
        $username=$_POST['username'];
        $password=md5(I("password"));
        $telphone=$_POST['telphone'];
        $arr["username"]=$username;
        $arr["userpwd"]=$password;
        $arr["telphone"]=$telphone;
        $arr2["personalname"]=$username;
        $arr2["telphone"]=$telphone;
        $q=new PersonalModel();
        $u=new userinfoModel();
        $result1=$u->resit_user($arr);
        $result2=$q->add_info($arr2);
        if ($result2&&$result1){
            echo 1;
        }else{
            echo 0;
        }
    }
    function blur_event(){
        $one=I("val");
        $q=new UserinfoModel();
        $result=$q->query_someone($one);
       echo $result;

    }

    function send_code(){
        $client=new ZhenziSmsClient("http://sms_developer.zhenzikj.com","100035","ZTlkNmRkZjAtYTg3Zi00YzI0LTlmY2YtMTc0OTc3NmRhMjYz");
        $telphone = I('telphone');
        $verify_code = rand(100000, 999999);
        $word="欢迎注册一方家居网，您的验证码为".$verify_code."该验证码有效时间为3分钟";
        $result=$client->send($telphone,$word);
        $arr = json_decode($result);
        $arr->k = $verify_code;
        $result = json_encode($arr);
        echo $result;
    }
}