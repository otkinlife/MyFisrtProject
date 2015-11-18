<?php
define('APPPATH', trim(__DIR__,'/'));
try {
    //获取路由入口文件地址
    $routerpath = $_SERVER['SCRIPT_NAME'];
    //获取请求地址
    $request = $_SERVER['REQUEST_URI'];
    //截取请求的控制器方法
    $url = trim(str_replace($routerpath, "", $request), '/');
    //截取控制器方法名
    $arr = explode('/',$url);
    
    //如果控制器名为空，默认实例化index
    if(empty($arr['0'])){
        $con_name = "indexController";
    }else {
        $con_name = $arr['0']."Controller";
    }
    
    //判断是否有参数
    $isarg = strstr($arr['1'],'?');
    if($isarg){
        $str = explode('?',$arr['1']);
        $arg = explode('=',$str['1']);
        //如果方法名为空，默认实例化index
        if(empty($str['0'])){
            $func_name = "indexAction";
        }else{
            $func_name = $str['0']."Action";
        }
    }else {
        if(empty($arr['1'])){
            $func_name = "indexAction";
        }else{
            $func_name = $arr['1']."Action";
        }
    }
    //print_r($arr);
    
    include(APPPATH . '/Controller/' . $con_name . '.php');
        $router = new $con_name();
        $router ->$func_name();
}catch (Exception $e){
    echo $e->getMessage();
}

//print_r($arr);