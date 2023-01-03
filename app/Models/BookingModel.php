<?php

namespace App\Models;

use CodeIgniter\Model;

class BookingModel extends Model
{
    protected $table = "booking";
    protected $primaryKey = "idbooking";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_lap','id_dtl', 'id', 'mulai','tanggal','selesai'];
    protected $validationRules = [
        'mulai' => 'required',
        'tanggal' => 'required',
        'selesai' => 'required',
        ];
        public function getData($id_dtl)
        {
             return $this->db->table('booking')
             ->select('*')
             ->join('dtl_lap','dtl_lap.id_dtl=booking.id_dtl')
             ->where('dtl_lap.id_dtl',$id_dtl)
             ->get()->getResultArray();  
        }
}