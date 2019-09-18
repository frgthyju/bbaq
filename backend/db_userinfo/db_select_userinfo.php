<?php

    //查询所有数据
    require_once "../../backend/class/DBTool.php";
    require_once "../../backend/check_login.php";
    require_once "../../backend/class/Userinfo.php";

    $page_id = $_POST['page_id'];                                          //查阅的页码

    //执行sql查询
    $conn = new DBTool();
    $before_num = ($page_id-1)*10;
    $sql = "select * from userinfo limit $before_num,10";                  //查询单页信息
    $sql_count = "select count(*) as num from userinfo";                  //总的数据量
    $res = $conn->exe_select($sql);
    $res_count = $conn->exe_select($sql_count);

    $page_num=ceil((int)mysqli_fetch_assoc($res_count)['num']/10);  //分页数量


    if ($res->num_rows > 0) {
        while($row = mysqli_fetch_array($res,MYSQLI_ASSOC)){
            $user = new Userinfo();
            $user->id = $row["id"];
            $user->name = $row["name"];
            $user->phone = $row["phone"];
            $user->address = $row["address"];
            $user->workunit = $row["workunit"];
            $data[] = $user;
        }
       // echo json_encode($data);
    }else {
        $data = "no_info";
        //echo json_encode("no_info");
    }

    $info['page_num'] = $page_num;
    $info['data'] = $data;
    $info['page_id'] = $page_id;

    echo json_encode($info);
?>