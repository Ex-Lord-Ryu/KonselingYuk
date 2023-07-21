<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
	{
		$user_object = new UserModel();

		$user_object->insertBatch([
			[
				"name" => "admin",
				"email" => "admin@gmail.com",
				"role" => "admin",
				"password" => password_hash("admin123", PASSWORD_DEFAULT)
			],
		]);
	}
}
