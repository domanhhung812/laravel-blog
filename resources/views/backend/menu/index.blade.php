@extends('backend.layouts.master')  
@section('admin_title','Quản lý menu')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản lý menu
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Menu</a></li>
            <li class="active">Index</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><a href="{{ route('admin.get.menu.add') }}" class="btn btn-success"><i class="fa fa-plus"> Thêm mới</i></a></h3>
                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Slug</th>
                            <th>Parent ID</th>
                            <th>Active</th>
                            <th>Avatar</th>
                            <th>Action</th>
                        </tr>
                        @if($menus)
                            @foreach($menus as $menu)
                                <tr>
                                    <td>#{{ $menu->id }}</td>
                                    <td>{{ $menu->mn_name }}</td>
                                    <td>{{ $menu->mn_slug }}</td>
                                    <td>{{ $menu->mn_parent_id }}</td>
                                    <td>{{ $menu->mn_active }}</td>
                                    <td>{{ $menu->mn_avartar }}</td>
                                    <td>
                                        <a href="{{ route('admin.get.menu.edit', $menu->id) }}" class="btn btn-xs btn-warning">Edit</a>
                                        <a href="{{ route('admin.get.menu.delete', $menu->id) }}" class="btn btn-xs btn-danger js-delete">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </section>
    <!-- /.content -->
</div>
@yield('scripts')
@endsection