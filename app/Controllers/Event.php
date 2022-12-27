<?php

namespace App\Controllers;

class Event extends BaseController
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
        $eventModel = new \App\Models\EventModel();
        $event['event'] = $eventModel->orderBy('id_event', 'asc')->paginate(6);
        $event['pager'] = $eventModel->pager;
        echo view('event', $event);
    }
    public function addEvent(){
        return view('detailevent');
    }
}
