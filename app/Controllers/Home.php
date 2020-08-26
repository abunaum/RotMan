<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------
	public function test()
	{
		$data = [
			'title' => 'Login',
			'namaaplikasi' => $this->namaaplikasi,
			'scheader' => array(
				'/assets/css/bootstrap.min.css',
				'/assets/css/animate.css',
				'/assets/css/icons.css',
				'/assets/css/app-style.css'
			)
		];
		echo view('template/header', $data);
		echo view('test', $data);
		echo view('template/footer', $data);
	}
}
