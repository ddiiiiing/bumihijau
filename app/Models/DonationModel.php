<?php

namespace App\Models;

use CodeIgniter\Model;

class DonationModel extends Model
{
    protected $table = 'donations';
    protected $allowedFields = ['user_id', 'tree_id', 'location_id', 'amount', 'payment_method', 'quantity'];
}