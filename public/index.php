<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Routes\Router;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger("TokoLappy");
$logger->pushHandler(new StreamHandler("../logs/access.log", Logger::INFO));

$path = '/index';
if (!empty($_SERVER['PATH_INFO'])) {
    $path = $_SERVER['PATH_INFO'];
}

$requestMethod = $_SERVER['REQUEST_METHOD'];

$logger->info("$requestMethod $path");

require_once __DIR__ . '/../app/Routes/web.php';

$router = Router::getInstance();
$router->run($requestMethod, $path);
