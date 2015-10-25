<?php

require_once "../Base/sqlhelper.php";
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/10/25
 * Time: 21:25
 */
class thingModel extends SqlHelper
{
    //增加一条趣事
    public function addThing($userid,$thingcontent){
        $createtime = date("Y-m-d H:i:s");
        $sql = "INSERT INTO qushi_thing (user_id, thing_content, create_time)VALUES ('".$userid."','".$thingcontent."','".$createtime."')";
        $result = $this->sqlBool($sql);
        return $result;
    }
}