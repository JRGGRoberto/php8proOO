<?php

namespace app\controllers;

use app\database\Filters;
use app\database\models\User;

class HomeController extends Controller
{
    public function index()
    {
        $filters = new Filters;
        $filters->where('id', '>', 5, 'and');
        $filters->where('firstName', 'like', '%Roberto%', 'and');
        $filters->where('id', 'IN', [1, 7, 10]);
        $filters->orderBy('name', 'desc');
        $filters->limit(2);

        $user = new User;
        $user->setFilters($filters);
        $user->fetcAll();


        $this->view('home', ['title' => 'Home']);
    }
}
