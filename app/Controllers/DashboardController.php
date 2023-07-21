<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ArtikelModel;
use App\Models\CounselorModel;
use App\Controllers\BaseController;


class DashboardController extends BaseController
{
    public function index()
    {
        // Load the ArtikelModel
        $artikelModel = new ArtikelModel();

        // Get all the articles
        $artikel = $artikelModel->findAll();

        // Pastikan pengguna sudah login sebelum mengakses dashboard
        if (!$this->isLoggedIn()) {
            return redirect()->to('/login');
        }

        // Ambil data pengguna dari session
        $userModel = new UserModel();
        $user = $userModel->find(session('user'));

        // Periksa apakah pengguna memiliki peran admin
        if (isset($user['role']) && $user['role'] == "admin") {
            $this->session->set('user', $user);
            // Jika pengguna bukan admin, tampilkan pesan atau redirect ke halaman lain
            return redirect()->to('/')->with('message', 'Akses ditolak. Anda tidak memiliki izin untuk mengakses Dashboard.');
        }

        // Tampilkan halaman dashboard dengan data pengguna dan artikel
        echo view('templates/header');
        return view('dashboard/index', ['user' => $user, 'artikel' => $artikel]);
    }


    public function isLoggedIn()
    {
        // Cek apakah pengguna sudah login berdasarkan session
        return session()->has('user');
    }

    public function crudartikel()
    {
        // Load the ArtikelModel
        $artikelModel = new ArtikelModel();

        // Get all the articles
        $artikel = $artikelModel->findAll();

        // Pass the $artikel variable to the view
        $data['artikel'] = $artikel;

        echo view('templates/header');
        return view('dashboard/crudartikel', $data);
    }
    
    public function crudkonselor()
    {
        // Load the CounselorsModel
        $counselorModel = new CounselorModel();
    
        // Get all the counselors
        $counselors = $counselorModel->findAll();
    
        // Pass the $counselors variable to the view
        $data['counselors'] = $counselors;
    
        echo view('templates/header');
        return view('dashboard/crudkonselor', $data);
    }
    

}