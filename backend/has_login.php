<?php
    //require_once "backend/class/SessionManager.php";
     session_start();                                     //php自带session

    //new SessionManager();                                   //使用redis记录session

    //判断是否登录过，并且登录时间在1小时内
    if(isset($_SESSION['admin_name']) && isset($_SESSION['last_access'])){
        if(time()-$_SESSION['last_access'] < 3600){
            $_SESSION['last_access'] = time();
            header("Location:/info.php");
        }else{
            session_destroy();
        }
    }
//?>