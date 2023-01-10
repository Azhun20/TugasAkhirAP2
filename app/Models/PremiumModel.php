<?php namespace App\Models;
use CodeIgniter\Model;
class PremiumModel extends Model
{
     
    public function getData()
    {
         return $this->db->table('premium')
         ->get()->getResultArray();  
    }
    public function getID($id)
    {
         return $this->db->table('premium')
         ->where('premium.idPremium',$id)
         ->get()->getResultArray();  
    }
 }