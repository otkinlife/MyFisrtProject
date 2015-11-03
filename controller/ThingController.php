<?php
require_once "../model/thingModel.php";
require_once '../model/commentModel.php';
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
        $usermodel = new userModel();
        $smarty = new Smarty();
        session_start();
        $userid = $_SESSION['userid'];
        $username = $_SESSION['username'];
        $thingcontent = empty($_POST['thingcontent'])?'':$_POST['thingcontent'];
        $person = $usermodel->getContentById($userid);
        $res = $thingmodel->selectById($userid);
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
        $smarty->assign('res',$res);
        $smarty->assign('data',$result);
        $smarty->assign('person',$person);
        $smarty->assign('username',$username);
        $smarty->display('../templates/personal.tpl');
    }
    
    //显示详情页
    public function showDetailAction($thingid,$flag=null,$page){
        $pagesize = '5';
        $smarty = new Smarty();
        $thingmodel = new thingModel();
        $commentmodel = new commentModel();
        session_start();
        $qushi = $thingmodel->getByThingId($thingid);
        $comment = $commentmodel->getContentByThingId($thingid, $page, $pagesize);
        $pagenum =$commentmodel->getPageNumByThingId($thingid, $pagesize);
        //print_r($comment);die;
        $username = $_SESSION['username'];
        $smarty->assign('currentpage',$page);
        $smarty->assign('pagenum',$pagenum);
        $smarty->assign('username',$username); 
        $smarty->assign('thingid',$thingid); 
        $smarty->assign('comment',$comment);
        $smarty->assign('flag',$flag);
        $smarty->assign('qushi',$qushi);
        $smarty->display('../templates/detail.tpl');
    }
    
    //显示详情页
    public function showMyDetailAction($thingid,$flag=null){
        $smarty = new Smarty();
        $thingmodel = new thingModel();
        $commentmodel = new commentModel();
        session_start();
        $qushi = $thingmodel->getByThingId($thingid);
        $comment = $commentmodel->getContentByThingId($thingid);
        //print_r($comment);die;
        $username = $_SESSION['username'];
        $smarty->assign('username',$username);
        $smarty->assign('thingid',$thingid);
        $smarty->assign('comment',$comment);
        $smarty->assign('flag',$flag);
        $smarty->assign('qushi',$qushi);
        $smarty->display('../templates/mydetail.tpl');
    }
}