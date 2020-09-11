<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class Authadmin implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session()->get('islogin')) {
            session()->setTempdata('pesan', 'belum-login', 3);
            return redirect()->to(base_url('login'));
        }

        if (session()->get('role_id') != 1) {
            $session_items = ['username', 'nama', 'gambar', 'role_id', 'islogin'];
            session()->remove($session_items);
            session()->setTempdata('pesan', 'bukan-admin', 3);
            return redirect()->to(base_url('login'));
        }
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
