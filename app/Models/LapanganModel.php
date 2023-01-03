<?php

namespace App\Models;

use CodeIgniter\Model;

class LapanganModel extends Model
{
        public function getDetail($id_lap)
    {
         return $this->db->table('dtl_lap','lapangan')
         ->select('*')
         ->join('lapangan','lapangan.id_lap=dtl_lap.id_lap')
         ->where('Lapangan.id_lap',$id_lap)
         ->get()->getResultArray();  
    }
    public function nilaijoin($id_lap) {
		$this->db->select('*');
		$this->db->from('dtl_lap');
		$this->db->join('Lapangan', 'Lapangan.id_lap = dtl_lap.id_lap', 'left');
		$this->db->where('Lapangan.id_lap',$id_lap);
		return $this->db->get()->result();
	}
}