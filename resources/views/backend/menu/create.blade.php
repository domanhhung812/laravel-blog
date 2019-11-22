@extends('backend.layouts.master')
@section('admin_title', 'Thêm mới Menu')
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
            <li class="active">Create</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif --}}
            <form role="form" method="POST">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên menu</label>
                        <input type="text" class="form-control" placeholder="" name="mn_name" value="">
                        <label for="exampleInputEmail1">Tên slug</label>
                        <input type="text" class="form-control" placeholder="" name="mn_slug" value="">
                        <label for="exampleInputEmail1">Parent Id</label>
                        <input type="number" class="form-control" placeholder="" name="mn_parent_id" value="">
                        <div class="custom-control custom-switch">
                            <label class="custom-control-label" for="switch1">Active</label>
                            <input type="checkbox" checked data-toggle="toggle" data-size="sm" name="mn_active">
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="mn_avatar">
                            {{-- <label class="custom-file-label" for="customFile">Choose file</label> --}}
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Thêm mới</button>
                    <a href="{{ route('admin.get.menu.index') }}" class="btn btn-danger">Trở về</a>
                </div>
            </form>
        </div>
    </section>
    <!-- /.content -->
</div>
@endsection
@section('scripts')
    @parent
    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
          var fileName = $(this).val().split("\\").pop();
          $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
        </script>
@endsection
