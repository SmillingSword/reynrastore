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

    public function checkPayment()
    {
        $invoice = session('invoice'); // atau ambil dari database
        $response = file_get_contents("https://okeconnect.id/api/checkpayment?invoice=$invoice&merchantid=OK2461678&apikey=...");

        $data = json_decode($response, true);
        if ($data['status'] === 'PAID') {
            // Update DB dan lanjutkan topup Digiflazz
            return $this->response->setJSON(['status' => 'PAID']);
        }

        return $this->response->setJSON(['status' => 'WAITING']);
    }

}
