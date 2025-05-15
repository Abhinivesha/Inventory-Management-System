<?php

namespace App\Models;

use CodeIgniter\Model;

class PerfModel extends Model
{
    protected $table = 'performa';

    protected $allowedFields = ['id', 'customer', 'po_no', 'po_date', 'invoice_date'];
}
