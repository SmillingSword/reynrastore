<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PromoModel;

class PromoController extends BaseController
{
    protected $promoModel;

    public function __construct()
    {
        $this->promoModel = new PromoModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Kelola Promo',
            'promos' => $this->promoModel->findAll()
        ];

        return view('admin/promo/index', $data);
    }

    public function create()
    {
        return view('admin/promo/create');
    }

    public function store()
    {
        $bannerModel = new PromoModel();

        $file = $this->request->getFile('banner');
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(ROOTPATH . 'public/uploads/banners', $newName);

            $data = [
                'image_path' => $newName
            ];

            $bannerModel->insert($data);
            return redirect()->back()->with('success', 'Banner berhasil ditambahkan.');
        }

        return redirect()->back()->with('error', 'Gagal upload banner.');
    }



    public function delete($id)
    {
        $promo = $this->promoModel->find($id);
        if ($promo && file_exists($promo['image_path'])) {
            unlink($promo['image_path']);
        }
        $this->promoModel->delete($id);
        return redirect()->back()->with('success', 'Promo berhasil dihapus.');
    }
}
