<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table = 'laporan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['prodi', 'fakultas', 'nlaporan', 'jlaporan', 'nerima', 'isian', 'status', 'deskripsi']; 

}