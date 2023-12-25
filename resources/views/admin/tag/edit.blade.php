@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Editing a tag</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Editing a tag</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('tag.update', ['tag' => $tag->id]) }}" method="POST" class="w-25">
                        @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" placeholder="Tag name" value="{{$tag->title}}">
                                @error('title')
                                    <div class="text-danger">This field must be filled up</div>
                                @enderror
                            </div>
                            <input type="submit" class="btn btn-block btn-outline-dark" value="Update">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
