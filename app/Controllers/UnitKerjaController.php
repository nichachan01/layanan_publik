<?php

namespace App\Controllers;

use App\Models\UnitKerjaModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UnitKerjaController extends BaseController
{
    public function index()
    {
        //
        $model = new UnitKerjaModel();
        $data['units'] = $model->findAll();

        return view('unitkerja_view',$data);
    }

    public function create()
    {
        //
        return view('tambah_unitkerja_view');
    }

    public function store()
    {
        //
        $model = new UnitKerjaModel();
        $data = [
            'nama_unitkerja'  => $this->request->getPost('nama_unitkerja'),
            'kepala_unitkerja' => $this->request->getPost('kepala_unitkerja')
        ];
        $model->insert($data);
        return redirect()->to('/unitkerja');
        // return view('unitkerja_view');
    }

    public function edit($id)
    {
        //
        $model = new UnitKerjaModel();
        $data = $model->find($id);
        // var_dump($data);
        return view('edit_unitkerja_view',['data'=>$data]);
    }

    public function update()
    {
        $model = new UnitKerjaModel();
        $id = $this->request->getPost('id_unitkerja');
        $data = [
            'nama_unitkerja'  => $this->request->getPost('nama_unitkerja'),
            'kepala_unitkerja' => $this->request->getPost('kepala_unitkerja')
        ];
        $model->update($id, $data);
        return redirect()->to('/unitkerja');
    }

    public function delete($id)
    {
        //
        $model = new UnitKerjaModel();
        $model->delete($id);
        return redirect()->to('/unitkerja');
    }
}