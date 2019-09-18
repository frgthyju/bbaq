<?php

    //修改数据
    require_once "../../backend/class/DBTool.php";
    require_once "../../backend/check_login.php";

    $id = $_POST["id"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $workunit = $_POST["workunit"];

    //执行sql修改语句
    $conn = new DBTool();
    $sql = "update userinfo set name='$name', phone = '$phone',address='$address',
            workunit='$workunit' where id = '$id' ";

    $res = $conn->exe_mod($sql);

    //返回参数0代表修改失败，
    //返回参数1代表修改成功，
    //返回参数2表示没有受影响数据
    echo json_encode($res);
?>