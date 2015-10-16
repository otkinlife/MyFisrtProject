<?php
require 'Base/sqlhelper.php';
//设置编码
header("Content-Type: text/html; charset=UTF-8");

$sqlh = new SqlHelper();
$sqlh->connectSql();
$sql = "select * from user";
$result = $sqlh->sqlArray($sql);
print_r($result);
$sqlh->closeSql();

?>