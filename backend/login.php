<?php

    header("Access-Control-Allow-Origin: *"); // 允许任意域名发起的跨域请求
    require_once "../backend/class/DBTool.php";
    //require_once "../backend/class/SessionManager.php";

    if(isset($_POST['username']) && isset($_POST['passwd'])) { //用户名密码完整
        $username = $_POST['username'];
        $passwd = $_POST['passwd'];

        //执行sql查询
        $conn = new DBTool();
        $sql = "select * from admin where username = '$username' and passwd = '$passwd'";
        $res = $conn->exe_select($sql);

        if ($res->num_rows == 1) {
            while ($row = $res->fetch_assoc()) {
//                //创建session
//                session_start();
//                $_SESSION['admin_name'] = $row['username'];
//                $_SESSION['last_access'] = time();

                //使用redis创建session
              //  new SessionManager();
                session_start();
                $_SESSION['admin_name'] = $row['username'];
                $_SESSION['last_access'] = time();

                echo json_encode("success");
            }
        }else if($res->num_rows > 1){
            echo json_encode("more_user");
        } else {
            echo json_encode("no_info");
        }

        $conn->finish();      //关闭数据库连接
    }else{
        echo  json_encode("lack_info");
    }
?>