<?php namespace App\Models;
use CodeIgniter\Model;
 
class SiswaModel extends Model
{
     
    public function getSiswa()
    {
         return $this->db->table('siswa')
         ->join('kelas','kelas.IDKelas=siswa.IDKelas')
         ->join('jurusan', 'jurusan.IDJurusan=siswa.IDJurusan')->orderby('NamaSiswa asc') 
         ->get()->getResult();  
    }
 }