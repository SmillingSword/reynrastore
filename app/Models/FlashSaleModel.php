<?php namespace App\Models;

use CodeIgniter\Model;

class FlashSaleModel extends Model
{
    protected $table = 'flash_sales';
    protected $allowedFields = ['nama_produk', 'game', 'harga_awal', 'harga_diskon', 'jumlah_terjual', 'stok', 'waktu_berakhir'];
    protected $useTimestamps = true;
}
