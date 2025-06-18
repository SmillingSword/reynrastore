<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProdukModel;

class ProductController extends BaseController
{
    protected $ProdukModel;

    public function __construct()
    {
        $this->ProdukModel = new ProdukModel();
    }

    public function index()
    {
        $data['title'] = 'Produk';
        $data['products'] = $this->ProdukModel->findAll();
        return view('admin/products/index', $data);
    }

    public function getProduk()
    {
        $apikey  = getenv('DIGIFLAZZ_API_KEY');
        $username = getenv('DIGIFLAZZ_USERNAME');

        $sign = md5($username . $apikey . 'pricelist');

        $payload = [
            "cmd" => "prepaid",
            "username" => $username,
            "sign" => $sign
        ];

        $client = \Config\Services::curlrequest();
        $response = $client->post("https://api.digiflazz.com/v1/price-list", [
            'headers' => ['Content-Type' => 'application/json'],
            'body' => json_encode($payload)
        ]);

        $result = json_decode($response->getBody(), true);

        if ($result['data']) {
            $brandList = [];
            foreach ($result['data'] as $item) {
                $brand = $item['brand'];
                if (!in_array($brand, $brandList)) {
                    $brandList[] = $brand;
                }
            }

            foreach ($brandList as $brand) {
                if ($this->ProdukModel->where('brand', $brand)->countAllResults() == 0) {
                    $this->ProdukModel->insert([
                        'name' => $brand,
                        'brand' => $brand,
                        'image' => '',
                        'is_manual' => 0
                    ]);
                }
            }

            return redirect()->back()->with('success', 'Daftar brand produk berhasil diambil.');
        }

        return redirect()->back()->with('error', 'Gagal mengambil data dari Digiflazz.');
    }

    public function delete($id)
    {
        $this->ProdukModel->delete($id);
        return redirect()->back()->with('success', 'Produk berhasil dihapus.');
    }

    public function uploadGambar()
    {
        $produkId = $this->request->getPost('produk_id');
        $file = $this->request->getFile('image');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads/produk', $newName);

            $this->ProdukModel->update($produkId, ['image' => $newName]);

            return redirect()->back()->with('success', 'Gambar berhasil diupload.');
        }

        return redirect()->back()->with('error', 'Gagal mengupload gambar.');
    }

    public function updateGambar()
    {
        $produkId = $this->request->getPost('produk_id');
        $file = $this->request->getFile('image');

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move('uploads/produk', $newName);

            $this->ProdukModel->update($produkId, ['image' => $newName]);

            return redirect()->back()->with('success', 'Gambar berhasil diperbarui.');
        }

        return redirect()->back()->with('error', 'Gagal memperbarui gambar.');
    }

}
