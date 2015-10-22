<?php
require 'tool.php';
//设置编码
header("Content-Type: text/html; charset=UTF-8");

/**
* 数据库操作类
*/
class SqlHelper 
{
	private $mysqli;
	//构造函数
	function __construct(){
		$this->mysqli = new mysqli("localhost:33060","root","root","myprojects");
		if($this->mysqli->connect_error){
			die("数据库连接失败哦~！".$this->mysqli->connect_error);
		}
		$this->mysqli->query('set names utf8')or die("设置字符集错误哦~！".$this->mysqli->error);
	}

	//返回数组
	public function sqlArray($sql){
		$result = $this->mysqli->query($sql)->fetch_all();
		if($result){
			return $result;
		}else{
			return false;
		}
	}

	//返回记录
	public function sqlRow($sql){

		$result = $this->mysqli->query($sql);

		if($result){
			return $result;
		}else{
			return false;
		}
	}

	//返回json
	public function sqlJson($sql){
		$result = $this->mysqli->query($sql)->fetch_all();
		if($result){
			echo json_encode($result);
		}else{
			return false;
		}

	}

	//返回bool
	public function sqlBool($sql){
		$this->mysqli->query($sql);
		$result = $this->mysqli->affected_rows;
		if($result > 0){
			return true;
		}else{
			return false;
		}
	}

	//返回生成的id
	public function ReturnId($sql){
		$this->mysqli->query($sql);
		$id = $this->mysqli->insert_id;
		if($id){
			return $id;
		}else{
			return false;
		}
	}

	//关闭连接
	function __destruct(){
		$this->mysqli->close();
	}
}