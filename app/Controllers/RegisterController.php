<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class RegisterController extends BaseController
{
    public function index()
    {
        echo view('templates/header');
        echo view('/register');
        // echo view('templates/footer');
    }

   public function do_register()
{
    $userModel = new UserModel();

    $name = $this->request->getPost('name');
    $email = $this->request->getPost('email');
    $password = $this->request->getPost('password');
    $role = $this->request->getPost('role');

    // Check password length
    if (strlen($password) < 8) {
        echo "<script>
        swal('Error', 'Password must be at least 8 characters.', 'error');
        </script>";
        return;
    }

    // Check if the email is already registered
    $existingUser = $userModel->where('email', $email)->first();
    if ($existingUser) {
        // Remove previously registered email unless it belongs to an admin
        if ($existingUser['role'] !== 'admin') {
            $userModel->delete($existingUser['id']);
        }
    }

    $password = password_hash($password, PASSWORD_BCRYPT);

    // Insert new data into the database
    $data = [
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'role' => $role
    ];

    $r = $userModel->insert($data);

    if ($r) {
        if ($existingUser) {
            // Automatically update the email in the database
            $userModel->update($existingUser['id'], ['email' => $email]);
        }

        // Update session with the new user data
        $user = $userModel->where('email', $email)->first();
        $this->session->set('user', $user);

        echo "<script>
        swal('Success', 'Registration successful. You can now login.', 'success')
            .then(() => {
                window.location.href = '/counseling'; // Redirect to login page
            });
        </script>";
        return redirect()->to('/counseling');
    } else {
        echo "Error during registration";
    }
    return redirect()->to('/counseling');
}


}
