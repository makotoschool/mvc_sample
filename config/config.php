<?php
ini_set('display_errors',1);
define('DSN','mysql:dbhost=localhost;dbname=sns_php');
define('DB_USERNAME','makoto');
define('DB_PASSWORD','egkoainf2');

require_once(__DIR__.'/../lib/functions.php');//マジック定数　現在のディレクトリの一つ上
require_once(__DIR__.'/autoload.php');//マジック定数　現在のディレクトリの一つ上


session_start();