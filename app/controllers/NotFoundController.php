<?php

namespace app\controllers;

class NotFoundController
{
    public function index()
    {
        echo 'Não existe<br>';
        dd('error 404');
    }
}
