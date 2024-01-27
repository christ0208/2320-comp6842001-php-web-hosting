<?php

use App\Controller\HomeController;
use App\Routes\Router;

$router = Router::getInstance();

$router->add('GET', '/', HomeController::class, 'index');