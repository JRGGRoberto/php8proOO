<?php

namespace app\core;

class Router
{
    public static function run()
    {
        $routerRegister = new RoutersFilter();
        $router = $routerRegister->get();

        dd($router);
    }
}
