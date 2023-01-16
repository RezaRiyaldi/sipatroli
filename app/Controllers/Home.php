<?php

namespace App\Controllers;

use App\Models\DataModel;

class Home extends BaseController
{
    public function index()
    {

        $Query = new DataModel();

        $das = esc($this->request->getGet('das'));
        if (isset($das)) {
            $result = $Query->dasPerusahaan($das);
            $title = "Menampilkan Hasil Pencarian";
        }
        /* else {
            $result = $Query->dasPerusahaan();
            $title = "SiPatroli DLHK";
        }*/

        $tr_kecamatan_id = esc($this->request->getGet('tr_kecamatan_id'));
        if (isset($tr_kecamatan_id)) {
            $result = $Query->kecamatanPerusahaan($tr_kecamatan_id);
            $title = "Menampilkan Hasil Pencarian";
        }
        /*else {
            $result = $Query->kecamatanPerusahaan();
            $title = "SiPatroli DLHK";
        }*/

        $search = esc($this->request->getGet('search'));
        if (isset($search)) {
            $result = $Query->searchPerusahaan($search);
            $title = "Menampilkan Hasil Pencarian";
        }
        /* else {
            $result = $Query->searchPerusahaan();
            $title = "SiPatroli DLHK";
        }*/

        if (empty($das) and empty($tr_kecamatan_id) and empty($search)) {
            $result = $Query->searchPerusahaan();
            $title = "SiPatroli DLHK";
        }

        $indikator = "Dokumen";
        if (isset($_GET["indikator"])) {
            $indikator = esc($_GET["indikator"]);
        } elseif (empty($indikator)) {
            $indikator = "Dokumen";
        }

        $data = [
            'appname' => "SiPatroli DLHK",
            'appnametitle' => "Sistem Informasi Pantau Kontrol Limbah DLHK Kabupaten Tangerang",
            'search' => $search,
            'indikator' => $indikator,
            'title' => $title,
            'data' => $result,
            'none' => $Query->countPerusahaan("None"),
            'cidurian' => $Query->countPerusahaan("Cidurian"),
            'cimanceuri' => $Query->countPerusahaan("Cimanceuri"),
            'cipasilian' => $Query->countPerusahaan("Cipasilian"),
            'cisadane' => $Query->countPerusahaan("Cisadane"),
            'cileles' => $Query->countPerusahaan("Cileles"),
            'cirarab' => $Query->countPerusahaan("Cirarab")
        ];
        return view('v_home', $data);
    }

    public function detail($slug = "")
    {
        $Query = new DataModel();
        $Perusahaan = $Query->getPerusahaan($slug);

        if (empty($Perusahaan)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Halaman Tidak Ditemukan');
        }

        $indikator = "Dokumen";
        if (isset($_GET["indikator"])) {
            $indikator = esc($_GET["indikator"]);
        } elseif (empty($indikator)) {
            $indikator = "Dokumen";
        }

        $data = [
            'appname' => "SiPatroli DLHK",
            'appnametitle' => "Sistem Informasi Pantau Kontrol Limbah DLHK Kabupaten Tangerang",
            'indikator' => $indikator,
            'title' => $Perusahaan['nama_perusahaan'],
            'data' => $Perusahaan,
            'none' => $Query->countPerusahaan("None"),
            'cidurian' => $Query->countPerusahaan("Cidurian"),
            'cimanceuri' => $Query->countPerusahaan("Cimanceuri"),
            'cipasilian' => $Query->countPerusahaan("Cipasilian"),
            'cisadane' => $Query->countPerusahaan("Cisadane"),
            'cileles' => $Query->countPerusahaan("Cileles"),
            'cirarab' => $Query->countPerusahaan("Cirarab")
        ];

        return view('v_detail', $data);
    }

    public function table()
    {
        $indikator = "Dokumen";
        if (isset($_GET["indikator"])) {
            $indikator = esc($_GET["indikator"]);
        } elseif (empty($indikator)) {
            $indikator = "Dokumen";
        }
        
        $Query = new DataModel();
        $data = [
            'appname' => "SiPatroli DLHK",
            'appnametitle' => "Sistem Informasi Pantau Kontrol Limbah DLHK Kabupaten Tangerang",
            'indikator' => $indikator,
            'title' => "Data Perusahaan Terdaftar",
            'data' => $Query->findAll(),
            'none' => $Query->countPerusahaan("None"),
            'cidurian' => $Query->countPerusahaan("Cidurian"),
            'cimanceuri' => $Query->countPerusahaan("Cimanceuri"),
            'cipasilian' => $Query->countPerusahaan("Cipasilian"),
            'cisadane' => $Query->countPerusahaan("Cisadane"),
            'cileles' => $Query->countPerusahaan("Cileles"),
            'cirarab' => $Query->countPerusahaan("Cirarab")
        ];

        return view('v_table', $data);
    }
}
