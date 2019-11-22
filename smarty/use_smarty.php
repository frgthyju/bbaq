<?php
    if(!defined('APP_ROOT'))define('APP_ROOT',$_SERVER['DOCUMENT_ROOT']);
    include(APP_ROOT."/smarty/libs/Smarty.class.php");

    define('SMARTY_ROOT',APP_ROOT);
    $tpl = new Smarty();
    //文件路径
    $tpl->template_dir = SMARTY_ROOT."/template/";                  //模板文件
    $tpl->compile_dir = SMARTY_ROOT."/template_c/";                 //编译文件
//    $tpl->config_dir = SMARTY_ROOT."/configs/";                   //配置文件
    $tpl->cache_dir = SMARTY_ROOT."/cache/";                        //缓存文件
//    $tpl->caching = 1;
//    $tpl->cache_lifetime = 3600*24;
    $tpl->setCaching(Smarty::CACHING_LIFETIME_CURRENT);    //开启缓存
    $tpl->setCacheLifetime(3600*24);                  //设置缓存时间


