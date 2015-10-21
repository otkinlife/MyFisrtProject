<?php
require_once '../libs/Smarty.class.php';
$smarty = new Smarty();
$result = "hello world";
$smarty->assign('var1',$result);
$smarty->display('test.tpl'); 