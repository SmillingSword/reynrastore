<?php

namespace App\Controllers;

use App\Models\UserModel;

class PaymentController extends BaseController
{
    public function bayarSaldo()
    {
        $json = $this->request->getJSON();
        $harga = (int) $json->price;

        $userId = session()->get('user_id');
        if (!$userId) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'User belum login.'
            ]);
        }

        $userModel = new UserModel();
        $user = $userModel->find($userId);

        if (!$user) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'User tidak ditemukan.'
            ]);
        }

        if ($user['saldo'] < $harga) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Saldo tidak mencukupi.'
            ]);
        }

        // Kurangi saldo
        $userModel->update($userId, [
            'saldo' => $user['saldo'] - $harga
        ]);

        return $this->response->setJSON([
            'success' => true,
            'message' => 'Pembayaran berhasil dengan saldo.'
        ]);
    }

    public function bayarQris()
    {
        $body = $this->request->getJSON();
        $nominal = isset($body->nominal) ? (int) $body->nominal : 0;
        
        if (!$nominal || !is_numeric($nominal)) {
            return $this->response->setStatusCode(400)->setJSON([
                'success' => false,
                'message' => 'Nominal tidak valid'
            ]);
        }

        $codeqr = getenv('OKECONNECT_STATIC_QR');
        $apiReq = getenv('ZANNSTORE_API');

        $url = "https://cekid.zannstore.com/v2/qris-create?qris=" . urlencode($codeqr) . "&nominal=" . $nominal . "&api_req=" . $apiReq;

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_SSL_VERIFYPEER => false // jangan lupa aktifkan lagi di produksi
        ]);

        $response = curl_exec($curl);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        if (curl_errno($curl)) {
            return $this->response->setStatusCode(500)->setJSON([
                'success' => false,
                'message' => 'Curl error: ' . curl_error($curl)
            ]);
        }

        curl_close($curl);

        $data = json_decode($response, true);

        if (
            $httpCode !== 200 ||
            !isset($data['status']) ||
            $data['status'] !== 'success' ||
            !isset($data['data']['qris_link'])
        ) {
            return $this->response->setStatusCode(500)->setJSON([
                'success' => false,
                'message' => 'Gagal mengambil data QRIS dari server.'
            ]);
        }

        return $this->response->setJSON([
            'success'   => true,
            'qris_link' => $data['data']['qris_link'],
            'invoice'   => $data['data']['invoice_id'] ?? null
        ]);
    }
}
