<?php
    if(!defined('APP_ROOT'))define('APP_ROOT',$_SERVER['DOCUMENT_ROOT']);
    require_once(APP_ROOT.'/smarty/use_smarty.php');

    //检查是否使登录过
    require_once(APP_ROOT.'/backend/has_login.php');
//    $tpl->assign('app_root',APP_ROOT);

//    $tpl->assign('info_jump',"<script>window.location.href='/info.php'</script>");
    $tpl->display('tpl.index.html');