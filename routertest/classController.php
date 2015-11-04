<?php
class classController{
    
    public function testAction(){
        
    }
    public function indexAction(){
         $start=strtotime('2015-11-05 00:00:00');
         $end=strtotime('2015-11-10 24:00:00');
         $now = strtotime(date('Y-m-d H:i:s'));
         if($now>=$start&&$now<=$end){
             echo "ok";
         }else {
         echo "no";
        }
    }
}
?>