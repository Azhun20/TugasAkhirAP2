<?php namespace App\Models;
use CodeIgniter\Model;
class AllModel extends Model
{
     
    public function getData()
    {
         return $this->db->table('lapangan')
         ->join('booking','lapangan.id_lap=booking.id_lap')
         ->join('dtl_lap', 'dtl_lap.id_lap=lapangan.id_lap')
         ->get()->getResultArray();  
    }
 }