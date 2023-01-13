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
        $BookingModel = new \App\Models\BookingModel();
        $jamModel = new \App\Models\BookingModel();
        $data['info'] = $BookingModel->getTgl($id_dtl,$date);
        $jam['isi'] = $jamModel->getJam();
        $baru['date'] = $date;
        $baru['idlama'] = $idlama;
        $baru['jam'] = $jam['isi'];
        // dd($data,$jam,$date,$idlama);
        if($data['info']){
            return view('booking',$data+$jam);
        }else{
            return view('booking2',$baru);
        }
    }

    
    
    
}