<?php

namespace App\Controllers;

class HomeView extends BaseController
{
    public static function index()
    {
        echo view('template/header');
        echo view('Home');
        echo view('template/footer');
    }
}
