@extends('admin/layouts/admin')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Kategori</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit Kategori</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">

            <!-- form start -->
            <form action="{{ url('admin/kategori/update/'. $kategori->id)}}" method="post">
                {{ csrf_field() }}
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">

                        <h3 class="card-title">Form Edit Kategori</h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6 mr-4 ">
                                <label for="nama_kategori">Nama Kategori</label>
                                <input type="text" name="nama_kategori" id="nama_kategori"
                                    class="form-control @error('nama_kategori') is-invalid @enderror"
                                    placeholder="Enter kategori" value="{{ $kategori->nama_kategori }}">
                                {{-- VALIDATION ERRORS --}}
                                @error('nama_kategori')
                                <div class="text-danger mt-1">{{ $message }}
                                </div>
                                @enderror
                            </div>


                            <div class="form-group float-right col-md-4">
                                <label for="status">Status Aktif</label>
                                <div class="row mt-2">
                                    {{ Form::label('tidak_aktif','Tidak Aktif', ['class'=>"mr-4 text-secondary"]) }}
                                    <div class="custom-control custom-switch">
                                        {{ Form::checkbox('customSwitch1', 'aktif', true,
                                        ['class' => 'custom-control-input', 'id'=>"customSwitch1"]) }}
                                        {{ Form::label('customSwitch1', 'Aktif', ['class' => 'custom-control-label']) }}
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    {{-- footer form --}}
                    <div class="card-footer bg-gradient-dark">
                        <div class="float-left">
                            <div class="float-left">
                                <a href="/admin/kategori" class="btn btn-default">Back</a>
                            </div>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary float-right">Update</a>

                        </div>

                    </div>
            </form>
        </div>
        <!-- /.col -->
    </div>

    </div>
    <!-- /.row -->
</section>
<!-- /.content -->

@endsection