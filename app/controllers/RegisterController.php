<?php

namespace app\controllers;

class RegisterController extends Controller
{
    public function index()
    {
        dd('Index home controller');
    }

    public function store(){
            $this->view(
                'user',
                [
                    'title' => 'Editar user',
                ]
            );
        
        dd('register');
    }
}
