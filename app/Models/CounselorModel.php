<?php

namespace App\Models;

use CodeIgniter\Model;

class CounselorModel extends Model
{
  protected $table = 'counselors';
  protected $allowedFields = ['name', 'email'];
}
