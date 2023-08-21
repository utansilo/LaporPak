<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Signup extends Controller
{
    public function index()
    {
        echo view('signup_form');
    }

    public function signup()
    {
        $validation = \Config\Services::validation();

        $validation->setRules([
            'nama' => 'required|min_length[3]',
            'email' => 'required|valid_email',
            'password' => 'required|min_length[8]',
            'agreement' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $request = \Config\Services::request();

        $data = [
            'nama' => $request->getPost('nama'),
            'email' => $request->getPost('email'),
            'password' => password_hash($request->getPost('password'), PASSWORD_DEFAULT),
            'role' => $request->getPost('role'),
        ];
        $adminModel = new \App\Models\AdminModel();
        $adminModel->insert($data);

        $session = session();
        $session->setFlashdata('massage', '<div class="p-3 mb-2 bg-success-subtle text-emphasis-success">Selamat, Akun anda sudah terdaftar</div>');

        return redirect()->to('/');
    }

}