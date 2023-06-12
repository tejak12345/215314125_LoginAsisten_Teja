<?php

namespace App\Controllers;

class lulus extends BaseController
{
    public function index()
    {
        return view('input_data');
    }

    public function process_data()
    {
        $nim = $this->request->getPost('nim');
        $nama = $this->request->getPost('nama');
        $status = $this->request->getPost('status');

        $data['nim'] = $nim;
        $data['nama'] = $nama;
        $data['status'] = $status;

        return view('status_kelulusan', $data);
    }
}
