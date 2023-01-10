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
        // dd($data,$jam);
        return view('booking',$data+$jam);
        
    }
    // public function getJam(){
    //     $jamModel
    // }
}