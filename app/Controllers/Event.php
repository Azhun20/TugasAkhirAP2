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
    public function editEvent($id_user) {
        $event = new \App\Models\EventModel();
        $detail['edit'] = $event->getID($id_user);
        return view('editevent', $detail);
    }
    public function update($id_event){
        $eventModel = new \App\Models\EventModel();
        $newbukti = $this->request->getFile("gambar");
        //cek gambar
        if ($newbukti->getError()==4){
            $bukti = $this->request->getVar('gambarLama');
        } else{
            $bukti = $newbukti->getRandomName(); 
            $newbukti->move('Asset/img',$bukti);
            unlink('Asset/img/' . $this->request->getVar('gambarLama'));
        }

        $result = $eventModel->update($id_event,[
            'Kota'=>$this->request->getPost("kota"),
            'nm_event'=>$this->request->getPost("nmevent"),
            'deskripsi'=>$this->request->getPost("desc"),
            'alamat'=>$this->request->getPost("alamat"),
            'tgl_mulai'=>$this->request->getPost("tgl_mulai"),
            'tgl_selesai'=>$this->request->getPost("tgl_selesai"),
            'gambar'=>$bukti,
         ]);
         if($result !== false) {
            return view('event')->with('info', 'Berhasil Update Event');
         } else {
            return redirect()->back()->with('errors', $eventModel->errors());
         }
    }
}
