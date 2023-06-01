<?php

namespace App\Core;

class Controller
{
	// Layout home
	public function guest($view, $data = [])
	{
		require_once ROOT . "layouts/guest.php";
	}

	// layout dashboard
	public function dashboard($view, $data = [])
	{
		require_once ROOT . "layouts/dashboard.php";
	}

	public function jenisobat($view, $data = [])
	{
		require_once ROOT . "layouts/dashboard.php";
	}

	public function obat($view, $data = [])
	{
		require_once ROOT . "layouts/dashboard.php";
	}

	public function pelanggan($view, $data = [])
	{
		require_once ROOT . "layouts/dashboard.php";
	}

	public function transaksi($view, $data = [])
	{
		require_once ROOT . "layouts/dashboard.php";
	}
}
