<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/10/18
 * Time: 22:01
 */

require "../model/userModel.php";
require_once '../libs/Smarty.class.php';
class UserController{

    //用户注册显示
    public function showadduserAction(){
        $smarty = new Smarty();
        $result = array(
            'code' => '',
            'message' => '',
            'res' => ''
        );
        $smarty->assign('data',$result);
        $smarty->display('../templates/register.tpl');
    }
    //用户登录显示
    public function loginAction(){ 
        $smarty = new Smarty();
        $result = array(
            'code' => '',
            'message' => '',
            'res' => ''
        );
        $smarty->assign('data',$result);
        $smarty->display('../templates/login.tpl');
    }
    
    //主页显示
    public function indexAction(){
        $smarty = new Smarty();
        session_start();
        $useremail = $_SESSION['useremail'];
        //echo $_SESSION['useremail'];
        $smarty->assign('useremail',$useremail);
        $smarty->display('../templates/index.tpl');
    }

    //显示个人
    public function showpersonAction(){
        $smarty = new Smarty();
        session_start();
        $useremail = $_SESSION['useremail'];
        //echo $_SESSION['useremail'];
        $smarty->assign('useremail',$useremail);
        $smarty->display('../templates/personal.tpl');
    }

    //增加用户
    public function adduserAction(){
        $smarty = new Smarty();
        $useremail = $_POST['emailname'].$_POST['email'];
        $username = $_POST['username'];
        $userpwd = $_POST['userpwd'];
        $userModel = new userModel();
        $flag = $userModel->addUser($useremail,$username,$userpwd);
        if($flag){
            $result = array(
                'code' => '001',
                'message' => '恭喜，注册成功',
                'res' => $flag 
            );
        }else {
            $result = array(
                'code' => '000',
                'message' => '抱歉，注册失败',
                'res' => $flag
            );
        }
        $smarty->assign('data',$result);
        $smarty->display('../templates/register.tpl');
    }

    //检查用户
    public function checkUserAction(){
        $smarty = new Smarty();
        session_start();
        $useremail = empty($_POST['useremail'])?'':$_POST['useremail'];
        $userpwd = empty($_POST['userpwd'])?'':$_POST['userpwd'];
        $userModel = new userModel();
        $flag = $userModel->getUserByEandP($useremail,$userpwd);
        //print_r($flag);exit();
        if($flag){
                $_SESSION['useremail']= $useremail;
                $_SESSION['userid'] = $flag;
                //echo $_SESSION['useremail'];exit();
                $smarty->assign('useremail',$useremail);
                $smarty->display('../templates/index.tpl');
        }else {
            $result = array(
                'code' => '001',
                'message' => '登录失败，用户名或密码不正确',
                'res' => $flag
            );
            $smarty->assign('data',$result);
            $smarty->display('../templates/login.tpl');
        }
    }

}