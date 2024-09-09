<?php

namespace app\core;

use Exception;

class Request
{
    public static function input(string $name)
    {
        if(isset($_POST[$name])){
            return $_POST[$name];
        }

        throw new Exception("O índice {$name} não existe");

    }

    public static function all()
    {
        return $_POST;

    }

}
