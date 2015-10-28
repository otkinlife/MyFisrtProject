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

define('app_root', 'D:\wamp\www');
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
        $userModel = new userModel();
        session_start();
        $useremail = empty($_POST['useremail'])?'':$_POST['useremail'];
        $userpwd = empty($_POST['userpwd'])?'':$_POST['userpwd'];
        $fyzm = empty($_POST['yzm'])?'':$_POST['yzm'];
        $flag = $userModel->getUserByEandP($useremail,$userpwd);
        $yzm = $_SESSION['yzm'];
        $smarty->assign('yzm',$yzm);
        if(strtolower($fyzm) == strtolower($yzm)){
            if($flag['0']['0']){
                $_SESSION['username']= $flag['0']['1'];
                $_SESSION['userid'] = $flag['0']['0'];
                $result = $thingmodel->selectAll();
                //echo $_SESSION['useremail'];exit();
                $smarty->assign('data',$result);
                $smarty->assign('username',$flag['0']['1']);
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
    
    //上传头像
    public function uploadImgAction(){
        $smarty = new Smarty();
        $thingmodel = new thingModel();
        $usermodel = new userModel();
        session_start();
        $username = $_SESSION['username'];
        $userid = $_SESSION['userid'];
        $result = $thingmodel->selectById($userid);
        $person = $usermodel->getContentById($userid);

        if ($_FILES["file"]["error"] > 0)
        {
            echo "上传错误: " . $_FILES["file"]["error"] . "<br />";
        }
        else
        {
            $userModel = new userModel();
            if (file_exists("upload/" . $_FILES["file"]["name"]))
            {
                echo $_FILES["file"]["name"] . " already exists. ";
            }
            else
            {
                move_uploaded_file($_FILES["file"]["tmp_name"], "../upload/" . $_FILES["file"]["name"]);
                $url = "../upload/" . $_FILES["file"]["name"];
                $flag = $userModel->updateImg($url,$userid);
                if($flag){
                    $data = array(
                        'code'=>'000',
                        'message'=>'恭喜您，修改头像成功'
                    );
                }else{
                    $data = array(
                        'code'=>'001',
                        'message'=>'很遗憾，修改头像失败了'
                    );
                }
            }
        }
        $smarty->assign('res',$result);
        $smarty->assign('username',$username);
        $smarty->assign('img',$data);
        $smarty->assign('person',$person);
        $smarty->display('../templates/personal.tpl');
    }

    //更改资料个人
    public function updatePersonAction(){
        $smarty = new Smarty();
        $thingmodel = new thingModel();
        $usermodel = new userModel();
        session_start();
        
        $username = $_SESSION['username'];
        $userid = $_SESSION['userid'];
        
        $newname = empty($_POST['newname'])?'':$_POST['newname'];
        $newemail = empty($_POST['newemail'])?'':$_POST['newemail'];
        $result = $thingmodel->selectById($userid);
        $person = $usermodel->getContentById($userid);
        $update = $usermodel->updatePerson($newname, $newemail, $userid);
        if($update){
            $data = array(
                'code'=>'000',
                'message'=>'恭喜您，修改资料成功'
            );
        }else{
            $data = array(
                'code'=>'001',
                'message'=>'很遗憾，修改资料失败了'
            );
        }        
        $smarty->assign('res',$result);
        $smarty->assign('username',$username);
        $smarty->assign('data',$data);
        $smarty->assign('person',$person);
        $smarty->display('../templates/personal.tpl');
    }
    
    //更改密码
    public function updatePwdAction(){
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
}