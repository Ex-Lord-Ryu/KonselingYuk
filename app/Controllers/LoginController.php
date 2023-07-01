<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('/login');
        echo view('templates/footer');
    }

}