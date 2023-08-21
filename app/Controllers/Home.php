<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends BaseController
{
    public function index()
    {
        return view('login/index');
    }
    
    public function authentication()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $adminModel = new \App\Models\AdminModel();
        $user = $adminModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['password'])) {
            session()->set('user', $user);
            if ($user['role'] == 'admin') {
                return redirect()->to('dashboard');
            } else {
                return redirect()->to('dashboard');
            }
        } else {
            session()->setFlashdata('error_message', 'Invalid email or password');
            return redirect()->to('/');
        }
    }

    public function logout()
    {
        session()->remove('id');
        return redirect()->to('/');
    }

}
