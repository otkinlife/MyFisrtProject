<?php
require_once "../model/commentModel.php";
require_once '../controller/UserController.php';
require_once '../controller/ThingController.php';

class CommentController{
    
    //添加评论
    public function addCommentAction(){
        session_start();
        $userid = $_SESSION['userid'];
        $thingid = empty($_POST['thingid'])?'':$_POST['thingid'];
        $comment = empty($_POST['comment'])?'':$_POST['comment'];
        //echo $userid."  ".$thingid."   ".$comment;die;
        $userController = new UserController();
        $model = new commentModel();
        $flag = $model->addComment($userid, $thingid, $comment);
        if($flag){
            $res = array(
                'code'=>'000',
                'message'=>'恭喜您，评论成功'
            );
        }else{
            $res = array(
                'code'=>'001',
                'message'=>'很遗憾，评论失败了'
            );
        }
        //header("Location: /Base/rooter.php?rooter=User/index");
        $userController->indexAction($res);
    }
    
    //添加评论
    public function addCommentToDetailAction(){
        session_start();
        $userid = $_SESSION['userid'];
        $thingid = empty($_POST['thingid'])?'':$_POST['thingid'];
        $comment = empty($_POST['comment'])?'':$_POST['comment'];
        //echo $userid."  ".$thingid."   ".$comment;die;
        $userController = new UserController();
        $thingController = new ThingController();
        $model = new commentModel();
        $flag = $model->addComment($userid, $thingid, $comment);
        if($flag){
            $res = array(
                'code'=>'000',
                'message'=>'恭喜您，评论成功'
            );
        }else{
            $res = array(
                'code'=>'001',
                'message'=>'很遗憾，评论失败了'
            );
        }
        //header("Location: /Base/rooter.php?rooter=User/index");
        $thingController->showDetailAction($thingid,$res,1);
    }
}