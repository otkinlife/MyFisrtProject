<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/10/18
 * Time: 22:01
 */

require_once "../model/userModel.php";
require_once "../model/thingModel.php";
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
        session_start();
        $smarty = new Smarty();
        $yzm = $this->yzm(4);
        $result = array(
            'code' => '',
            'message' => '',
            'res' => ''
        );
        $_SESSION['yzm']=$yzm;
        $smarty->assign('yzm',$yzm);
        $smarty->assign('data',$result);
        $smarty->display('../templates/login.tpl');
    }
    
    //返回随机数
    public function yzm($len)
    {
        $chars = array(
            "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k",
             "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v",
        "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G",
        "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R",
        "S", "T", "U", "V", "W", "X", "Y", "Z", "0", "1", "2",
            "3", "4", "5", "6", "7", "8", "9"
        );
        $charsLen = count($chars) - 1;
        shuffle($chars);// 将数组打乱
        $output = "";
        for ($i=0; $i<$len; $i++)
        {
        $output .= $chars[mt_rand(0, $charsLen)]; //获得一个数组元素
        }
        return $output;
    }
    //主页显示
    public function indexAction(){
        $smarty = new Smarty();
        $thingmodel = new thingModel();
        session_start();
        $username = $_SESSION['username'];
        $result = $thingmodel->selectAll();
        $smarty->assign('data',$result);
        $smarty->assign('username',$username);
        $smarty->display('../templates/index.tpl');
    }

    //显示个人
    public function showpersonAction(){
        $smarty = new Smarty();
        $thingmodel = new thingModel();
        $usermodel = new userModel();
        session_start();
        $username = $_SESSION['username'];
        $userid = $_SESSION['userid'];
        $result = $thingmodel->selectById($userid);
        $person = $usermodel->getContentById($userid);
        $smarty->assign('res',$result);
        $smarty->assign('username',$username);
        $smarty->assign('data','');
        $smarty->assign('person',$person);
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
        $thingmodel = new thingModel();
        session_start();
        $useremail = empty($_POST['useremail'])?'':$_POST['useremail'];
        $userpwd = empty($_POST['userpwd'])?'':$_POST['userpwd'];
        $fyzm = empty($_POST['yzm'])?'':$_POST['yzm'];
        $userModel = new userModel();
        $flag = $userModel->getUserByEandP($useremail,$userpwd);
        $yzm = $_SESSION['yzm'];
        $smarty->assign('yzm',$yzm);
        if(strtolower($fyzm) == strtolower($yzm)){
            if($flag['0']['0']){
                $_SESSION['username']= $flag['0']['2'];
                $_SESSION['userid'] = $flag['0']['0'];
                $result = $thingmodel->selectAll();
                //echo $_SESSION['useremail'];exit();
                $smarty->assign('data',$result);
                $smarty->assign('username',$flag['0']['2']);
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
        }else {
            $result = array(
                'code' => '001',
                'message' => '登录失败，验证码不正确',
                'res' => $flag
            );
            $smarty->assign('data',$result);
            $smarty->display('../templates/login.tpl');
            
        }
        
    }

}