<?php

namespace App\Models;

use CodeIgniter\Model;

class CounselingSessionModel extends Model
{
  protected $table = 'counseling_sessions';
  protected $allowedFields = ['user_id', 'counselor_id', 'start_time', 'end_time'];
}
