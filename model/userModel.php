<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/10/18
 * Time: 22:02
 */

require "../Base/sqlhelper.php";

class userModel
{
    //增加用户
    public function addUser($useremail,$username,$userpwd){

        $sqlhelper = new \SqlHelper();
        $userpwd = md5($userpwd);
        $sql = "INSERT INTO user (user_email, user_name, user_pwd)VALUES ('".$useremail."','".$username."','".$userpwd."')";
        $reslut = $sqlhelper->sqlBool($sql);
        return $reslut;
    }
}