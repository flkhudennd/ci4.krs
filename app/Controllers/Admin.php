<?php

namespace App\Controllers;
use App\Models\m_AuthAdmin;

class Admin extends BaseController
{
	public function dashboard()
	{
		$data = [
			'title' => 'Dashboard'
		];
		return view('admin/dashboard', $data);
	}
}