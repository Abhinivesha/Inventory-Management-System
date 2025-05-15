<?php

namespace App\Models;

use CodeIgniter\Model;

class PModel extends Model
{
    protected $table = 'products';
    protected $allowedFields = ['id', 'name', 'partcode', 'unit'];
}
