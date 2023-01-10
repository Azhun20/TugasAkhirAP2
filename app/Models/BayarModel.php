<?php

namespace App\Models;

use CodeIgniter\Model;

class BayarModel extends Model
{
    protected $table = "pembayaran";
    protected $primaryKey = "idPembayaran";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id','jenispembayaran', 'jml_bayar', 'metodeBayar','Bukti'];
    protected $validationRules = [
        'id' => 'required',
        'metodeBayar' => 'required',
        'Bukti' => [
            'rules'=>'uploaded[gambar]|max_size[gambar,2048]|is_image[gambar]|mime_in[gambar,image/jpg,image/jpeg,image/png]',
            'errors'=>[
                'uploaded'=>'Masukkan bukti pembayaran terlebih dahulu',
                'max_size'=>'Ukuran gambar terlalu besar',
                'is_image'=>'Yang anda pilih bukan gambar',
                'mime_in'=>'Yang anda pilih bukan gambar'
            ]
        ],
        'jml_bayar'=>'required'
        ];
}