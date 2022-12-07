<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class KaryawanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'          =>  'Cristiano Ronaldo',
                'jenis_kelamin' =>  'pria',
                'no_telp'       =>  '012345678',
                'tanggal_lahir' =>  '1990-01-01',
                'alamat'        =>  'Jl. Semar - Portugal',
                'created_at' => Time::now()
            ],
            [
                'nama'          =>  'Messi',
                'jenis_kelamin' =>  'pria',
                'no_telp'       =>  '087654321',
                'tanggal_lahir' =>  '1992-11-11',
                'alamat'        =>  'Jl. Bagong - Argentina',
                'created_at' => Time::now()
            ]
        ];
        $this->db->table('karyawan')->insertBatch($data);
    }
}