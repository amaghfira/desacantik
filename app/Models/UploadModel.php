<?php

namespace App\Models;

use CodeIgniter\Model;

class UploadModel extends Model
{
    

    protected $db;

    public function __construct()
    {
        $this->db = db_connect();   
    }

    // mengecek desa ada di master atau tidak
    function cekDesa($nama_kabkot, $nama_kec, $nama_desa) {
        $builder = $this->db->table('desa');
        return $builder->where('nama_kabkot', $nama_kabkot)
                        ->where('nama_kec', $nama_kec)
                        ->where('nama_desa', $nama_desa)
                        ->countAllResults();
    }

    // update isian desa
    function insertDesa($nama_kabkot, $nama_kec, $nama_desa,$data) {
        $builder = $this->db->table('desa');
        $updatedesa = $builder->where('nama_kabkot', $nama_kabkot)
                                ->where('nama_kec', $nama_kec)
                                ->where('nama_desa', $nama_desa)
                                ->update($data);
        if ($updatedesa) {
            return true;
        } else {
            return false;
        }
    }

    // insert landmark
    function insertLandmark($data) {
        $builder = $this->db->table('landmark_desa');
        if ($builder->insert($data)) {
            return true;
        } else {
            return false;
        }
    }

    // insert db foto 
    function insertFoto($data) {
        $builder = $this->db->table('foto_desa');
        if ($builder->insert($data)) {
            return true;
        } else {
            return false;
        }
    }

    function insertLaporan($data) {
        $builder = $this->db->table('laporan');
        if ($builder->insert($data)) {
            return true;
        } else {
            return false;
        }
    }
}
