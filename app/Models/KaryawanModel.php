<?php
namespace App\Models;
use CodeIgniter\Model;

class KaryawanModel extends Model
{
    protected $table      = 'karyawan';
    protected $primaryKey = 'id_karyawan';
    protected $returnType     = 'object';
    protected $allowedFields = ['nama', 'jenis_kelamin', 'no_telp', 'email', 'tanggal_lahir', 'alamat'];
    protected $useTimestamps = true;
    protected $validationRules = [
        'nama' => 'required',
        'jenis_kelamin' => 'required',
        'no_telp' => 'required',
        'tanggal_lahir' => 'required',
        'alamat' => 'required'
        ];
}