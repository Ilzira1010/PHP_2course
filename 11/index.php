<?php

use log\MyLogger;

spl_autoload_register(function ($class) {
    $str = str_replace("\\", "/", $class);
    include_once __DIR__."/".$str . '.php';
});
require_once "../vendor/autoload.php";
//require_once "C:/Users/ilzira/PhpstormProjects/PHP_2course/composer.phar/vendor/autoload.php";

$logger = new MyLogger("text.json");

$logger->log(LOG_ERR, "Error");