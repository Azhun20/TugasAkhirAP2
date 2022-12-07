<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table = "user";
    protected $primaryKey = "no";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['iduser','NamaMahasiswa', 'Jurusan', 'Tugas','UTS','UAS'];
    protected $validationRules = [
        'iduser' => 'required',
        'NamaMahasiswa' => 'required',
        'Jurusan' => 'required',
        ];
}