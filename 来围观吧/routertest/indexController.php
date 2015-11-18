<?php
require_once '../libs/Smarty.class.php';

class indexController{
    public function indexAction(){
        $str="/a/b";
         echo substr($str , 0,strrpos($str , '/') + 1);
    }
    public function locationAction(){
       $smarty = new Smarty();
       $smarty->display('../templates/html.tpl');
    }
}