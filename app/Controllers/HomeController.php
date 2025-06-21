<?php

namespace App\Controllers;
use App\Models\PromoModel;
use App\Models\FlashSaleModel;
use App\Models\TrendingModel;
use App\Models\ProdukModel;

class HomeController extends BaseController
{
    public function index()
    {
        $bannerModel = new PromoModel();
        $flashModel = new FlashSaleModel();
        $trendingModel = new TrendingModel();
        $productModel = new ProdukModel();
        
        $data = [
            'title' => 'Beranda - Reynra Store'
        ];
        $data['trendingItems'] = $trendingModel->findAll();
        $data['banners'] = $bannerModel->findAll();
        $data['flashSales'] = $flashModel->findAll();
        $data['products'] = $productModel->findAll();
        $data['kategoriList'] = array_unique(array_column($data['products'], 'kategori'));
        return view('home', $data);
    }

    public function detail($slug)
{
    $productModel = new ProdukModel();
    $produk = $productModel->where('slug', $slug)->first();

    if (!$produk) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    // Ambil daftar harga dari Digiflazz berdasarkan brand
    $username = getenv('DIGIFLAZZ_USERNAME');
    $apiKey   = getenv('DIGIFLAZZ_API_KEY');
    $sign     = md5($username . $apiKey . 'pricelist');

    $response = file_get_contents('https://api.digiflazz.com/v1/price-list', false, stream_context_create([
        'http' => [
            'method'  => 'POST',
            'header'  => 'Content-Type: application/json',
            'content' => json_encode([
                'cmd'      => 'prepaid',
                'username' => $username,
                'sign'     => $sign
            ])
        ]
    ]));

    $pricelist = json_decode($response, true);
    $varian = [];

    if (isset($pricelist['data'])) {
        foreach ($pricelist['data'] as $item) {
            if ($item['brand'] == $produk['brand']) {
                $varian[] = [
                    'nama'  => $item['product_name'],
                    'harga' => ceil($item['price'] * 1.03) // markup 3%
                ];
            }
        }

        // Urutkan berdasarkan harga (ASC)
        usort($varian, function($a, $b) {
            return $a['harga'] <=> $b['harga'];
        });
    }

    return view('produk/detail', [
        'produk' => $produk,
        'varian' => $varian
    ]);
}


}
