<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

class Logout extends BaseController
{
    public function index()
    {
        $this->session->destroy();
        $this->session->setTempdata('pesan', 'logout', 3);
        return redirect()->to('/login');
    }
}
