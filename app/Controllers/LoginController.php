<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;


class LoginController extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('/login');
        // echo view('templates/footer');
    }

    public function do_login()
    {
        $data = [];

        if ($this->request->getMethod() == 'post') {

            $rules = [
                'email' => 'required|min_length[6]|max_length[50]|valid_email',
                'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
            ];

            $errors = [
                'password' => [
                    'validateUser' => "Email or Password didn't match",
                ],
            ];

            if (!$this->validate($rules, $errors)) {
                return redirect()->to(base_url('/login'))->withInput()->with('error', 'Invalid email or password');
            } else {
                $model = new UserModel();

                $user = $model->where('email', $this->request->getVar('email'))->first();

                // Storing session values
                // $this->setUserSession($user);

                // Redirecting to dashboard after login
                if ($user['role'] == "admin") {
                    $this->session->set('user', $user);
                    return redirect()->to(base_url('/'));
                } elseif ($user['role'] == "mahasiswa") {
                    $this->session->set('user', $user);
                    return redirect()->to(base_url('/counseling'));
                }
            }
        }

        return view('login');
    }


    public function do_logout()
    {
        $this->session->destroy('user');
        return redirect()->to('/login');
    }
}
