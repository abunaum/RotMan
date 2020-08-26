<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        if (isset($_SESSION['pesan'])) {
            $pesan = $_SESSION['pesan'];
        } else {
            $pesan = '';
        }

        $data = [
            'title' => 'Login',
            'namaaplikasi' => $this->namaaplikasi,
            'pesan' => $pesan
        ];
        return view('auth/login', $data);
    }

    public function cek()
    {
        // $user = $this->userlogin->findAll();
        // dd($cek);
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $user = $this->userlogin->where('username', $username)->findAll();
        if ($user) {
            $datapassword = $user[0]['password'];
            if (password_verify($password, $datapassword)) {
                $data = [
                    'username' => $user[0]['username'],
                    'nama' => $user[0]['nama'],
                    'gambar' => $user[0]['gambar'],
                    'role_id' => $user[0]['role_id'],
                    'islogin' => true
                ];
                $this->session->set($data);
                return redirect()->to('/admin');
            } else {
                $this->session->setTempdata('pesan', 'password-salah', 3);
                return redirect()->to('/login');
            }
        } else {
            $this->session->setTempdata('pesan', 'login-error', 3);
            return redirect()->to('/login');
        }
    }
}
