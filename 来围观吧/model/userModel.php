<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/10/18
 * Time: 22:02
 */

require_once  "../Base/sqlhelper.php";

class userModel extends SqlHelper
{
    //增加用户
    public function addUser($useremail,$username,$userpwd){
        $userpwd = md5($userpwd);
        $sql = "INSERT INTO user (user_email, user_name, user_pwd)VALUES ('".$useremail."','".$username."','".$userpwd."')";
        $reslut = $this->sqlBool($sql);
        return $reslut;
    }

    //检查用户
    public function getUserByEandP($useremail,$userpwd){
        $userpwd = md5($userpwd);
        $sql = "select * from user where user_email= '".$useremail."' and user_pwd='".$userpwd."'";
        //echo $sql;
        $result = $this->sqlArray($sql);
        //print_r($result);exit();
        //$result = $result['0']['0'];
        return $result;
    }

    //根据用户用户id，获取该用户资料
    public function  getContentById($userid){
        $sql = "select * from user where user_id= '".$userid."'";
        $result = $this->sqlArray($sql);
        return $result;
    }

    //更改头像
    public function updateImg($url,$userid){
        $sql = "UPDATE user SET user_img ='".$url."' where user_id= '".$userid."'";
        $reslut = $this->sqlBool($sql);
        return $reslut;
    }
    
    //更改资料
    public function updatePerson($username,$useremail,$userid){
        $sql = "update user set user_name='".$username."', user_email='".$useremail.
        "' where user_id='".$userid."'";
        //echo $sql; die;
        $result = $this->sqlBool($sql);
        return $result;
    }
}