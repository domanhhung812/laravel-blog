@extends('backend.layouts.master')
@section('admin_title', 'Cập nhật thẻ tag')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Quản lý tag
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Tag</a></li>
            <li class="active">Update</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form role="form" method="POST">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên thẻ tag <span class="text-danger">(*)</span></label>
                        <input type="text" class="form-control" placeholder="" name="t_name" value="{{$tag->t_name}}">
                        <label for="exampleInputEmail1">Tên slug</label>
                        <input type="text" class="form-control" placeholder="" name="t_slug" value="{{$tag->t_slug}}">
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Lưu và cập nhật</button>
                    <a href="{{ route('admin.get.tag.list') }}" class="btn btn-danger">Trở về</a>

                </div>
            </form>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection