<?php

namespace App\Controllers;

class GestionUsersController extends BaseController
{
    public static function index()
    {
        echo view('template/header');
        echo view('GestionUser');
        echo view('template/footer');
    }
}
