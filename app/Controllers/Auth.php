<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{

    protected $UserModel;
    public function __construct()
    {
        $this->UserModel = new UserModel();
    }

    public function index()
    {
        return view('auth/v_login', [
            'title' => 'SiPatroli - Login',
            'data' => $this->UserModel->countAllResults(),
        ]);
    }

    public function ceklogin()
    {
        $email = htmlspecialchars($this->request->getVar('email'));
        $password = md5(htmlspecialchars($this->request->getVar('password')));

        $user = $this->UserModel->where('email', $email)->first();
        if ($user) {
            // Jika bukan admin (public) maka tidak diperkenankan
            if ($user['is_admin'] < 1) {
                session()->setFlashdata('pesan', '<div class="alert alert-danger" role="alert">
                    Anda tidak diperkenankan untuk masuk kedalam halaman dashboard, harap hubungi Admin!
                </div>');
                return redirect()->to('/auth/login');
            }

            //if (password_verify($password, $user['password'])) {
            if (($password == $user['password'])) {
                $session = [
                    'id' => $user['id'],
                    'nama' => $user['nama'],
                    'email' => $user['email'],
                ];
                session()->set($session);

                return redirect()->to('/dashboard');
            } else {
                session()->setFlashdata('pesan', '<div class="alert alert-primary" role="alert">
                    Password salah
                </div>');
                return redirect()->to('/auth/login');
            }
        } else {
            session()->setFlashdata('pesan', '<div class="alert alert-primary" role="alert">
                Email tidak ditemukan
            </div>');
            return redirect()->to('/auth/login');
        }
    }

    public function register()
    {
        return view('auth/v_register', [
            'title' => 'SiPatroli - Register',
        ]);
    }

    public function prosesregis()
    {
        // Validasi Data
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama wajib di isi',
                ],
            ],
            'email' => [
                'rules' => 'required|is_unique[tbl_users.email]',
                'errors' => [
                    'required' => 'Email wajib di isi',
                    'is_unique' => 'Email telah terdaftar di SiPatroli',
                ],
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password wajib di isi',
                ],
            ],
        ])) {
            return redirect()->to('auth/register')->withInput();
        }

        // Input Data
        $data = [
            'nama' => htmlspecialchars($this->request->getVar('nama')),
            'email' => htmlspecialchars($this->request->getVar('email')),
            'alamat' => htmlspecialchars($this->request->getVar('alamat')),
            'password' => md5(htmlspecialchars($this->request->getVar('password'))),
            'is_admin' => 0 // Agar public hanya bisa daftar dan tidak terdeteksi sebagai admin
        ];

        $this->UserModel->save($data);
        session()->setFlashdata('pesan', '<div class="alert alert-primary" role="alert">
            Selamat kamu berhasil mendaftar silahkan login
        </div>');
        return redirect()->to('/auth/login');
    }

    public function logout()
    {
        session()->destroy();
        session()->setFlashdata('pesan', '<div class="alert alert-primary" role="alert">
        Logout berhasil !!!
    </div>');

        return redirect()->to('/auth/login');
    }
}
