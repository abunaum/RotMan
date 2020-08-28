<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        if (isset($_SESSION['role_id'])) {
            $role = $_SESSION['role_id'];
            if ($role == 1) {
                return redirect()->to(base_url('admin'));
            }
            if ($role == 2) {
                return redirect()->to(base_url('user'));
            }
        }
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
            $role = $user[0]['role_id'];
            if (password_verify($password, $datapassword)) {
                $data = [
                    'username' => $user[0]['username'],
                    'nama' => $user[0]['nama'],
                    'gambar' => $user[0]['gambar'],
                    'role_id' => $role,
                    'islogin' => true
                ];
                $this->session->set($data);
                if ($role == 1) {
                    return redirect()->to(base_url('admin'));
                } else if ($role == 2) {
                    return redirect()->to(base_url('user'));
                } else {
                    echo 'error';
                }
            } else {
                $this->session->setTempdata('pesan', 'password-salah', 3);
                return redirect()->to(base_url());
            }
        } else {
            $this->session->setTempdata('pesan', 'login-error', 3);
            return redirect()->to(base_url());
        }
    }
}
