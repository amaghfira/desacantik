<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UploadModel;

class Upload extends BaseController
{

    public function __construct()
    {
        $this->UploadModel = new UploadModel();
        $this->session = session();
    }

    public function index()
    {
        echo view('layout/backend/header');
        echo view('layout/backend/navbar');
        echo view('layout/backend/sidebar');
        echo view('upload');
        echo view('layout/backend/footer');
    }

    public function simpanExcel()
    {

        // FUNGSI SIMPAN EKSEL 

        $session = session();
        $db = \Config\Database::connect();

        $file_excel = $this->request->getFile('file');
        $ext = $file_excel->getClientExtension();
        if ($ext == 'xls') {
            $render = new \PhpOffice\PhpSpreadsheet\Reader\Xls();
        } else {
            $render = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
        }
        $spreadsheet = $render->load($file_excel);

        $data = $spreadsheet->getActiveSheet()->toArray();

        $count = 0;
        foreach ($data as $x => $row) {
            if ($x == 0) {
                continue;
            }

            $nama_kabkot = $row[0];
            $nama_kec = $row[1];
            $nama_desa = $row[2];
            $deskripsi = $row[3];
            $batas_utara = $row[4];
            $batas_selatan = $row[5];
            $batas_barat = $row[6];
            $batas_timur = $row[7];
            $jml_penduduk = $row[8];
            $jarak_kantor_camat = $row[9];
            $waktu_tempuh = $row[10];
            $jarak_kantor_bupati = $row[11];
            $waktu_tempuh_bupati = $row[12];
            $kantor_desa = $row[13];
            $telp = $row[14];
            $email = $row[15];
            $nama_landmark = $row[16];
            $jenis = $row[17];
            $long = $row[18];
            $lat = $row[19];
            $path_foto = $row[20];
            $ket = $row[21];


            $data_desa = [
                'deskripsi' => $deskripsi,
                'batas_utara' => $batas_utara,
                'batas_selatan' => $batas_selatan,
                'batas_barat' => $batas_barat,
                'batas_timur' => $batas_timur,
                'jml_penduduk' => $jml_penduduk,
                'jarak_kantor_camat' => $jarak_kantor_camat,
                'waktu_tempuh' => $waktu_tempuh,
                'jarak_kantor_bupati' => $jarak_kantor_bupati,
                'waktu_tempuh_bupati' => $waktu_tempuh_bupati,
                'kantor_desa' => $kantor_desa,
                'no_telp' => $telp,
                'email' => $email
            ];

            $data_foto_desa = [
                'nama_kabkot' => $nama_kabkot,
                'nama_kec' => $nama_kec,
                'nama_desa' => $nama_desa,
                'path_foto' => $path_foto,
                'ket' => $ket
            ];

            $data_landmark = [
                'nama_kabkot' => $nama_kabkot,
                'nama_kec' => $nama_kec,
                'nama_desa' => $nama_desa,
                'nama_landmark' => $nama_landmark,
                'jenis' => $jenis,
                'longitude' => $long,
                'latitude' => $lat
            ];


            // cek jika desa ditemukan di master 
            if ($this->UploadModel->cekDesa($nama_kabkot, $nama_kec, $nama_desa) != 0) {
                // upload desa
                if ($this->UploadModel->insertDesa($nama_kabkot, $nama_kec, $nama_desa, $data_desa) == true) {
                    session()->setFlashdata('message-desa', '<b>Data Desa Berhasil Ditambahkan. </b> </br>');
                    session()->setFlashdata('alert-class', 'alert-success');
                }
                if ($this->UploadModel->insertLandmark($data_landmark) == true) {
                    session()->setFlashdata('message-landmark', '<b>Data Landmark Berhasil Ditambahkan. </b> </br>');
                    session()->setFlashdata('alert-class', 'alert-success');
                }
                if ($this->UploadModel->insertFoto($data_foto_desa) == true) {
                    session()->setFlashdata('message-foto', '<b>Data Foto Berhasil Ditambahkan. </b>');
                    session()->setFlashdata('alert-class', 'alert-success');
                }
            } else { // jika desa tidak ditemukan di master
                // pesan gagal upload
                session()->setFlashdata('message-gagal', '<b>Data gagal ditambahkan. Data tidak sesuai.</b>');
                session()->setFlashdata('alert-class', 'alert-danger');
            }
        }

        // FUNGSI SIMPAN FOTO 
        if ($imagefile = $this->request->getFiles()) {
            foreach ($imagefile['foto'] as $img) {
                if ($img->isValid() && !$img->hasMoved()) {
                    $newName = $img->getName();
                    $img->move('uploads/foto/' . $this->session->id_satker, $newName);
                }
            }
            session()->setFlashdata('message-file', '<b>File Foto Berhasil Disimpan. </b>');
            session()->setFlashdata('alert-class', 'alert-success');
        }

        return redirect()->to('/upload/excel');
    }

    public function laporan()
    {
        echo view('layout/backend/header');
        echo view('layout/backend/navbar');
        echo view('layout/backend/sidebar');
        echo view('upload_laporan');
        echo view('layout/backend/footer');
    }

    public function simpanLaporan()
    {
        $kode_kabkot = $this->session->id_satker;
        if ($laporan = $this->request->getFile('file')) {

            if ($laporan->isValid() && !$laporan->hasMoved()) {
                $newName = $laporan->getName();
                $laporan->move('uploads/laporan/' . $this->session->id_satker, $newName);

                $data = [
                    'kode_kabkot' => $kode_kabkot,
                    'nama_file' => $newName
                ];

                if ($this->UploadModel->insertLaporan($data)) {
                    session()->setFlashdata('message-file', '<b>File Berhasil Disimpan. </b>');
                    session()->setFlashdata('alert-class', 'alert-success');
                } else {
                    session()->setFlashdata('message-file', '<b>File Gagal Disimpan. </b>');
                    session()->setFlashdata('alert-class', 'alert-danger');
                }
            }
        }

        return redirect()->to('/upload/laporan');
    }
}
