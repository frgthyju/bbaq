<?php

    //修改数据
    require_once "../../backend/class/DBTool.php";
    require_once "../../backend/check_login.php";

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $workunit = $_POST["workunit"];

    //执行sql修改语句
    $conn = new DBTool();
    $sql = "insert into userinfo(name,phone,address,workunit)
           values ('$name','$phone','$address','$workunit')";
    $res = $conn->exe_mod($sql);

    //返回参数0代表添加失败，
    //返回参数1代表添加成功，
    //返回参数2表示没有受影响数据
    echo json_encode($res);
?>