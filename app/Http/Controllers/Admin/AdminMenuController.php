<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminMenuController extends Controller
{
    public function index(){
    	return view('backend.menu.index');
    }
    public function add()
    {
    	return view('backend.menu.create');
    }
    public function store(Request $request)
    {
    	$menu = $request->all();
    	dd($menu);	
    }
}
