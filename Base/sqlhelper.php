<?php
require 'Base/tool.php';
//设置编码
header("Content-Type: text/html; charset=UTF-8");

/**
* 数据库操作类
*/
class SqlHelper 
{
	private $connect;

	//连接数据库
	public function connectSql()
	{
		$this->connect = mysql_connect('localhost','root','root');
		if (!$this->connect) {
			die('连接失败哦~: ' . mysql_error());
		}
		mysql_select_db('myproject',$this->connect);
	}

	//返回数组
	public function sqlArray($sql){
		$result = array();
		$tools = new Tools();
		$resquery = mysql_query($sql,$this->connect);
		$row = mysql_fetch_assoc($resquery);
		while ($row = mysql_fetch_assoc($resquery)) {
			$result[] =  $row;
		}
		return $result;
	}

	//返回bool
	public function sqlBool(){

	}

	//关闭连接
	public function closeSql(){
		mysql_close($this->connect);
	}
}