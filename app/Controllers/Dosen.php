<?php

namespace App\Controllers;

use App\Models\DosenModel;

class Dosen extends BaseController
{
    public function index(){
        if(empty(session()->has('logged_in'))){
            return redirect()->to(base_url('Login'));
        }else if(session()->has('logged_in')){
            if(session()->get('level')=='admin'){
                return redirect()->to(base_url('Admin'));
            }elseif(session()->get('level') == 'mahasiswa'){
                return redirect()->to(base_url('Mahasiswa'));
            }
        }
        $dosen = new DosenModel();
        $data['dosen'] = $dosen->orderBy('iduser', 'asc')->paginate(5);
        $data['pager'] = $dosen->pager;
        echo view('dosen', $data);
    }
    public function add(){
        return view('addnilai');
    }
    public function process(){
        if (!$this->validate([
            'id' => [
                'rules' => 'required|min_length[4]|max_length[20]|is_unique[user.iduser]|numeric[user.iduser]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 20 Karakter',
                    'is_unique' => 'NRP sudah digunakan sebelumnya',
                    'numeric' => 'Input NRP Harus Berupa Angka'
                ]
            ],
            'Name' => [
                'rules' => 'required|min_length[2]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 2 Karakter'
                ]
            ],
            'Jurusan' => [
                'rules' => 'required|min_length[4]|max_length[50]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
            'tugas' => [
                'rules' => 'numeric[user.tugas]',
                'errors' => [
                    'numeric' => 'Input nilai Tugas harus angka',
                ]
            ],
            'uts' => [
                'rules' => 'numeric[user.uts]',
                'errors' => [
                    'numeric' => 'Input nilai UTS harus angka',
                ]
            ],
            'uas' => [
                'rules' => 'numeric[user.uas]',
                'errors' => [
                    'numeric' => 'Input nilai UAS harus angka',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $dosen = new DosenModel();
        $result = $dosen->insert([
            'iduser'=>$this->request->getPost("id"),
            'NamaMahasiswa'=>$this->request->getPost("Name"),
            'Jurusan'=>$this->request->getPost("Jurusan"),
            'Tugas'=>$this->request->getPost("tugas"),
            'UTS'=>$this->request->getPost("uts"),
            'UAS'=>$this->request->getPost("uas")
         ]);
         if($result==true) {
            return redirect()->to("/dosen");
         } else {
            return redirect()->back()
                                     ->with('errors', $dosen->errors());
         }
    }
    public function delete($no) {
        $dosen = new DosenModel();
        $detail['delete'] = $dosen->find($no);
  
        if ($this->request->getMethod() === 'post') {
           $dosen->delete($no);
           
           return redirect()->to('/dosen')
                          ->with('info', 'Berhasil menghapus data');
        }
  
        return view('deletemhs', $detail);
     }
     public function edit($no) {
        $dosen = new DosenModel();
        $detail['edit'] = $dosen->find($no);
        return view('editnilai', $detail);
    }
    public function update($no) {
        if (!$this->validate([
            'tugas' => [
                'rules' => 'numeric[user.tugas]',
                'errors' => [
                    'numeric' => 'Input nilai Tugas harus angka',
                ]
            ],
            'uts' => [
                'rules' => 'numeric[user.uts]',
                'errors' => [
                    'numeric' => 'Input nilai UTS harus angka',
                ]
            ],
            'uas' => [
                'rules' => 'numeric[user.uas]',
                'errors' => [
                    'numeric' => 'Input nilai UAS harus angka',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $dosen = new DosenModel();
        $result = $dosen->update($no,[
            'Tugas'=>$this->request->getPost("tugas"),
            'UTS'=>$this->request->getPost("uts"),
            'UAS'=>$this->request->getPost("uas")
        ]);
  
        if($result==true) {
           return redirect()->to('/dosen')
                          ->with('info', 'Berhasil mengupdate data');
        } else {
           return redirect()->back()
                                    ->with('errors', $dosen->errors());
        }
    }
}