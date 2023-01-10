<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table = "event";
    protected $primaryKey = "id_event";
    protected $returnType = "object";
    protected $useTimestamps = false;
    protected $allowedFields = ['id','Kota','nm_event','gambar','deskripsi','tgl_mulai','tgl_selesai','alamat'];
    protected $validationRules = [
        'id' => 'required',
        'Kota' => 'required',
        'nm_event' => 'required',
        'gambar' => [
            'rules'=>'uploaded[gambar]|max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
            'errors'=>[
                'uploaded'=>'Masukkan bukti pembayaran terlebih dahulu',
                'max_size'=>'Ukuran gambar terlalu besar',
                'is_image'=>'Yang anda pilih bukan gambar',
                'mime_in'=>'Yang anda pilih bukan gambar'
            ]
        ],
        'deskripsi' => 'required',
        ];
        
}