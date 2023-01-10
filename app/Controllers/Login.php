<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{
    public function index()
    {  
        if(session()->has('logged_in')){
            if(session()->get('level')=='admin'){
                return redirect()->to(base_url('Admin'));
            }elseif(session()->get('level')== 'dosen'){
                return redirect()->to(base_url('Dosen'));
            }elseif(session()->get('level') == 'mahasiswa'){
                return redirect()->to(base_url('Homepage'));
            }
        }
        return view('login_view');
    }
    public function process()
    {
        $users = new UsersModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
            'email' => $email,
        ])->first();
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'id_user' => $dataUser->id,
                    'email' => $dataUser->email,
                    'name' => $dataUser->name,
                    'level' => $dataUser->level,
                    'premium' => $dataUser->premium,
                    'logged_in' => TRUE
                ]);
                $level = $dataUser->level;
                if($level == 'admin'){
                    return redirect()->to(base_url('Admin'));
                }else if($level == 'mahasiswa'){
                    return redirect()->to(base_url('Homepage'));
                }else if($level == 'dosen'){
                    return redirect()->to(base_url('Dosen'));
                }else {
                    session()->setFlashdata('error', 'Account belom diaccept admin');
                return redirect()->back();
                }
                
            } else {
                session()->setFlashdata('error', 'Email & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Email & Password Salah');
            return redirect()->back();
        }
    }
    function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}