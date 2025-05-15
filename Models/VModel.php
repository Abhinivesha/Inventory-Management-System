<?php

namespace App\Models;

use CodeIgniter\Model;

class VModel extends Model
{
    protected $table = 'vendor';
    
    protected $allowedFields = ['id', 'name', 'address', 'contact_person', 'number', 'email', 'gst_no'];
}
