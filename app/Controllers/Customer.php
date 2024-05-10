<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CustomerModel;
use CodeIgniter\HTTP\ResponseInterface;

class Customer extends BaseController
{
    public function __construct()
    {
        $this->customer = new CustomerModel();
    }
    public function index()
    {
        $data = [
            'active' => 'customer',
            'judul' => 'Master Data',
            'customer' => $this->customer->findAll()
        ];
        return view('customer', $data);
    }
    public function detail(int $id)
    {
        return $this->response->setJSON($this->customer->find($id));
    }


    public function tambah()
    {
        // Validasi form tambah data
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama_customer' => 'required',
            'nomor_telepon' => 'required',
            'email' => 'required'
        ]);

        // Jika validasi gagal, kembali ke halaman sebelumnya dengan pesan error
        if (!$validation->withRequest($this->request)->run()) {
            session()->setFlashdata('error', $validation->getErrors());
            return redirect()->back();
        }

        // Ambil data dari form
        $NamaCustomer = $this->request->getPost('nama_customer');
        $nomorTelepon = $this->request->getPost('nomor_telepon');
        $email = $this->request->getPost('email');
        
        
        // Simpan data ke database, sesuaikan dengan model dan database Anda

        $customerModel = new \App\Models\CustomerModel();
        $customerModel->save([
            'nama_customer' => $NamaCustomer,
            'nomor_telepon' => $nomorTelepon,
            'email' => $email
        ]);

        // Set flashdata untuk pesan sukses
        session()->setFlashdata('message', 'Data customer berhasil ditambahkan.');
        return redirect()->to('/customer');
    }
}


