<?php

namespace App\Controllers;

class PesanController extends BaseController
{
    public function input()
    {
        return view('input');
    }
    public function proses($p = 'kosong')
    {
        $data['pesan'] = $_GET['pesan'];
        return view('tampil', $data);
    }
}
