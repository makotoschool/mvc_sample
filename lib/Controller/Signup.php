<?php
namespace MyApp\Controller;

class Signup extends \MyApp\Controller{
    public function run(){
        if($this->isLoggedIn()){
        //ログインしていたらホームに飛ばす
            header('Location:'.SITE_URL);
            exit;
        }
        if($_SERVER['REQUEST_METHOD']==='POST'){
         $this->postProcess();
        
        }
    }
    
    protected function postProcess(){
        //validate
        try{
            $this->_validate();
        }catch(\MyApp\Exception\InvalidEmail $e){
            echo $e->getMessage();
            exit;
        }catch(\MyApp\Exception\InvalidPassword $e){
            echo $e->getMessage();
            exit;
        
        }
        echo 'うまくいったよ';
        exit;
        //create user
        
        
        //redirect to Login
    }
    
    private function _validate(){
     if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
         throw new \MyApp\Exception\InvalidEmail();
     }
        //アルファベットと数字のみ
    if(!preg_match('/\A[a-zA-Z0-9]+\z/',$_POST['password'])){
        throw new \MyApp\Exception\InvalidPassword();
    }


    }

}
