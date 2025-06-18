<?php namespace App\Controllers;
use App\Models\ProdukModel;

class Produk extends BaseController
{
    public function detail($slug)
    {
        $produkModel = new ProdukModel();
        $produk = $produkModel->where('slug', $slug)->first();

        if (!$produk) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('produk/detail', [
            'produk' => $produk,
            'title' => $produk['nama']
        ]);
    }
}
