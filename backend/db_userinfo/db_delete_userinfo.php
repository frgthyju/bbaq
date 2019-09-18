<?php

//修改数据
require_once "../../backend/class/DBTool.php";
require_once "../../backend/check_login.php";

$id = $_POST["id"];
//echo json_encode($id);

//执行sql修改语句
$conn = new DBTool();
$sql = "delete from userinfo where id = '$id' ";

$res = $conn->exe_mod($sql);

//返回参数0代表删除失败，
//返回参数1代表删除成功，
//返回参数2表示没有受影响数据
echo json_encode($res);

?>