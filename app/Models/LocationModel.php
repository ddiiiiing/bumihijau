<?php

// File: app/Models/LocationModel.php

namespace App\Models;

use CodeIgniter\Model;

class LocationModel extends Model
{
    protected $table = 'locations';
    protected $allowedFields = ['name', 'description', 'price_multiplier', 'image'];
}