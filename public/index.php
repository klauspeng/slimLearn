<?php
define('ROOT_PATH',dirname(__DIR__).DIRECTORY_SEPARATOR);

require ROOT_PATH.'vendor/autoload.php';

function debug($content){
    \ChromePhp::info($content);
}
$app = new \Slim\Slim();
$app->run();
