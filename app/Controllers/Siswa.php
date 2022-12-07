<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\SiswaModel;
 
class Siswa extends BaseController
{
    public function index()
    {
        $model = new SiswaModel();
        $data['siswa'] = $model->getSiswa();
        echo view('siswaview',$data);
    }
}