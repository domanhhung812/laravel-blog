<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminTagController extends Controller
{
    public function index(){
    	return view('backend.tag.index');
    }

    public function add()
    {
    	return view('backend.tag.create');
    }
}
