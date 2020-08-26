<?php

namespace App\Models;

use CodeIgniter\Model;

class RouterModel extends Model
{
    protected $table      = 'router';
    protected $useTimestamps = true;
    protected $allowedFields = ['ip', 'port', 'username', 'password', 'nama', 'login'];
}
