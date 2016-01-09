<?php
namespace MyApp\Controller;

class Index extends \MyApp\Controller{
    public function run(){
        if(!$this->isLoggedIn()){
        //Login 画面
            header('Location:'.SITE_URL.'/login.php');
            exit;
        }
        // get users info
    
    }

}
