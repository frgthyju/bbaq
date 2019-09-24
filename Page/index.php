<?php
    if(!defined('APP_ROOT'))define('APP_ROOT',$_SERVER['DOCUMENT_ROOT']);
    require_once(APP_ROOT.'/smarty/use_smarty.php');

    $tpl->display('tpl.index.html');