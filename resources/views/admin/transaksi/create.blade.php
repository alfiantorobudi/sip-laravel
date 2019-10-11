@extends('admin/layouts/admin')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Upload Transaksi</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Tambah Transaksi </li>
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
            <form action="{{ url('admin/satuan/store') }}" method="post">
                {{ csrf_field() }}
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">

                        <h3 class="card-title">Form Upload Transaksi</h3>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <div class="alert alert-info">
                            <h4>
                                <strong>Info :</strong>
                            </h4>
                            <p> File yang diupload harus bertipe .xls atau .xlsx </p>
                            <p>Download contoh format <a href="{{ asset('storage/contoh-import.xlsx') }}" class="">di
                                    sini</a></p>

                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="file_excel">Transaksi</label>
                                <input type="file" class="form-control @error('file_excel') is-invalid @enderror"
                                    id="file_excel" name="file_excel">

                                {{-- VALIDATION ERRORS --}}
                                @error('file_excel')
                                <div class="text-danger mt-1">{{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="periode">Periode (m/d/y)</label>
                                {!! Form::input('date','periode',date('Y-m-d'),['class' => 'form-control']) !!}
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
                            {{ Form::submit('Tambah Satuan', ['class' => 'btn btn-primary float-right']) }}
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