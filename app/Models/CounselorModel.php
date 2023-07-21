<?php

namespace App\Models;

use CodeIgniter\Model;

class CounselorModel extends Model
{
    protected $table = 'counselors';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'description', 'gambar', 'specialization', 'created_at', 'updated_at'];

    protected $useTimestamps = true;
}
