<?php

namespace App\Controllers;

use App\Core\Controller;

class Jenisobat extends Controller
{
	public object $model;

	public function __construct()
	{

		$this->model = new \App\Models\Jenisobat();
	}

	public function index()
	{

		$data['rows'] = $this->model->tampil();
		$this->dashboard('jenisobat/index', $data);
	}

	public function input()
	{
		$this->dashboard('jenisobat/input');
	}

	public function simpan()
	{
		//
	}

	public function edit()
	{
		$this->dashboard('jenisobat/edit');
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
