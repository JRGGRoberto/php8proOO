<?php

namespace app\controllers;

class ProductController
{
    public function show($params)
    {
        echo "AAA: {$params[0]}, BBB:   {$params[1]}";
        dd($params);
        
    }
}
