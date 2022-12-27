<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table = "event";
    protected $primaryKey = "id_event";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ['Kota','nm_event','gambar','deskripsi','tgl_mulai','tgl_selesai','alamat'];
    protected $validationRules = [
        'id_event' => 'required',
        'Kota' => 'required',
        'nm_event' => 'required',
        'gambar' => 'required',
        'deskripsi' => 'required',
        ];
}