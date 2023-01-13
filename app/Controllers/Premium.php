<?php

namespace App\Controllers;

class Premium extends BaseController
{
    public function index()
    {
        if(empty(session()->has('logged_in'))){
            return redirect()->to(base_url('Login'));
        }elseif(session()->has('logged_in')){
            if(session()->get('level')=='admin'){
                return redirect()->to(base_url('Admin'));
            }elseif(session()->get('level')== 'dosen'){
                return redirect()->to(base_url('Dosen'));
            }
        }
        $PremiumModel = new \App\Models\PremiumModel();
        $premium['info'] = $PremiumModel->getData();
        echo view('premium', $premium);
    }
    public function bayar($id){
        $PremiumModel = new \App\Models\PremiumModel();
        $premium['info'] = $PremiumModel->getID($id);
        return view('pembayaran', $premium);
    }
    public function process(){
        $bayarModel = new \App\Models\BayarModel();
        $newbukti = $this->request->getFile("gambar");
        $bukti = $newbukti->getRandomName(); 
        $result = $bayarModel->insert([
            'iduser'=>$this->request->getPost("id"),
            'jenispembayaran'=>$this->request->getPost("jenis"),
            'jml_bayar'=>$this->request->getPost("total"),
            'metodeBayar'=>$this->request->getPost("level"),
            'Bukti'=>$bukti,
            'id'=>session()->get('id_user')
         ]);
         if($result !== false) {
            $newbukti->move('Asset/img/upload',$bukti);
            return redirect()->to('/premium')
                                ->with('info', 'Berhasil kirim, Tunggu konfirmasi Admin');
         } else {
            return redirect()->back()->with('errors', $bayarModel->errors());
         }
   
   }
}
