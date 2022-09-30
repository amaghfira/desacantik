<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DesaModel;

class Desa extends BaseController
{
    public function __construct()
    {
        // load helper
        $this->helper = helper('url');
        $this->DesaModel = new DesaModel();
    }

    public function index()
    {
    }

    public function daftardesa()
    {
        if (strpos(current_url(), 'paser') == true) {
            $kode_kab = '6401';
            $nama_kab = 'Paser';
            $desa = $this->DesaModel->getData($nama_kab);
        }
        if (strpos(current_url(), 'kubar') == true) {
            $kode_kab = '6402';
            $nama_kab = 'Kutai Barat';
            $desa = $this->DesaModel->getData($nama_kab);
        }
        if (strpos(current_url(), 'kukar') == true) {
            $kode_kab = '6403';
            $nama_kab = 'Kutai Kartanegara';
            $desa = $this->DesaModel->getData($nama_kab);
        }
        if (strpos(current_url(), 'kutim') == true) {
            $kode_kab = '6404';
            $nama_kab = 'Kutai Timur';
            $desa = $this->DesaModel->getData($nama_kab);
        }
        if (strpos(current_url(), 'berau') == true) {
            $kode_kab = '6405';
            $nama_kab = 'Berau';
            $desa = $this->DesaModel->getData($nama_kab);
        }
        if (strpos(current_url(), 'ppu') == true) {
            $kode_kab = '6409';
            $nama_kab = 'Penajam Paser Utara';
            $desa = $this->DesaModel->getData($nama_kab);
        }
        if (strpos(current_url(), 'balikpapan') == true) {
            $kode_kab = '6471';
            $nama_kab = 'Kota Balikpapan';
            $desa = $this->DesaModel->getData($nama_kab);
        }
        if (strpos(current_url(), 'samarinda') == true) {
            $kode_kab = '6472';
            $nama_kab = 'Kota Samarinda';
            $desa = $this->DesaModel->getData($nama_kab);
        }
        if (strpos(current_url(), 'bontang') == true) {
            $kode_kab = '6474';
            $nama_kab = 'Kota Bontang';
            $desa = $this->DesaModel->getData($nama_kab);
        }

        $desa = $desa->getResultArray();
        $data['kode_kab'] = $kode_kab;
        $data['nama_kab'] = $nama_kab;
        $data['desa'] = $desa;
        $data['urls'] = current_url();

        // halaman depan kabupaten
        echo view('layout/header');
        echo view('layout/navbar_kab');
        echo view('home_kab', $data);
        echo view('layout/footer');
    }

