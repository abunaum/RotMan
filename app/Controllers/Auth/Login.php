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
            if ($pesan == 'password-salah') {
                $flashicon = 'error';
                $flashjudul = 'Maaf';
                $flashtext = 'Password yang anda masukkan salah.';
            }
            if ($pesan == 'login-error') {
                $flashicon = 'error';
                $flashjudul = 'Maaf';
                $flashtext = 'Username yang anda masukkan tidak ditemukan.';
            }
            if ($pesan == 'belum-login') {
                $flashicon = 'error';
                $flashjudul = 'Maaf';
                $flashtext = 'Anda belum login.';
            }
            if ($pesan == 'bukan-admin') {
                $flashicon = 'error';
                $flashjudul = 'Maaf';
                $flashtext = 'Anda bukan admin.';
            }
            if ($pesan == 'logout') {
                $flashicon = 'success';
                $flashjudul = 'Terimakasih';
                $flashtext = 'Anda berhasil logout.';
            }
            $flash =    "<script>
                        function pesan() {
                            Swal.fire({
                                icon: '" . $flashicon . "',
                                title: '" . $flashjudul . "',
                                text: '" . $flashtext . "'
                                })
                            }
                        pesan();
                    </script>";
        } else {
            $flash = '';
        }

        $data = [
            'title' => 'Login',
            'namaaplikasi' => $this->namaaplikasi,
            'header' => array(
                array("/assets/css/bootstrap.min.css", "rel='stylesheet'"),
                array("/assets/css/animate.css", "rel='stylesheet' type='text/css'"),
                array("/assets/css/icons.css", "rel='stylesheet' type='text/css'"),
                array("/assets/css/app-style.css", "rel='stylesheet'")
            ),
            'footer' => array(
                '/assets/js/jquery.min.js',
                '/assets/js/popper.min.js',
                '/assets/js/bootstrap.min.js',
                '/assets/js/sidebar-menu.js',
                '/assets/js/app-script.js',
                '/assets/js/app-script.js',
                '/assets/plugins/swal/sweetalert2.all.min.js'
            ),
            'pesan' => $flash
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
