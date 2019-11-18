<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tag;

class AdminTagController extends Controller
{
    public function index(){
    	return view('backend.tag.index');
    }

    public function add()
    {
    	return view('backend.tag.create');
    }

    public function store(Request $request)
    {
    	$data = $request->except('_token');
    	$data['t_slug'] = str_slug($request->get('t_name'));

    	Tag::insert($data);
    	
    	return redirect()->back();
    }
}
