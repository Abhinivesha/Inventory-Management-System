<?php

namespace App\Models;

use CodeIgniter\Model;

class CModel extends Model
{
    protected $table = 'customer';

    protected $allowedFields = ['id', 'name', 'address', 'contact_person', 'number', 'email', 'gst_no'];
}
