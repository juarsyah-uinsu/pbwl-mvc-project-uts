<?php

namespace App\Controllers;

use App\Core\Controller;

class Obat extends Controller
{
	public object $model;

	public function __construct()
	{

		$this->model = new \App\Models\Obat();
	}

	public function index()
	{

		$data['rows'] = $this->model->tampil();
		$this->dashboard('obat/index', $data);
	}

	public function input()
	{
		$this->dashboard('obat/input');
	}

	public function simpan()
	{
		//
	}

	public function edit()
	{
		$this->dashboard('obat/edit');
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
