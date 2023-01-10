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
            return redirect()->to('/premium');
         } else {
            return redirect()->back()->with('errors', $bayarModel->errors());
         }
    }
    public function upload(){
        $config['upload_path']         = '/Asset/img/upload/';  // folder upload 
       $config['allowed_types']        = 'gif|jpg|png|jpeg|webp'; // jenis file
       $config['max_size']             = 3000;
       $config['max_width']            = 1024;
       $config['max_height']           = 768;

       $this->load->library('upload', $config);

       if ( ! $this->upload->do_upload('gambar')) //sesuai dengan name pada form 
       {
              echo 'anda gagal upload';
       }
       else
       {
           //tampung data dari form
           $nama = $this->input->post('jenis');
           $harga = $this->input->post('total');
           $metode = $this->input->post('level');
           $file = $this->upload->data();
           $gambar = $file['file_name'];

           $this->BayarModel->insert(array(
               'jenispembayaran' => $nama,
               'jml_bayar' => $harga,
               'metodeBayar' => $metode,
               'Bukti' => $gambar
           ));
           redirect('premium');

       }
   }
}
