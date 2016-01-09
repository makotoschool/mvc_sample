<?php 
namespace MyApp\Exception;

class InvalidPassword extends \Exception {
    protected $message='パスワード形式ではありません'; //標準class Eceptionの$messageを上書き
}
