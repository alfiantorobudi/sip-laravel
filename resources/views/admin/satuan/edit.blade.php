@extends('admin/layouts/admin')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Satuan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit Satuan</li>
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
            <form action="{{ url('admin/satuan/update') }}" method="post">
                {{ csrf_field() }}
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">

                        <h3 class="card-title">Form Edit Satuan</h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6 mr-4">
                                <label for="nama_satuan">Nama Satuan</label>
                                <input type="text" name="nama_satuan" id="nama_satuan" class="form-control @if ($errors->has('nama_satuan')) is-invalid {{ $errors->first('nama_satuan') }}
                                @endif" placeholder="Enter satuan" value="{{ old('nama_satuan') }}">

                                {{-- VALIDATION ERRORS --}}

                                @error('nama_satuan')
                                <div class="text-danger mt-1">{{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    {{-- footer form --}}
                    <div class="card-footer bg-gradient-dark">
                        <div class="float-left">
                            <a href="/admin/satuan" class="btn btn-default">Back</a>
                        </div>
                        <div class="float-right">
                            {{ Form::submit('Update', ['class' => 'btn btn-primary float-right']) }}
                        </div>

                    </div>
            </form>
        </div>
        <!-- /.card -->

    </div>
    <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->


@endsection