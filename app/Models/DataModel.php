<?php

namespace App\Models;

use CodeIgniter\Model;

class DataModel extends Model
{

    protected $table = "companies";
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_perusahaan', 'slug','nib', 'no_tlp', 'cp', 'kategori','industry_id', 'ket_industri', 'deskripsi', 'tr_kecamatan_id','desa_id', 'alamat_lengkap', 'das','foto_perusahaan', 'latitude', 'longitude','website','status_document','kepadatan','pengaduan','iplc','izin','tps','iplc_doc','plb3_doc','tps_doc'];
    protected $useTimestamps = TRUE;

    public function getPerusahaan($slug = "")
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }

    public function countPerusahaan($das = "")
    {
        return $this->where(['das' => $das])->countAllResults();
    }

    public function cariPerusahaan($key)
    {
        return $this->like(['nama_perusahaan' => $key])->orLike(['tr_kecamatan_id' => $key]);
    }

    public function dasPerusahaan($das = "")
    {
        if ($das == false) {
            return $this->findAll();
        }
        return $this->where(['das' => $das])->get()->getResultArray();
    }

    public function kecamatanPerusahaan($tr_kecamatan_id = "")
    {
        if ($tr_kecamatan_id == false) {
            return $this->findAll();
        }
        return $this->where(['tr_kecamatan_id' => $tr_kecamatan_id])->get()->getResultArray();
    }

    public function searchPerusahaan($search = "")
    {
        if ($search == false) {
            return $this->findAll();
        }
        return $this->like(['nama_perusahaan' => "%".$search."%"])->orLike(['tr_kecamatan_id' => "%".$search."%"])->orLike(['das' => "%".$search."%"])->get()->getResultArray();
    }
}
