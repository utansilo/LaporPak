<?php

namespace App\Controllers;

use App\Models\ComplaintModel;
use CodeIgniter\Controller;
use App\Models\LaporanModel;
use CodeIgniter\Files\File;
use CodeIgniter\HTTP\IncomingRequest;

class LaporanController extends BaseController
{
    // public function index()
    // {
    //     $laporanModel = new \App\Models\LaporanModel();

    //     // Ambil semua data keluhan dari database
    //     $data['laporan'] = $laporanModel->findAll();

    //     // Tampilkan halaman utama keluhan dengan data keluhan
    //     return view('complaint/index', $data);
    // }

    // public function create()
    // {
    //     // Tampilkan halaman formulir untuk membuat keluhan
    //     return view('complaint/create');
    // }

    public function store()
    {
        $laporanModel = new LaporanModel();
        $request = request();
        $data = [
            'prodi' => $request->getPost('prodi'),
            'fakultas' => $request->getPost('fakultas'),
            'nlaporan' => $request->getPost('nlaporan'),
            'jlaporan' => $request->getPost('jlaporan'),
            'nerima' => $request->getPost('nerima'),
            'isian' => $request->getPost('isian'),
        ];
        // Simpan data keluhan ke database
        $laporanModel->insert($data);
        // Setelah keluhan berhasil disimpan, redirect ke halaman utama
        return redirect()->to('dashboard');
    }

    // public function edit($id)
    // {
    //     $laporanModel = new LaporanModel();

    //     // Ambil data keluhan berdasarkan ID
    //     $data['laporan'] = $laporanModel->find($id);
    //     // Tampilkan halaman edit keluhan dengan data keluhan
    //     return view('dash/editform', $data);
    // }

    public function update($id)
    {
        // Proses pembaruan keluhan yang dikirim melalui formulir
        // Lakukan validasi data, perbarui data di database, dll.

        $laporanModel = new LaporanModel();

        $request = request();
        $data = [
            'prodi' => $request->getPost('prodi'),
            'fakultas' => $request->getPost('fakultas'),
            'nlaporan' => $request->getPost('nlaporan'),
            'jlaporan' => $request->getPost('jlaporan'),
            'nerima' => $request->getPost('nerima'),
            'isian' => $request->getPost('isian'),
        ];

        // Perbarui data keluhan di database berdasarkan ID
        $laporanModel->update($id, $data);

        // Setelah keluhan berhasil diperbarui, redirect ke halaman utama
        return redirect()->to('dashboard');
    }

    public function delete($id)
    {
        $laporanModel = new LaporanModel();
        $image = $laporanModel->find($id)['gambar'];

        if ($image) {
            unlink(ROOTPATH . 'public/uploads/' . $image);
        }

        // Hapus data keluhan dari database berdasarkan ID
        $laporanModel->delete($id);

        // Setelah keluhan berhasil dihapus, redirect ke halaman utama
        return redirect()->to('admin');
    }
    public function storeAdmin($id)
    {
        // Proses penyimpanan keluhan yang dikirim melalui formulir
        // Lakukan validasi data, simpan ke database, dll.

        $laporanModel = new LaporanModel();
    
        $request = request();
        $data = [
            'status' => $request->getPost('status'),
            'deskripsi' => $request->getPost('deskripsi'),
        ];

        // Simpan data keluhan ke database
        $laporanModel->update($id, $data);

        // Setelah keluhan berhasil disimpan, redirect ke halaman utama
        return redirect()->to('admin');
    }
}
