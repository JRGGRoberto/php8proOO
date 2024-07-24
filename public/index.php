<?php

require '../vendor/autoload.php';

use app\core\Router;

Router::run();

session_start();

dd($_SERVER);

Router::run();
