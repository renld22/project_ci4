<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BarangModel;
use CodeIgniter\HTTP\ResponseInterface;

class Barang extends BaseController
{
    public function __construct()
    {
        $this->barang = new BarangModel();
    }
    public function index()
    {
        $data = [
            'active' => 'barang',
            'judul' => 'Master Data',
            'barang' => $this->barang->findAll()
        ];
        return view('barang', $data);
    }
    public function detail(int $id)
    {
        return $this->response->setJSON($this->barang->find($id));
    }
    public function tambah()
    {
        // Validasi form tambah data
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama_barang' => 'required',
            'harga_barang' => 'required',
            'stok' => 'required'
        ]);

        // Jika validasi gagal, kembali ke halaman sebelumnya dengan pesan error
        if (!$validation->withRequest($this->request)->run()) {
            session()->setFlashdata('error', $validation->getErrors());
            return redirect()->back();
        }

        // Ambil data dari form
        $NamaBarang = $this->request->getPost('nama_barang');
        $hargaBarang = $this->request->getPost('harga_barang');
        $stok = $this->request->getPost('stok');
        
        
        // Simpan data ke database, sesuaikan dengan model dan database Anda

        $barangModel = new \App\Models\BarangModel();
        $barangModel->save([
            'nama_barang' => $NamaBarang,
            'harga_barang' => $hargaBarang,
            'stok' => $stok
        ]);

        // Set flashdata untuk pesan sukses
        session()->setFlashdata('message', 'Data barang berhasil ditambahkan.');
        return redirect()->to('/barang');
    }
}
