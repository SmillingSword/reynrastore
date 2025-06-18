<?php

namespace App\Models;

use CodeIgniter\Model;

class TrendingModel extends Model
{
    protected $table = 'trending';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nama_produk',
        'penerbit',
        'gambar',
    ];

    protected $useTimestamps = true;
}
