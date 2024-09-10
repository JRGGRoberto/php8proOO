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
        

        $arr = [];

        foreach($fieldPostkeys as $index => $value){
            $onlField = (is_string($only) ? $only : (isset($only[$index]) ? $only[$index] : null ));
            if(isset($fieldPost[$onlField])){
                $arr[$onlField] = $fieldPost[$onlField];
            } 
        }

        return $arr;
    }


    public static function exceps(string|array $exceps)
    {
        $fieldPost = self::all();
        
        if(is_array($exceps)){
            foreach($exceps as $index => $value){
                unset($fieldPost[$value]);
            }
        }

        if(is_string($exceps)){
            unset($fieldPost[$exceps]);
        }

        return $fieldPost;
        
    }

    public static function query($name)
    {
        if(!isset($_GET[$name])){
            throw new Exception("Não existe a query string {$name}");
        }
        return $_GET[$name];
    }

    public static function toJson(array $data)
    {
        return json_encode($data);
    }

    public static function toArray($data)
    {
        if (isJson($data)){
            return json_decode($data);
        }
    }
}
