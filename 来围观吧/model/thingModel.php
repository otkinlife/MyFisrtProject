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
    
    //返回所有趣事
    public function selectAll($page,$pagesize){
        $page = $page > 1 ? intval($page) : 1;
        $start = ($page - 1) * $pagesize;
        $sql = "select * from qushi_thing order by create_time desc limit ".$start.",".$pagesize;
        //echo $sql;die;
        $result = $this->sqlArray($sql);
        //print_r($result);
        return $result;
    }
    
    //根据userid返回趣事
    public function selectById($userid,$page,$pagesize){
        $page = $page > 1 ? intval($page) : 1;
        $start = ($page - 1) * $pagesize;
        $sql = "select * from qushi_thing where user_id='".$userid."' order by create_time desc limit ".$start.",".$pagesize;
        $result = $this->sqlArray($sql);
        return $result;
    }
    
    //根据ThingId返回数据
    public function getByThingId($thingid){
        $sql = "select * from qushi_thing where thing_id='".$thingid."' order by create_time desc";
        $result = $this->sqlArray($sql);
        $result = $result['0'];
        //print_r($result);die;
        return $result;
    }
    
    //获取页数
    public function getPageNum($pagesize){
        $sql = "select * from qushi_thing";
        $result = $this->sqlRow($sql);
        $res = $result/$pagesize;
        $num = ceil($res);
        return $num;
    }
    
    //根据userid获取页数
    public function getPageNumById($userid,$pagesize){
        $sql = "select * from qushi_thing where user_id='".$userid."'"; 
        $result = $this->sqlRow($sql);
        $res = $result/$pagesize;
        $num = ceil($res);
        return $num;
    }
}