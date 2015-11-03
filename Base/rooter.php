<?php
//路由配置

require '../controller/UserController.php';
require '../controller/ThingController.php';
require '../controller/CommentController.php';

$rooter = '';
if(!empty($_GET['rooter'])){
    $rooter = $_GET['rooter'];
}else{
    echo "路径错误";
}
try{
//分别拿到控制器名和方法名
    $arr = explode("/",$rooter);
//print_r($arr);
//exit();
    $controller = $arr['0']."Controller";
    $function = $arr['1']."Action";
    $arg1 = $arr['2'];
    $arg2 = $arr['3'];
    $arg3 = $arr['4'];
    $service = new $controller();
    if(empty($arg1)){
        if(empty($arg2)){
            if(empty($arg3)){
                $service->$function();
            }else{
                $service->$function(null,null,$arg3);
            }
        }else{
            if(empty($arg3)){
                $service->$function(null,$arg2,null);
            }else{
                $service->$function(null,$arg2,$arg3);
            }
        }
    }else{
        if(empty($arg2)){
            if(empty($arg3)){
                $service->$function($arg1);
            }else{
                $service->$function($arg1,null,$arg3);
            }
        }else{
            if(empty($arg3)){
                $service->$function($arg1,$arg2,null);
            }else{
                $service->$function($arg1,$arg2,$arg3);
            }
        }
    }
}catch (Exception $e){
    echo "路径错误";
    exit();
}
