<?php

namespace App\Models;

use CodeIgniter\Model;

class OutModel extends Model
{
    protected $table            = 'outward';
    protected $allowedFields    = ['id', 'customer', 'po_no', 'po_date', 'invoice_date'];
}
