<?php

namespace App\Models;

use CodeIgniter\Model;

class InModel extends Model
{
    protected $table = 'inward';

    protected $allowedFields = ['id', 'vendor', 'po_no', 'po_date', 'invoice_date'];
}
