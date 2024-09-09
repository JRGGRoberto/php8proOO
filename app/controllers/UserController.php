<?php

namespace app\controllers;

use app\support\RequestType;

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
        Resquest::all();
        dd($params);
    }
}
