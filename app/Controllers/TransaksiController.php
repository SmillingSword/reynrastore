<?php

namespace App\Controllers;

use App\Models\ProdukModel;
use App\Models\UserModel;
use CodeIgniter\Controller;

class TransaksiController extends BaseController
{
    public function order()
    {
        helper(['form']);

        if (!$this->request->isAJAX()) return redirect()->back();

        $produk = $this->request->getPost('produk');
        $gameId = $this->request->getPost('gameId');
        $nominal = $this->request->getPost('nominal');
        $harga = (int) $this->request->getPost('harga');
        $metode = $this->request->getPost('metode');
        $userId = session()->get('user_id');

        if (!$produk || !$gameId || !$nominal || !$harga || !$metode) {
            return $this->response->setJSON(['success' => false, 'message' => 'Data tidak lengkap']);
        }

        $refId = 'INV-' . time() . rand(100, 999);

        // Cek saldo kalau metode = Saldo
        if ($metode === 'Saldo') {
            $userModel = new \App\Models\UserModel();
            $user = $userModel->find($userId);

            if (!$user || $user['saldo'] < $harga) {
                return $this->response->setJSON(['success' => false, 'message' => 'Saldo tidak cukup!']);
            }

            // Potong saldo
            $userModel->update($userId, ['saldo' => $user['saldo'] - $harga]);
        }

        // Simpan ke DB
        $db = \Config\Database::connect();
        $db->table('transaksi')->insert([
            'user_id'   => $userId,
            'produk'    => $produk,
            'game_id'   => $gameId,
            'nominal'   => $nominal,
            'harga'     => $harga,
            'metode'    => $metode,
            'ref_id'    => $refId,
            'status'    => 'Pending',
            'created_at'=> date('Y-m-d H:i:s')
        ]);

        // Kirim ke Digiflazz
        $username = getenv('DIGIFLAZZ_USERNAME');
        $apiKey   = getenv('DIGIFLAZZ_API_KEY');
        $sign     = md5($username . $apiKey . $refId);

        $body = [
            'username'        => $username,
            'buyer_sku_code'  => $produk,
            'customer_no'     => $gameId,
            'ref_id'          => $refId,
            'sign'            => $sign,
            'testing'         => false
        ];

        $response = file_get_contents('https://api.digiflazz.com/v1/transaction', false, stream_context_create([
            'http' => [
                'method'  => 'POST',
                'header'  => 'Content-Type: application/json',
                'content' => json_encode($body)
            ]
        ]));

        $res = json_decode($response, true);

        if (isset($res['data']) && $res['data']['status'] === 'Pending') {
            return $this->response->setJSON(['success' => true, 'message' => 'Transaksi berhasil dikirim!', 'data' => $res['data']]);
        }

        return $this->response->setJSON(['success' => false, 'message' => $res['data']['message'] ?? 'Transaksi gagal']);
    }

}
