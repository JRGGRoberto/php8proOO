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

    public static function only(string|array $only)
    {
        $fieldPost = self::all();
        $fieldPostkeys = array_keys($fieldPost);
        
        foreach($fieldPostkeys as $index => $value){
            if($value !== (is_string($only) ? $only : (isset($only[$index]) ? $only[$index] : null ) )){
                unset($fieldPost[$value]);
            } 
        }

        return $fieldPost;
    }

}
