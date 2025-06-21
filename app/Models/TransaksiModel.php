<?php namespace App\Models;

use CodeIgniter\Model;

class TransaksiModel extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'invoice', 'user_id', 'customer_id', 'server',
        'sku', 'produk_nama', 'nominal', 'harga', 'metode', 'status'
    ];
    protected $useTimestamps = false;
}
