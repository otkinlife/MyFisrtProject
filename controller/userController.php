<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/10/18
 * Time: 22:01
 */

require "../model/userModel.php";
class UserController{

    //增加用户
    public function adduserAction(){
        $useremail = $_POST['emailname'].$_POST['email'];
        $username = $_POST['username'];
        $userpwd = $_POST['userpwd'];
        $userModel = new userModel();

        $flag = $userModel->addUser($useremail,$username,$userpwd);
        if($flag){
            $result = array(
                'Code' => '000',
                'Message' => '成功',
                'result' => $flag
            );
        }else{
                $result =array(
                'Code' => '001',
                'Message' => '失败',
                'result' => $flag
            );
        }
        echo json_encode($result);
    }
}