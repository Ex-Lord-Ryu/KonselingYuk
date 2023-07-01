<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class RegisterController extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('/register');
        echo view('templates/footer');
    }
}
