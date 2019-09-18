<?php

    require_once "../backend/check_login.php";
    require_once "../backend/class/SessionManager.php";
    
    session_destroy();

    //session_status=0表示session被禁用
    //session_status=1表示session开启但是不存在值
    //session_status=2表示session开启并且存在值
    if(session_status() == 1){
        echo json_encode("success");
    }else echo json_encode("fail");
?>