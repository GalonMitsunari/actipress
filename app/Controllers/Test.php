<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function view()
    {
        Test::load->library('session');
        echo view('pages/test');
    }
}
