<?php
//路由配置

require '../controller/userController.php';
$rooter = '';
if(!empty($_GET['rooter'])){
    $rooter = $_GET['rooter'];
}else{
    echo "路径错误";
}

//分别拿到控制器名和方法名
$arr = explode("/",$rooter);
//print_r($arr);
//exit();
$controller = $arr['0']."Controller";
$function = $arr['1']."Action";
$service = new $controller();
$service->$function();