    public function detaildesa()
    {
        if (strpos(current_url(), 'sempulang') == true) {
            $nama_desa = 'Sempulang';
            $desa = $this->DesaModel->getDesa($nama_desa);
        }
        if (strpos(current_url(), 'suatangketeban') == true) {
            $nama_desa = 'Suatang Keteban';
            $desa = $this->DesaModel->getDesa($nama_desa);
        }
        if (strpos(current_url(), 'penawai') == true) {
            $nama_desa = 'Penawai';
            $desa = $this->DesaModel->getDesa($nama_desa);
        }
        if (strpos(current_url(), 'jengandanum') == true) {
            $nama_desa = 'Jengan Danum';
            $desa = $this->DesaModel->getDesa($nama_desa);
        }
        if (strpos(current_url(), 'jawa') == true) {
            $nama_desa = 'Jawa';
            $desa = $this->DesaModel->getDesa($nama_desa);
        }
        if (strpos(current_url(), 'loajananulu') == true) {
            $nama_desa = 'Loa Janan Ulu';
            $desa = $this->DesaModel->getDesa($nama_desa);
        }
        if (strpos(current_url(), 'maluhu') == true) {
            $nama_desa = 'Maluhu';
            $desa = $this->DesaModel->getDesa($nama_desa);
        }
        if (strpos(current_url(), 'sungaipayang') == true) {
            $nama_desa = 'Sungai Payang';
            $desa = $this->DesaModel->getDesa($nama_desa);
        }
        if (strpos(current_url(), 'pela') == true) {
            $nama_desa = 'Pela';
            $desa = $this->DesaModel->getDesa($nama_desa);
        }
        if (strpos(current_url(), 'kandolo') == true) {
            $nama_desa = 'Kandolo';
            $desa = $this->DesaModel->getDesa($nama_desa);
        }
        if (strpos(current_url(), 'sangattautara') == true) {
            $nama_desa = 'Sangatta Utara';
            $desa = $this->DesaModel->getDesa($nama_desa);
        }
        if (strpos(current_url(), 'batu-batu') == true) {
            $nama_desa = 'Batu-batu';
            $desa = $this->DesaModel->getDesa($nama_desa);
        }
        if (strpos(current_url(), 'sidorejo') == true) {
            $nama_desa = 'Sidorejo';
            $desa = $this->DesaModel->getDesa($nama_desa);
        }
        if (strpos(current_url(), 'waru') == true) {
            $nama_desa = 'Waru';
            $desa = $this->DesaModel->getDesa($nama_desa);
        }
        if (strpos(current_url(), 'batumajang') == true) {
            $nama_desa = 'Batu Majang';
            $desa = $this->DesaModel->getDesa($nama_desa);
        }
        if (strpos(current_url(), 'sumberrejo') == true) {
            $nama_desa = 'Sumber Rejo';
            $desa = $this->DesaModel->getDesa($nama_desa);
        }
        if (strpos(current_url(), 'makroman') == true) {
            $nama_desa = 'Makroman';
            $desa = $this->DesaModel->getDesa($nama_desa);
        }
        if (strpos(current_url(), 'pelita') == true) {
            $nama_desa = 'Pelita';
            $desa = $this->DesaModel->getDesa($nama_desa);
        }
        if (strpos(current_url(), 'gunungtelihan') == true) {
            $nama_desa = 'Gunung Telihan';
            $desa = $this->DesaModel->getDesa($nama_desa);
        }
        if (strpos(current_url(), 'guntung') == true) {
            $nama_desa = 'Guntung';
            $desa = $this->DesaModel->getDesa($nama_desa);
        }
        $desa = $desa->getResultArray();
        $data['desa'] = $desa;
        $data['urls'] = current_url();
        $data['nama_desa'] = $nama_desa;


        // get jenis landmark 
        $landmark = $this->DesaModel->getJenisLandmark($nama_desa);
        $landmark = $landmark->getResultArray();
        $data['landmark'] = $landmark;

        // get potensi ekonomi
        $potensieko = $this->DesaModel->getPotensiEko($nama_desa);
        $potensieko = $potensieko->getResultArray();
        $data['potensieko'] = $potensieko;

        // get foto desa untuk di segi 6 
        $fotodesa = $this->DesaModel->getFotoDesa($nama_desa);
        $fotodesa = $fotodesa->getResultArray();
        $data['fotodesa'] = $fotodesa;

        // halaman depan desa
        echo view('layout/header');
        echo view('layout/navbar_kab');
        echo view('home_desa', $data);
        echo view('layout/footer');
    }

    public function getVar() //tidak dipakai
    {
        $nama_desa = $this->request->getPost('nama_desa');
        // get variabel 
        $variabel = $this->request->getPost('id_var');
        $var = $this->DesaModel->getVariabel($nama_desa, $variabel);
        $var = $var->getResultArray();
    }

    public function getVar2() //tidak dipakai 
    {
        if ($this->request->getVar('action') == 'add') {
            $variabel = $this->request->getVar('id_var');
            $nama_desa = $this->request->getVar('nama_desa');

            $data = $this->DesaModel->getVariabel($nama_desa, $variabel);

            $output = $data->getResultArray();
            $output2 = array(
                $output
            );

            $jsondata = json_encode($output2);
            echo $jsondata;
        }
    }
}
