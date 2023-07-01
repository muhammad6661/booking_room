<?php

use App\Core\App;

define('VIEW_PATH', dirname(__DIR__) . '/resources/views');
define('STORAGE_PATH', dirname(__DIR__) . '/storage');
define('ROOT_PATH', dirname(__DIR__));


/*
|--------------------------------------------------------------------------
| Show display Errors
|--------------------------------------------------------------------------
|
*/
error_reporting(E_ALL | E_WARNING | E_NOTICE);
ini_set('display_errors', "1");



require_once __DIR__ . '/../vendor/autoload.php';
require __DIR__  . "/../vendor/larapack/dd/src/helper.php";


Dotenv\Dotenv::createUnsafeImmutable(ROOT_PATH)->load();



$app = new App();

require __DIR__ .'/../routers/web.php';

return $app;