<?php namespace App\Models;

use CodeIgniter\Model;

class PromoModel extends Model
{
    protected $table = 'promos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['image_path', 'created_at'];
    protected $useTimestamps = true;
}
