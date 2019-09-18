<?php
    define("APP_ROOT",dirname(__FILE__));
//    require_once APP_ROOT."/class/SessionManager.php";
    session_start();                                     //php自带session
//    new SessionManager();                                   //使用redis记录session
//
    //未登录或未操作时常超过1小时情况下跳转到登录界面
    if(isset($_SESSION['admin_name']) && isset($_SESSION['last_access'])){
        if(time()-$_SESSION['last_access'] < 3600){
            $_SESSION['last_access'] = time();
        }else{
            //echo "111";
            session_destroy();
            header("Location:/index.php");
        }
    }else{
        //echo "222";
        header("Location:/index.php");
    }

?>