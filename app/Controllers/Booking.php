<?php

namespace App\Controllers;

class Booking extends BaseController
{
    public function index($id_dtl)
    {
        $BookingModel = new \App\Models\BookingModel();
        $jamModel = new \App\Models\BookingModel();
        $data['info'] = $BookingModel->getData($id_dtl);
        $jam['isi'] = $jamModel->getJam();
        return view('booking',$data+$jam);
        
    }
    public function filter($id_dtl){
        $date = $this->request->getVar('tgl');
        $idlama = $this->request->getVar('idlama');
        $idlap = $this->request->getVar('idlap');
        $BookingModel = new \App\Models\BookingModel();
        $jamModel = new \App\Models\BookingModel();
        $data['info'] = $BookingModel->getTgl($id_dtl,$date);
        $jam['isi'] = $jamModel->getJam();
        $baru['date'] = $date;
        $baru['idlap'] = $idlap;
        $baru['idlama'] = $idlama;
        $baru['jam'] = $jam['isi'];
        // dd($data,$jam,$date,$idlama);
        if($data['info']){
            return view('booking',$data+$jam);
        }else{
            return view('booking2',$baru);
        }
    }
    public function process(){
        $bookingModel = new \App\Models\BookingModel();
        $idlap = $this->request->getVar('idlap');
        $iddtl = $this->request->getVar('idlama');
        $result = $bookingModel->insert([
            'id_lap'=>$idlap,
            'id_dtl'=>$iddtl,
            'tanggal'=>$this->request->getPost("tgl"),
            'id_jam'=>$this->request->getPost("idjam"),
            'id'=>session()->get('id_user')
         ]);
         if($result !== false) {
            return redirect()->to(base_url('Homepage'))
                                ->with('info', 'Berhasil Booking Lapangan');
         } else {
            return redirect()->back()->with('errors', $bookingModel->errors());
         }
    }
    
}