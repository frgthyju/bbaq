<?php
    if(!defined('APP_ROOT'))define('APP_ROOT',$_SERVER['DOCUMENT_ROOT']);
    require_once(APP_ROOT.'/smarty/use_smarty.php');

//    require_once (APP_ROOT.'/backend/check_login.php');
    $tpl->display('tpl.info.html');