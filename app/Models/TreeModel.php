<?php
namespace App\Models;

use CodeIgniter\Model;

class TreeModel extends Model
{
    protected $table = 'trees';
    protected $allowedFields = ['name', 'description', 'price', 'image'];
}