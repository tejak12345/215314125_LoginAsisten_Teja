<?php

namespace App\Models;

use CodeIgniter\Model;

class AsistenModel extends Model
{
    protected $table = 'asisten';
    protected $primaryKey = 'nim';

    protected $allowedFields = ['no', 'nim', 'nama', 'praktikum', 'ipk'];
    protected $useAutoIncrement = false;

    public function simpan($record)
    {
        $this->save([
            'nim' => $record['nim'],
            'nama' => $record['nama'],
            'praktikum' => $record['praktikum'],
            'ipk' => $record['ipk'],
        ]);
    }

    public function hapus($nim)
    {
        $this->where(['nim' => $nim])->delete();
    }

    public function ubah($data)
    {
        $this->save([
            'nim' => $data['nim'],
            'nama' => $data['nama'],
            'praktikum' => $data['praktikum'],
            'ipk' => $data['ipk'],
        ]);
    }

    public function ambil($nim)
    {
        return $this->where(['nim'=>$nim])->first();
    }
}
