<?php
require '/others/libs/Smarty.class.php';

class indexController{
    
    //首页显示
    public function indexAction(){
        $smarty = new Smarty();
        session_start();
        $username = $_SESSION['username'];
        $smarty->assign('username',$username);
        $smarty->display('../templates/index.tpl');
    }
    
    //显示注册页面
    public function showRegisterAction(){
        $smarty = new Smarty();
        $data=array("code"=>"111");
        $smarty->assign('data',$data);
        $smarty->display('../templates/register.tpl');
    }
}