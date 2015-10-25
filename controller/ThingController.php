<?php
require "../model/thingModel.php";
require_once '../libs/Smarty.class.php';
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/10/25
 * Time: 21:39
 */
class ThingController
{
    //发表趣事
    public function addThingAction(){
        $thingmodel = new thingModel();
        $smarty = new Smarty();
        session_start();
        $userid = $_SESSION['userid'];
        $thingcontent = empty($_POST['thingcontent'])?'':$_POST['thingcontent'];
        $flag = $thingmodel->addThing($userid,$thingcontent);
        if($flag){
            $result = array(
                'code' => '001',
                'message' => '你的趣事已发表成功，赶快广场看看吧！',
                'res' => $flag
            );
        }else {
            $result = array(
                'code' => '000',
                'message' => '很遗憾，出了点bug~~',
                'res' => $flag
            );
        }
        $smarty->assign('data',$result);
        $smarty->display('../templates/personal.tpl');
    }
}