<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Admin extends BaseController
{
    public function index(){
        if(empty(session()->has('logged_in'))){
            return redirect()->to(base_url('Login'));
        }elseif(session()->has('logged_in')){
            if(session()->get('level')== 'dosen'){
                return redirect()->to(base_url('Dosen'));
            }elseif(session()->get('level') == 'mahasiswa'){
                return redirect()->to(base_url('Mahasiswa'));
            }
        }
        $admin = new UsersModel();
        $data['admin'] = $admin->orderBy('name', 'asc')->findAll();
        echo view('home_view', $data);
    }
    public function edit($id) {
        $admin = new UsersModel();
        $detail['edit'] = $admin->find($id);
        return view('editlvl', $detail);
    }
    public function update($id) {
        $admin = new UsersModel();
        
        $result = $admin->update($id,[
           'level'=>$this->request->getPost("level")
        ]);
  
        if($result==true) {
           return redirect()->to('/admin')
                          ->with('info', 'Berhasil mengupdate data');
        } else {
           return redirect()->back()
                                    ->with('errors', $admin->errors());
        }
  
  }
  public function delete($id) {
    $admin = new UsersModel();
    $detail['delete'] = $admin->find($id);

    if ($this->request->getMethod() === 'post') {
       $admin->delete($id);
       
       return redirect()->to('/admin')
                      ->with('info', 'Berhasil menghapus data');
    }

    return view('deleteuser', $detail);
  
    }
}