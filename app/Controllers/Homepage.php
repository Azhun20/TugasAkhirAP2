<?php

namespace App\Controllers;

class Homepage extends BaseController
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
        $lapanganModel = new \App\Models\DashboardModel();
        $lapangan['dashboard'] = $lapanganModel->orderBy('kota', 'asc')->paginate(6);
        $lapangan['pager'] = $lapanganModel->pager;
        echo view('dashboard', $lapangan);
    }
    public function booking($id_lap)
    {
        $LapanganModel = new \App\Models\DashboardModel();
        $lapangan['lapangan'] = $LapanganModel->find($id_lap);
        $detailModel = new \App\Models\LapanganModel();
        $detail['detail'] = $detailModel->find($id_lap);
        return view('booking',$lapangan,$detail);
    }

    public function detail($id_lap)
    {
        $model = new \App\Models\LapanganModel();
        $data['info'] = $model->getDetail($id_lap);
        echo view('detaillap',$data);
    }
}
