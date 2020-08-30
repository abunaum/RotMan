<?php

namespace App\Controllers\Router;

use App\Controllers\BaseController;

class Beranda extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'namaaplikasi' => $this->namaaplikasi,
        ];
        // dd($totalrouter);
        echo view('template/app/header', $data);
        echo view('template/app/sidebaradmin', $data);
        echo view('template/app/topbar', $data);
        echo view('router/index', $data);
        echo view('template/app/footer', $data);
    }
}
