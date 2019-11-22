<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;


class AdminMenuController extends Controller
{
    public function index(){
    	$menus = Menu::orderByDesc('id')->paginate(5);
    	return view('backend.menu.index',compact('menus'));
    }
    public function add()
    {
    	return view('backend.menu.create');
    }
    public function store(Request $request)
    {
    	$menu = $request->except('_token');
    	Menu::insert($menu);
    	\Toastr::success('Thêm mới thành công', 'Thành công', ['positionClass'=>"toast-top-right"]);
    	return redirect()->back();
    }	
}
