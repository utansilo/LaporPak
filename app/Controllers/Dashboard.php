<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\AdminModel;
use App\Models\LaporanModel;

class Dashboard extends Controller
{
    public function index()
    {
        $model = new LaporanModel();
        $data['laporan'] = $model->findAll();
        $data['viewContent'] = 'dashboard.php';
        return view('dash/main', $data);
    }
    public function admin()
    {
        $model = new LaporanModel();
        $data['laporan'] = $model->findAll();
        $data['viewContent'] = 'admin.php';
        return view('dash/main', $data);
    }
    public function forms()
    {
        $data['viewContent'] = 'form.php';
        return view('dash/main', $data);
    }
    public function report()
    {
        $data['viewContent'] = 'report.php';
        return view('dash/main', $data);
    }
    // public function info()
    // {
    //     $data['viewContent'] = 'info.php';
    //     return view('dash/main', $data);
    // }
    
    public function check_menu()
    {
        $adminModel = new AdminModel();
        $user = $adminModel->where('email', session('email'))->first();
        
        $response = [
            'success' => false
        ];

        if ($user && $user['is_dashboard_active'] == 1) {
            $response['success'] = true;
        }

        return $this->response->setJSON($response);
    }
}
