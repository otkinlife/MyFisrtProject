<?php
require_once "../Base/sqlhelper.php";

class commentModel extends SqlHelper{
    
    //发表评论
    public function addComment($userid,$thingid,$comment){
        $createtime = date("Y-m-d H:i:s");
        $sql = "insert into qushi_comment(thing_id,user_id,comment_content,create_time) values".
            "('".$thingid."','".$userid."','".$comment."','".$createtime."')";
        //echo $sql;die;
        $result = $this->sqlBool($sql);
        return $result;
    }
}