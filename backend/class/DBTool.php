<?php
  class DBTool
  {
      private $mysqli = null;                 //数据库对象
      private static $host = "127.0.0.1";     //主机
      private static $user = "root";          //用户名
      private static $pwd  = "tt67z8910zh";   //密码
      private static $db   = "bbaq";          //数据库

      function __construct(){
         $this->mysqli = new mysqli(self::$host,self::$user,self::$pwd,self::$db);

         //数据库连接失败
         if($this->mysqli->connect_error){
             die("连接失败".$this->mysqli->connect_error);
         }
         $this->mysqli->query("set names utf8");//PHP以utf8的方式来操作数据库
      }

      //查询数据库
      public function exe_select($sql){
          $res = $this->mysqli->query($sql) or die("查询失败，原因是".$this->mysqli->error);
          return $res;
      }

      //添加、修改、删除数据
      public function exe_mod($sql){
          $res = $this->mysqli->query($sql) or die("修改数据库失败，原因是".$this->mysqli->error);

          //操作数据失败
          if(!$res){
              return 0;
          }else{
            if($this->mysqli->affected_rows>0){//操作成功
                return 1;
            }else{//数据没有修改
                return 2;
            }
          }
      }

      //关闭数据库连接
      public function finish(){
          $this->mysqli->close();
      }

  }

?>