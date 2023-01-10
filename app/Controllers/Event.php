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
    public function detEvent($id_event){
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
        $event['event'] = $eventModel->find($id_event);
        return view('detailevent',$event);
    }
    public function addEvent(){
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
        $newbukti = $this->request->getFile("gambar");
        $bukti = $newbukti->getRandomName(); 
        $result = $eventModel->insert([
            'Kota'=>$this->request->getPost("kota"),
            'nm_event'=>$this->request->getPost("nmevent"),
            'deskripsi'=>$this->request->getPost("desc"),
            'alamat'=>$this->request->getPost("alamat"),
            'tgl_mulai'=>$this->request->getPost("tgl_mulai"),
            'tgl_selesai'=>$this->request->getPost("tgl_selesai"),
            'gambar'=>$bukti,
            'id'=>session()->get('id_user')
         ]);
         if($result !== false) {
            $newbukti->move('Asset/img',$bukti);
            return view('event');
         } else {
            return redirect()->back()->with('errors', $eventModel->errors());
         }
    }
    public function myEvent(){
        if(empty(session()->has('logged_in'))){
            return redirect()->to(base_url('Login'));
        }elseif(session()->has('logged_in')){
            if(session()->get('level')=='admin'){
                return redirect()->to(base_url('Admin'));
            }elseif(session()->get('level')== 'dosen'){
                return redirect()->to(base_url('Dosen'));
            }
        }
        return view('addevent');
       
    }
    public function editEvent($id) {
        $event = new EventModel();
        $detail['edit'] = $event->find($id);
        return view('editevent', $detail);
    }
    public function update($id){
        $eventModel = new \App\Models\EventModel();
        $newbukti = $this->request->getFile("gambar");
        $bukti = $newbukti->getRandomName(); 
        $result = $eventModel->update($id,[
            'Kota'=>$this->request->getPost("kota"),
            'nm_event'=>$this->request->getPost("nmevent"),
            'deskripsi'=>$this->request->getPost("desc"),
            'alamat'=>$this->request->getPost("alamat"),
            'tgl_mulai'=>$this->request->getPost("tgl_mulai"),
            'tgl_selesai'=>$this->request->getPost("tgl_selesai"),
            'gambar'=>$bukti,
         ]);
         if($result !== false) {
            $newbukti->move('Asset/img',$bukti);
            return view('event');
         } else {
            return redirect()->back()->with('errors', $eventModel->errors());
         }
    }
}
