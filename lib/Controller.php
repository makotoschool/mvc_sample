<?php
namespace MyApp;

class Controller {
 
    protected function isLoggedIn(){
    //$_SESSION['me'] の中身でログインしているかどうかを判断
        return isset($_SESSION['me'] ) && !empty($_SESSION['me']);    
    }
}