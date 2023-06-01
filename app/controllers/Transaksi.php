<?php

namespace App\Controllers;

use App\Core\Controller;

class Transaksi extends Controller
{
	public object $model;

	public function __construct()
	{

		$this->model = new \App\Models\Transaksi();
	}

	public function index()
	{

		$data['rows'] = $this->model->tampil();
		$this->dashboard('transaksi/index', $data);
	}

	public function input()
	{
		$this->dashboard('transaksi/input');
	}

	public function simpan()
	{
		//
	}

	public function edit()
	{
		$this->dashboard('transaksi/edit');
	}

	public function update()
	{
		//
	}

	public function delete()
	{
		//
	}
}
