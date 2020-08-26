<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        $router = $this->router->get();
        $datarouter = $router->getResultArray();
        $totalrouter = $this->router->countAll();;
        if (isset($_SESSION['pesan'])) {
            $pesan = $_SESSION['pesan'];
            if ($pesan == 'router-ditambah') {
                $flashicon = 'success';
                $flashjudul = 'Mantap';
                $flashtext = 'Router berhasil di tambah.';
            }
            if ($pesan == 'router-dihapus') {
                $flashicon = 'success';
                $flashjudul = 'Mantap';
                $flashtext = 'Router berhasil di hapus.';
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
            'title' => 'Dashboard',
            'namaaplikasi' => $this->namaaplikasi,
            'scheader' => array(
                '/assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css',
                'assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css'
            ),
            'jsfooter' => array(
                '/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js',
                '/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js',
                '/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js',
                '/assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js',
                '/assets/plugins/bootstrap-datatable/js/jszip.min.js',
                '/assets/plugins/bootstrap-datatable/js/pdfmake.min.js',
                '/assets/plugins/bootstrap-datatable/js/vfs_fonts.js',
                '/assets/plugins/bootstrap-datatable/js/buttons.html5.min.js',
                '/assets/plugins/bootstrap-datatable/js/buttons.print.min.js',
                '/assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js',
                '/assets/plugins/swal/sweetalert2.all.min.js'
            ),
            'scfooter' => array(
                "$(document).ready(function() {
                //Default data table
                $('#default-datatable').DataTable();
                var table = $('#example').DataTable( {
                lengthChange: false,
                buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
                } );
                table.buttons().container()
                .appendTo( '#example_wrapper .col-md-6:eq(0)' );
                } );
                "
            ),
            'router' => $datarouter,
            'totalrouter' => $totalrouter,
            'pesan' => $flash
        ];
        // dd($totalrouter);
        echo view('template/app/header', $data);
        echo view('template/app/sidebaradmin', $data);
        echo view('template/app/topbar', $data);
        echo view('admin/index', $data);
        echo view('template/app/footer', $data);
    }

    public function addrouter()
    {
        $this->router->save([
            'ip' => $this->request->getVar('ip'),
            'port' => $this->request->getVar('port'),
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'nama' => $this->request->getVar('nama'),
            'login' => $this->request->getVar('login'),
        ]);
        $this->session->setTempdata('pesan', 'router-ditambah', 3);
        return redirect()->to('/admin');
    }
    public function hapusrouter($id = '')
    {
        if ($id == '') {
            return redirect()->to('/admin');
        } else {
            $this->router->delete($id);
            $this->session->setTempdata('pesan', 'router-dihapus', 3);
        }
        return redirect()->to('/admin');
    }
    public function detailrouter($id = '')
    {
        if ($id == '') {
            return redirect()->to('/admin');
        } else {
            $cekrouter = $this->router->where('id', $id)->findAll();
            $router = $this->router->where('id', $id)->get();
            $datarouter = $router->getResultArray();
            if (!$cekrouter) {
                return redirect()->to('/admin');
            } else {
                $data = [
                    'title' => 'Dashboard',
                    'namaaplikasi' => $this->namaaplikasi,
                    'router' => $datarouter
                ];
                echo view('template/app/header', $data);
                echo view('template/app/sidebaradmin', $data);
                echo view('template/app/topbar', $data);
                echo view('admin/router', $data);
                echo view('template/app/footer', $data);
            }
        }
    }
    public function connectrouter()
    {
        $ip = $this->request->getVar('ip');
        $port = $this->request->getVar('port');
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $nama = $this->request->getVar('nama');
        $login = $this->request->getVar('login');
        $api = new $this->api;
        $api->debug = false;
        $cek = $api->connect($ip . ":" . $port, $username, $password);
        if ($cek) {
            $data = [
                'ip' => $ip,
                'port' => $port,
                'usernamerouter' => $username,
                'password' => $password,
                'namarouter' => $nama,
                'alamatlogin' => $login
            ];
            echo 'joss';
            $routerboard = $api->comm("/system/routerboard/print");
            dd($routerboard);
            // $this->session->set_userdata($data);
            // redirect('router');
            // exit;
        } else {
            echo 'nub';
            // $this->session->set_flashdata('pesan', 'router-gagal');
            // redirect('admin');
        }
        $api->disconnect();
    }
}
