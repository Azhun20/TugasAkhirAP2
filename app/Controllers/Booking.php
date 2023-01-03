<?php

namespace App\Controllers;

class Booking extends BaseController
{
    public function index($id_dtl)
    {
        $BookingModel = new \App\Models\BookingModel();
        $data['info'] = $BookingModel->getData($id_dtl);
        return view('booking',$data);
    }
}