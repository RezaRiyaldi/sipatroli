<?php

namespace App\Controllers;

use App\Models\DataModel;

class Form extends BaseController
{
    protected $DataModel;
    public function __construct()
    {
        $this->DataModel = new DataModel();
    }

    public function index()
    {
        return redirect()->to('/form/dataperusahaan');
    }

    public function dataperusahaan()
    {
        $data = [
            'title' => "Data Perusahaan",
            'appname' => "SiPatroli DLHK",
            'heading' => "Data Perusahaan",
            'data' => $this->DataModel->getPerusahaan(),
            'none' => $this->DataModel->countPerusahaan("None"),
            'cidurian' => $this->DataModel->countPerusahaan("Cidurian"),
            'cimanceuri' => $this->DataModel->countPerusahaan("Cimanceuri"),
            'cipasilian' => $this->DataModel->countPerusahaan("Cipasilian"),
            'cisadane' => $this->DataModel->countPerusahaan("Cisadane"),
            'cileles' => $this->DataModel->countPerusahaan("Cileles"),
            'cirarab' => $this->DataModel->countPerusahaan("Cirarab")
        ];

        return view('v_dataperusahaan', $data);
    }

    public function createperusahaan()
    {
        session();
        $data = [
            'title' => "Create Perusahaan",
            'appname' => "SiPatroli DLHK",
            'heading' => "Create Perusahaan",
            'validation' => \Config\Services::validation(),
            'none' => $this->DataModel->countPerusahaan("None"),
            'cidurian' => $this->DataModel->countPerusahaan("Cidurian"),
            'cimanceuri' => $this->DataModel->countPerusahaan("Cimanceuri"),
            'cipasilian' => $this->DataModel->countPerusahaan("Cipasilian"),
            'cisadane' => $this->DataModel->countPerusahaan("Cisadane"),
            'cileles' => $this->DataModel->countPerusahaan("Cileles"),
            'cirarab' => $this->DataModel->countPerusahaan("Cirarab")
        ];

        return view('v_createperusahaan', $data);
    }

    public function createShp()
    {
        session();
        $data = [
            'title' => "Create SHP",
            'appname' => "SiPatroli DLHK",
            'heading' => "Create SHP",
            'validation' => \Config\Services::validation(),
            'none' => $this->DataModel->countPerusahaan("None"),
            'cidurian' => $this->DataModel->countPerusahaan("Cidurian"),
            'cimanceuri' => $this->DataModel->countPerusahaan("Cimanceuri"),
            'cipasilian' => $this->DataModel->countPerusahaan("Cipasilian"),
            'cisadane' => $this->DataModel->countPerusahaan("Cisadane"),
            'cileles' => $this->DataModel->countPerusahaan("Cileles"),
            'cirarab' => $this->DataModel->countPerusahaan("Cirarab")
        ];

        return view('v_createshp', $data);
    }

    public function simpanshp()
    {

        $FileDesa = $this->request->getFile('file_desa');
        $FileDas = $this->request->getFile('file_das');
        
        if ($FileDesa == "") {
            session()->setFlashdata('error_message', 'File SHP Desa tidak valid!');
            return redirect()->to('/form/createshp');    
        }

        if ($FileDas == "") {
            session()->setFlashdata('error_message', 'File SHP DAS tidak valid!');
            return redirect()->to('/form/createshp');    
        }

        if (file_exists('php-shapefile/data/shp/desa.shp')) {
            unlink('php-shapefile/data/shp/desa.shp');
        }
        if (file_exists('php-shapefile/data/shp/das.shp')) {
            unlink('php-shapefile/data/shp/das.shp');
        }


        $FileDesa->move('php-shapefile/data/shp', "desa.shp");
        $FileDas->move('php-shapefile/data/shp', "das.shp");
        
        return redirect()->to('/form/createshp');
    }

