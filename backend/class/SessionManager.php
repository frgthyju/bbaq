<?php
    class SessionManager
    {
        private $redis;
//        private $session_save_path;
//        private $session_name;
        private $session_expire_time = 3600;

        public function __construct()
        {
            //连接redis数据库
            $this->redis = new Redis();
            $this->redis->connect('127.0.0.1',6379) || die('连接redis服务器失败');
            //$this->redis->auth('tt67z8910zh');
            $this->redis->select(0); //选择0号数据库

            //设置用户自定义会话存储函数
            session_set_save_handler(
                array($this,"open"),
                array($this,"close"),
                array($this,"read"),
                array($this,"write"),
                array($this,"destroy"),
                array($this,"gc")
            );
            session_start();
        }

        //open回调函数类似于类的构造函数，在会话打开的时候会被调用。
        //是自动开始会话或者通过调用session_start()后第一个被调用的回调函数
        //回调函数成功返回TRUE
        public function open(){
            return TRUE;
        }

        //类似于析构函数的回调函数
        //在write回调函数调用之后调用
        //当调用session_write_close()函数之后返回TRUE
        public function close(){
            return TRUE;
        }

        //如果会话中有数据，将返回序列化字符串
        //无数据则返回空字符串
        //自动开始会话或调用session_start()后，
        //通过该函数返回值填充$_seesion函数
        public function read($id){
            $value = $this->redis->get($id);
            if($value){
                return $value;
            }else{
                return '';
            }
        }

        //保存会话数据时调用
        //会将$_SESSION中的值填充到redis中
        public function write($id,$data){
            if($this->redis->set($id,$data)){
                $this->redis->expire($id,$this->session_expire_time);
                return TRUE;
            }else{
                return FALSE;
            }
        }

        //使用session_destroy()函数时调用
        public function destroy($id){
            if($this->redis->delete($id)){
                return TRUE;
            }else{
                return FALSE;
            }
        }

        //垃圾回收函数
        //会不定时的清理
        public function gc(){
            return TRUE;
        }

        public function __destruct()
        {
            // TODO: Implement __destruct() method.
            session_write_close();
        }
    }

?>