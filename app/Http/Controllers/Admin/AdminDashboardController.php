<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDashboardController{
	public function index()
	{
		return view('backend.pages.index');
	}
}