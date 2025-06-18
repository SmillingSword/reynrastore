<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\TrendingModel;

class TrendingController extends BaseController
{
    protected $trendingModel;

    public function __construct()
    {
        $this->trendingModel = new TrendingModel();
    }

    public function index()
    {
        $data['title'] = 'Trending Produk';
        $data['trending'] = $this->trendingModel->findAll();
        return view('admin/trending/index', $data);
    }

    public function store()
    {
        $validation = \Config\Services::validation();

        $rules = [
            'nama_produk' => 'required',
            'penerbit' => 'required',
            'gambar' => 'uploaded[gambar]|is_image[gambar]|max_size[gambar,2048]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->with('error', 'Data tidak valid atau gambar tidak sesuai.');
        }

        // Proses upload gambar
        $gambar = $this->request->getFile('gambar');
        $namaGambar = $gambar->getRandomName();
        $gambar->move('uploads/trending', $namaGambar);

        // Simpan ke database
        $this->trendingModel->save([
            'nama_produk' => $this->request->getPost('nama_produk'),
            'penerbit' => $this->request->getPost('penerbit'),
            'gambar' => $namaGambar,
        ]);

        return redirect()->back()->with('success', 'Trending produk berhasil ditambahkan.');
    }

    public function delete($id)
    {
        $item = $this->trendingModel->find($id);
        if ($item && file_exists('uploads/trending/' . $item['gambar'])) {
            unlink('uploads/trending/' . $item['gambar']);
        }

        $this->trendingModel->delete($id);
        return redirect()->back()->with('success', 'Trending produk berhasil dihapus.');
    }
}
