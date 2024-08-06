<?php

namespace app\routes;

class Router
{
    public static function get()
    {
        return [
            'get' => [
                '/' => 'HomeController@index',
                '/user/[0-9]+' => 'UserController@show',
                '/register' => 'RegisterController@store',
            ],
            'post' => [],
        ];
    }
}
