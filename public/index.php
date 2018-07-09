<?php
define('ROOT_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP_PATH', ROOT_PATH . 'application' . DIRECTORY_SEPARATOR);
define('COMMON_PATH', APP_PATH . 'common' . DIRECTORY_SEPARATOR);
define('ADMIN_PATH', APP_PATH . 'admin' . DIRECTORY_SEPARATOR);
define('HOME_PATH', APP_PATH . 'home' . DIRECTORY_SEPARATOR);

require ROOT_PATH . 'vendor/autoload.php';

function debug($content)
{
    \ChromePhp::info($content);
}

$app = new \Slim\Slim();

var_dump($app->request());exit();

$app->run();
