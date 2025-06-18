<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DigiflazzController extends Controller
{
    public function getPriceList()
    {
        $username = 'mokoveoJLd6W';
        $apikey = 'fa9b6fcd-79ea-5bc9-b32c-042df0defe9b';
        $cmd = 'prepaid';

        $sign = md5($username . $apikey . $cmd);

        $payload = [
            'cmd' => $cmd,
            'username' => $username,
            'sign' => $sign
        ];

        $client = \Config\Services::curlrequest();

        try {
            $response = $client->post(
                'https://api.digiflazz.com/v1/price-list',
                [
                    'headers' => [
                        'Content-Type' => 'application/json',
                    ],
                    'json' => $payload,
                ]
            );

            $data = json_decode($response->getBody(), true);
            echo '<pre>';
            print_r($data);
            echo '</pre>';
        } catch (\Exception $e) {
            echo "Gagal ambil data: " . $e->getMessage();
        }
    }

    public function getGames()
    {
        $username = 'mokoveoJLd6W';
        $apikey = 'dev-a863fda0-37de-11f0-821d-59dabea8bfa9';
        $sign = md5($username . $apikey . 'prepaid');

        $payload = [
            'cmd' => 'prepaid',
            'username' => $username,
            'sign' => $sign
        ];

        $client = \Config\Services::curlrequest();
        $response = $client->post('https://api.digiflazz.com/v1/price-list', [
            'headers' => ['Content-Type' => 'application/json'],
            'json' => $payload
        ]);

        $data = json_decode($response->getBody(), true);
        $allProducts = $data['data'];

        // Filter hanya kategori "Games"
        $games = array_filter($allProducts, function ($item) {
            return strtolower($item['category']) === 'games';
        });

        return view('produk/list_games', ['games' => $games]);
    }

}