    public function deleteshp()
    {
        if (file_exists('php-shapefile/data/shp/desa.shp')) {
            unlink('php-shapefile/data/shp/desa.shp');
        }
        if (file_exists('php-shapefile/data/shp/das.shp')) {
            unlink('php-shapefile/data/shp/das.shp');
        }
        
        return redirect()->to('/form/createshp');
    }


    public function simpan()
    {

        
        if (!$this->validate([
            'nama_perusahaan' => [
                'rules' => 'required|is_unique[companies.nama_Perusahaan]',
                'errors' => [
                    'required' => 'Nama Perusahaan Wajib Di isi',
                    'is_unique' => 'Nama Perusahaan Telah Terdaftar'
                ]
            ],
            'cp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Penanggung Jawab Perusahaan Wajib Di isi'
                ]
            ],
            'foto_perusahaan' => [
                'rules' => 'max_size[foto_perusahaan,1024]|is_image[foto_perusahaan]|mime_in[foto_perusahaan,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Gambar Tidak Boleh Diatas 1024 Kb',
                    'is_image' => 'Pastikan kamu upload gambar',
                    'mine_in' => 'Format gambar hanya .jpg .jpeg dan .png'
                ]
            ],
            'latitude' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Silahkan Tentukan Lokasi Latitude Perusahaan'
                ]
            ],
            'longitude' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Silahkan Tentukan Lokasi Longitude Perusahaan'
                ]
            ],
            'checkbox' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Silahkan Centang Kolom Dan Pastikan Data Sudah Benar'
                ]
            ]
        ])) {
            return redirect()->to('/form/createperusahaan')->withInput();
        }


        $FileFoto = $this->request->getFile('foto_perusahaan');
        if ($FileFoto == "") {
            $NamaFile = "default.png";
        } else {
            $NamaFile = $FileFoto->getRandomName();
            $FileFoto->move('img/perusahaan', $NamaFile);
        }

        $FileFotoTPS = $this->request->getFile('tps_doc');
        if ($FileFotoTPS == "") {
            $NamaFileTPS = "default.png";
        } else {
            $NamaFileTPS = $FileFotoTPS->getRandomName();
            $FileFotoTPS->move('img/tps_doc', $NamaFile);
        }

        $FileFotoPLB3 = $this->request->getFile('plb3_doc');
        if ($FileFotoPLB3 == "") {
            $NamaFilePLB3 = "default.png";
        } else {
            $NamaFilePLB3 = $FileFotoPLB3->getRandomName();
            $FileFotoPLB3->move('img/plb3_doc', $NamaFile);
        }

        $FileFotoIPLC = $this->request->getFile('iplc_doc');
        if ($FileFotoIPLC == "") {
            $NamaFileIPLC = "default.png";
        } else {
            $NamaFileIPLC = $FileFotoIPLC->getRandomName();
            $FileFotoIPLC->move('img/iplc', $NamaFile);
        }

        $slug = url_title($this->request->getVar('nama_perusahaan'), '-', TRUE);

        $this->DataModel->save([
            'nama_perusahaan' => $this->request->getVar('nama_perusahaan'),
            'slug' => $slug,
            'nib' => $this->request->getVar('nib'),
            'no_tlp' => $this->request->getVar('no_tlp'),
            'cp' => $this->request->getVar('cp'),
            'kategori' => $this->request->getVar('kategori'),
            'industry_id' => $this->request->getVar('industry_id'),
            'ket_industri' => $this->request->getVar('ket_industri'),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'tr_kecamatan_id' => $this->request->getVar('tr_kecamatan_id'),
            'desa_id' => $this->request->getVar('desa_id'),
            'alamat_lengkap' => $this->request->getVar('alamat_lengkap'),
            'das' => $this->request->getVar('das'),
            'foto_perusahaan' => $NamaFile,
            'latitude' =>  $this->request->getVar('latitude'),
            'longitude' =>  $this->request->getVar('longitude'),
            'website' => $this->request->getVar('website'),
            'tps' => $this->request->getVar('tps'),
            'izin' => $this->request->getVar('izin'),
            'iplc' => $this->request->getVar('iplc'),
            'tps_doc' => $NamaFileTPS,
            'plb3_doc' => $NamaFilePLB3,
            'iplc_doc' => $NamaFileIPLC,
            'kepadatan' => $this->request->getVar('kepadatan'),
            'pengaduan' => $this->request->getVar('pengaduan')
        ]);

        session()->setFlashdata('pesan', 'Data Perusahaan Berhasil Di Simpan.');
        return redirect()->to('/form/dataperusahaan');
    }

    public function hapus($id)
    {
        $perusahaan = $this->DataModel->find($id);
        if ($perusahaan['foto_perusahaan'] == "default.png") {
            $this->DataModel->delete($id);
        } else {
            // unlink('img/perusahaan/' . $perusahaan['foto_perusahaan']);
            $this->DataModel->delete($id);
        }

        session()->setFlashdata('pesan', 'Perusahaan Berhasil DiHapus');
        return redirect()->to('/form/dataperusahaan');
    }

    public function update($slug)
    {
        session();
        $Perusahaan = $this->DataModel->getPerusahaan($slug);
        $data = [
            'title' => "Update ",
            'appname' => "SiPatroli DLHK",
            'heading' => "Update Perusahaan",
            'data' => $Perusahaan,
            'validation' => \Config\Services::validation(),
            'none' => $this->DataModel->countPerusahaan("None"),
            'cidurian' => $this->DataModel->countPerusahaan("Cidurian"),
            'cimanceuri' => $this->DataModel->countPerusahaan("Cimanceuri"),
            'cipasilian' => $this->DataModel->countPerusahaan("Cipasilian"),
            'cisadane' => $this->DataModel->countPerusahaan("Cisadane"),
            'cileles' => $this->DataModel->countPerusahaan("Cileles"),
            'cirarab' => $this->DataModel->countPerusahaan("Cirarab")
        ];

        return view('v_updateperusahaan', $data);
    }

    public function prosesupdate($slug)
    {
        if (!$this->validate([
            'nama_perusahaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Perusahaan Wajib Di isi'
                ]
            ],
            'cp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Penanggung Jawab Perusahaan Wajib Di isi'
                ]
            ],
            'foto_perusahaan' => [
                'rules' => 'max_size[foto_perusahaan,1024]|is_image[foto_perusahaan]|mime_in[foto_perusahaan,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Gambar Tidak Boleh Diatas 1024 Kb',
                    'is_image' => 'Pastikan kamu upload gambar',
                    'mine_in' => 'Format gambar hanya .jpg .jpeg dan .png'
                ]
            ],
            'latitude' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Silahkan Tentukan Lokasi Latitude Perusahaan'
                ]
            ],
            'longitude' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Silahkan Tentukan Lokasi Longitude Perusahaan'
                ]
            ],
            'checkbox' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Silahkan Centang Kolom Dan Pastikan Data Sudah Benar'
                ]
            ]
        ])) {
            return redirect()->to('/form/update/' . $slug)->withInput();
        }

        $datalama = $this->DataModel->getPerusahaan($slug);
       
        if ($this->request->getFile('foto_perusahaan') == "") {
            $NamaFile = $datalama['foto_perusahaan'];
        } else {
            if ($datalama['foto_perusahaan'] == "default.png") {
                $getFile = $this->request->getFile('foto_perusahaan');
                $NamaFile = $getFile->getRandomName();
                $getFile->move('img/perusahaan/', $NamaFile);
            } else {
                unlink('img/perusahaan/' . $datalama['foto_perusahaan']);
                $getFile = $this->request->getFile('foto_perusahaan');
                $NamaFile = $getFile->getRandomName();
                $getFile->move('img/perusahaan/', $NamaFile);
            }
        }

        if ($this->request->getFile('tps_doc') == "") {
            $NamaFileTPS = $datalama['tps_doc'];
        } else {
            if ($datalama['tps_doc'] == "default.png") {
                $getFileTPS = $this->request->getFile('tps_doc');
                $NamaFileTPS = $getFileTPS->getRandomName();
                $getFileTPS->move('img/tps_doc/', $NamaFileTPS);
            } else {
                unlink('img/tps_doc/' . $datalama['tps_doc']);
                $getFileTPS = $this->request->getFile('tps_doc');
                $NamaFileTPS = $getFileTPS->getRandomName();
                $getFileTPS->move('img/tps_doc/', $NamaFileTPS);
            }
        }

        if ($this->request->getFile('plb3_doc') == "") {
            $NamaFilePLB3 = $datalama['plb3_doc'];
        } else {
            if ($datalama['plb3_doc'] == "default.png") {
                $getFilePLB3 = $this->request->getFile('plb3_doc');
                $NamaFilePLB3 = $getFilePLB3->getRandomName();
                $getFilePLB3->move('img/plb3_doc/', $NamaFilePLB3);
            } else {
                unlink('img/plb3_doc/' . $datalama['plb3_doc']);
                $getFilePLB3 = $this->request->getFile('plb3_doc');
                $NamaFilePLB3 = $getFilePLB3->getRandomName();
                $getFilePLB3->move('img/plb3_doc/', $NamaFilePLB3);
            }
        }

        if ($this->request->getFile('iplc_doc') == "") {
            $NamaFileIPLC = $datalama['iplc_doc'];
        } else {
            if ($datalama['iplc_doc'] == "default.png") {
                $getFileIPLC = $this->request->getFile('iplc_doc');
                $NamaFileIPLC = $getFileIPLC->getRandomName();
                $getFileIPLC->move('img/iplc_doc/', $NamaFileIPLC);
            } else {
                unlink('img/iplc_doc/' . $datalama['iplc_doc']);
                $getFileIPLC = $this->request->getFile('iplc_doc');
                $NamaFileIPLC = $getFileIPLC->getRandomName();
                $getFileIPLC->move('img/iplc_doc/', $NamaFileIPLC);
            }
        }

        $this->DataModel->save([
            'id' => $this->request->getPost('id'),
            'nama_perusahaan' => $this->request->getPost('nama_perusahaan'),
            'nib' => $this->request->getPost('nib'),
            'no_tlp' => $this->request->getPost('no_tlp'),
            'cp' => $this->request->getPost('cp'),
            'kategori' => $this->request->getPost('kategori'),
            'industry_id' => $this->request->getPost('industry_id'),
            'ket_industri' => $this->request->getPost('ket_industri'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'tr_kecamatan_id' => $this->request->getPost('tr_kecamatan_id'),
            'desa_id' => $this->request->getPost('desa_id'),
            'alamat_lengkap' => $this->request->getPost('alamat_lengkap'),
            'das' => $this->request->getPost('das'),
            'foto_perusahaan' => $NamaFile,
            'tps' => $this->request->getPost('tps'),
            'izin' => $this->request->getPost('izin'),
            'iplc' => $this->request->getPost('iplc'),
            'tps_doc' => $NamaFileTPS,
            'plb3_doc' => $NamaFilePLB3,
            'iplc_doc' => $NamaFileIPLC,
            'kepadatan' => $this->request->getVar('kepadatan'),
            'pengaduan' => $this->request->getVar('pengaduan'),
            'website' => $this->request->getPost('website'),
            'latitude' => $this->request->getPost('latitude'),
            'longitude' => $this->request->getPost('longitude')
        ]);
        session()->setFlashdata('pesan', 'Perusahaan Berhasil Di Update');
        return redirect()->to(base_url('form/dataperusahaan'));
        d($this->request->getPost());
    }
}
