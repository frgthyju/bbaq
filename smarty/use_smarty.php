<?php
    include("./smarty/libs/Smarty.class.php");
    define('SMARTY_ROOT','./smarty/tpls');
    $tpl = new Smarty();
    //文件路径
    $tpl->template_dir = SMARTY_ROOT."/templates/";            //模板文件
    $tpl->compile_dir = SMARTY_ROOT."/templates_c/";           //编译文件
    $tpl->config_dir = SMARTY_ROOT."/configs/";                //配置文件
    $tpl->cache_dir = SMARTY_ROOT."/cache/";                   //缓存文件
    $tpl->caching=1;
    $tpl->cache_lifetime=60*60*24;


