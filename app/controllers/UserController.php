<?php

namespace app\controllers;

use app\controllers\Controller;
use app\core\Request;

class UserController extends Controller
{

    public function edit($params)
    {
        $this->view(
            'user',
            [
                'title' => 'Editar user',
            ]
        );
    }


    public function update($params)
    {
        $response = Request::exceps(['fistName', 'lastName']);
        dd($response);
        //dd(Request::all());
        //dd(Request::input('fistName'));
        
    }
}
