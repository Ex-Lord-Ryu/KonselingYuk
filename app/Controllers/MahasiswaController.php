<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MahasiswaController extends BaseController
{
    public function __construct()
    {
        if (session()->get('role') != "mahasiswa") {
            echo 'Access denied';
            exit;
        }
    }
    public function index()
    {
        return view("/counseling");
    }
}