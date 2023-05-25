<?php

namespace App\Controllers;

class Home extends BaseController
{
    public static function index()
    {
        echo view('template/header');
        echo view('login');
        echo view('template/footer');
    }
}
