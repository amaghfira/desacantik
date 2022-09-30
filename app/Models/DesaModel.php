<?php

namespace App\Models;

use CodeIgniter\Model;

class DesaModel extends Model
{
    // protected $DBGroup              = 'default';
    // protected $table                = 'desa';
    // protected $primaryKey           = 'id';
    // protected $useAutoIncrement     = true;
    // protected $insertID             = 0;
    // protected $returnType           = 'array';
    // protected $useSoftDeletes       = false;
    // protected $protectFields        = true;
    // protected $allowedFields        = ['nama_kabkot','nama_kec','nama_desa','deskripsi'];

    // // Dates
    // protected $useTimestamps        = false;
    // protected $dateFormat           = 'datetime';
    // protected $createdField         = 'created_at';
    // protected $updatedField         = 'updated_at';
    // protected $deletedField         = 'deleted_at';

    // // Validation
    // protected $validationRules      = [];
    // protected $validationMessages   = [];
    // protected $skipValidation       = false;
    // protected $cleanValidationRules = true;

    // // Callbacks
    // protected $allowCallbacks       = true;
    // protected $beforeInsert         = [];
    // protected $afterInsert          = [];
    // protected $beforeUpdate         = [];
    // protected $afterUpdate          = [];
    // protected $beforeFind           = [];
    // protected $afterFind            = [];
    // protected $beforeDelete         = [];
    // protected $afterDelete          = [];


    protected $db;

    public function __construct()
    {
        $this->db = db_connect();   
    }

    function getData($namakab) {
        $builder = $this->db->table('desa');
        return $builder->where('nama_kabkot',$namakab)->get();
    }

    function getDesa($namadesa) {
        $builder = $this->db->table('desa');
        return $builder->where('nama_desa',$namadesa)->get();
    }

    function getJenisLandmark($namadesa) {
        // using query builder
        $builder = $this->db->table('landmark_desa');
        return $builder->select('jenis')
                        ->where('nama_desa',$namadesa)
                        ->distinct()
                        ->get();
    }

    function getPotensiEko($namadesa) {
        $builder = $this->db->table('potensi_ekonomi');
        return $builder->where('nama_desa',$namadesa)->get();
    }

    function getVariabel($namadesa,$var) { //tidak dipakai
        $builder = $this->db->table('landmark_desa');
        return $builder->select(['nama_desa','jenis','nama_landmark'])
                        ->where('nama_desa',$namadesa)
                        ->where('jenis',$var)
                        ->get();
    }

    function getFotoDesa($namadesa) {
        $builder = $this->db->table('foto_desa');
        return $builder->get();
    }
}
