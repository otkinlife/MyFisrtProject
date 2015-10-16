<?php
/**
* 工具类
*/
class Tools 
{
	
	//echo
	public function testEcho($arg){
		echo $arg;
		exit();
	}

	//echo1
	public function testEchoA(){
		echo "到这步还是可以的哦~，O(∩_∩)O~~！";
		exit();
	}

	//print
	public function testPrint($arr){
		echo "<pre>";
		print_r($arr);
		echo "</pre>";
		exit();
	}
}