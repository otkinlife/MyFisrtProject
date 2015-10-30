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
    
    //获取评论数
    public function  getNumByThingId($thingid){
        $sql = "select * from qushi_comment where thing_id='".$thingid."'";
        $result = $this->sqlRow($sql);
        return $result;
    }
    
    //根据thingid获取评论
    public function getContentByThingId($thingid){
        $sql = "select * from qushi_comment where thing_id='".$thingid."'";
        $result = $this->sqlArray($sql);
        //print_r($result);die;
        return $result;
    }
}