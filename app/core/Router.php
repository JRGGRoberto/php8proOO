<?php

namespace app\core;

class Router
{
    public static function run()
    {
        try {
            $routerRegister = new RoutersFilter();
            $router = $routerRegister->get();

            $controller = new Controller();
            $controller->execute($router);
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}

