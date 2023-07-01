<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['full_name', 'email', 'password',];

    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }

    public function registerUser($data)
    {
        return $this->insert($data);
    }
}
