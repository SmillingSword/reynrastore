<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\FlashSaleModel;

class FlashSaleController extends BaseController
{
    public function index()
    {
        $model = new FlashSaleModel();
        $data['flash_sales'] = $model->orderBy('id', 'DESC')->findAll();
        return view('admin/flash_sale/index', $data);
    }

    public function create()
    {
        return view('admin/flash_sale/create');
    }

    public function store()
    {
        $model = new FlashSaleModel();

        $model->insert([
            'nama_produk'     => $this->request->getPost('nama_produk'),
            'game'            => $this->request->getPost('game'),
            'harga_awal'      => $this->request->getPost('harga_awal'),
            'harga_diskon'    => $this->request->getPost('harga_diskon'),
            'stok'            => $this->request->getPost('stok'),
            'waktu_berakhir'  => $this->request->getPost('waktu_berakhir')
        ]);

        return redirect()->back()->with('success', 'Flash Sale berhasil ditambahkan!');
    }

    public function delete($id)
    {
        $model = new FlashSaleModel();
        $model->delete($id);
        return redirect()->back()->with('success', 'Flash Sale berhasil dihapus!');
    }
}
