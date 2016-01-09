<?php
/*
MYApp 全体の名前空間
index.phpのcontroller
MyApp\Controller\Index
実体は
lib/Controller/index.php

*/

/*autoload設定　classがコールされたら、対応するファイルを読み込む　php standerd liblaryのspl_autoload_registerでメモリに登録しておく*/

spl_autoload_register(function($class){
 $prefix='MyApp\\';
    if(strpos($class, $prefix)===0){
        $classname=substr($class,strlen($prefix));
        $classFilePath=__DIR__.'/../lib/'.str_replace('\\','/',$classname).'.php';//名前空間からファイルパスを作る
        if(file_exists($classFilePath)){//そのファイルが存在したら読み込む
            require $classFilePath;
            
        }
        
    }

});