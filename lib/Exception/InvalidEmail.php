<?php 
namespace MyApp\Exception;

class InvalidEmail extends \Exception {
    protected $message='e-mail形式ではありません'; //標準class Eceptionの$messageを上書き
}
