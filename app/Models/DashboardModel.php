<?php

namespace App\Models;

use CodeIgniter\Model;

class DashboardModel extends Model
{
    protected $table = "lapangan";
    protected $primaryKey = "id_lap";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ['NamaLap','Kota', 'Alamat', 'jmlh_lap','deskripsi','image'];
    protected $validationRules = [
        'id_lap' => 'required',
        'Kota' => 'required',
        ];
}