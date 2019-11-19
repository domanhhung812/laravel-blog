<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tag;

class AdminTagController extends Controller
{
    public function index(){

    	$tags = Tag::orderByDesc('id')->paginate(5);
    	return view('backend.tag.index',compact('tags'));
    }

    public function add()
    {
    	return view('backend.tag.create');
    }

    public function store(Request $request)
    {
    	$error = $request->validate(
    		[
    			't_name' => 'required'

    		],
    		[
    			't_name.required' => 'Tên thẻ tag không được để trống'
    		]
    );

    	$data = $request->except('_token');
    	$data['t_slug'] = str_slug($request->get('t_name'));

    	Tag::insert($data);
    	
    	return redirect()->back();
    }

    public function edit($id)
    {
    	$tag = Tag::findOrFail($id);
    
    	return view('backend.tag.update', compact('tag'));
    }
    public function update(Request $request, $id)
    {
    	$error = $request->validate(
    		[
    			't_name' => 'required',
    			't_name' => 'unique:tags,t_name'
    		],
    		[
    			't_name.required' => 'Tên thẻ tag không được để trống',
    			't_name.unique' => 'Tên thẻ tag đã tồn tại, vui lòng nhập tên thẻ tag khác!'
    		]
    	);

    	$data = $request->except('_token');
    	$data['t_slug'] = str_slug($request->get('t_name'));
    	$tag = Tag::findOrFail($id);

    	$tag->t_name = $request->get('t_name');
        $tag->t_slug =$request->get('t_slug');
        $tag->save();
    	return redirect()->back();
    }
    public function delete($id)
    {
        Tag::findOrFail($id)->delete();

        return redirect()->back();
    }
}
