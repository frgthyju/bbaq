<?php
    require_once "../../backend/class/DBTool.php";
    require_once "../../backend/check_login.php";
    require_once "../../backend/class/Userinfo.php";

    //查询具体员工信息
    if(isset($_POST['id'])){
        //执行sql查询
        $conn = new DBTool();
        $sql = "select * from userinfo where id=".$_POST['id'];
        $res = $conn->exe_select($sql);

        if ($res->num_rows > 0) {
            while($row = mysqli_fetch_array($res,MYSQLI_ASSOC)){
                $user = new Userinfo();
                $user->id = $row["id"];
                $user->name = $row["name"];
                $user->phone = $row["phone"];
                $user->address = $row["address"];
                $user->workunit = $row["workunit"];
            }
            echo json_encode($user);
        }else {
            echo json_encode("no_user_info");
        }

    }else{
        echo json_encode("no_user_info");
    }

?>