<?php
require 'Base/sqlhelper.php';
//设置编码
header("Content-Type: text/html; charset=UTF-8");

$sqlh = new SqlHelper();

$sql = "select * from user";
$sqlh->sqlArray($sql);
$sqlh->sqlJson($sql);

?>