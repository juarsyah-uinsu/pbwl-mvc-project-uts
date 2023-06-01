<?php

namespace App\Controllers;

use App\Core\Controller;

class Pelanggan extends Controller
{
	public object $model;

	public function __construct()
	{

		$this->model = new \App\Models\Pelanggan();
	}

	public function index()
	{

		$data['rows'] = $this->model->tampil();
		$this->dashboard('pelanggan/index', $data);
	}

	public function input()
	{
		$this->dashboard('pelanggan/input');
	}

	public function simpan()
	{
		//
	}

	public function edit()
	{
		$this->dashboard('pelanggan/edit');
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
