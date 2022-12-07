<?php

namespace App\Controllers;

use App\Models\DosenModel;

class Mahasiswa extends BaseController
{
    public function index(){
        if(empty(session()->has('logged_in'))){
            return redirect()->to(base_url('Login'));
        }elseif(session()->has('logged_in')){
            if(session()->get('level')=='admin'){
                return redirect()->to(base_url('Admin'));
            }elseif(session()->get('level')== 'dosen'){
                return redirect()->to(base_url('Dosen'));
            }
        }
        $mahasiswa = new DosenModel();
        $data['mahasiswa'] = $mahasiswa->orderBy('NamaMahasiswa', 'asc')->paginate(6);
        $data['pager'] = $mahasiswa->pager;
        echo view('mahasiswa', $data);
    }

    public function show(){
        $mahasiswa = new DosenModel();
        $data['mahasiswa'] = $mahasiswa->orderBy('NamaMahasiswa', 'asc')->paginate(6);
        $data['pager'] = $mahasiswa->pager;
        return view('detailmhs', $data);
     }
}