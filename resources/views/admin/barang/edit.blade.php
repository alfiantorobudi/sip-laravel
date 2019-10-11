@extends('admin/layouts/admin')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit barang</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Edit barang</li>
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
            <form action="{{ url('admin/barang/update/' . $barang->id) }}" method="post">
                {{ csrf_field() }}
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">

                        <h3 class="card-title">Form Edit barang</h3>

                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6 mr-4 ">
                                <label for="no_barang">No barang</label>
                                <input type="text" name="no_barang" id="no_barang"
                                    class="form-control @error('no_barang') is-invalid @enderror"
                                    value="{{ $barang->no }}" readonly>
                                {{-- VALIDATION ERRORS --}}
                                @error('no_barang')
                                <div class="text-danger mt-1">{{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6 mr-4 ">
                                <label for="nama_barang">Nama barang</label>
                                <input type="text" name="nama_barang" id="nama_barang"
                                    class="form-control @error('nama_barang') is-invalid @enderror"
                                    placeholder="Enter barang" value="{{ $barang->nama }}">
                                {{-- VALIDATION ERRORS --}}
                                @error('nama_barang')
                                <div class="text-danger mt-1">{{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6 mr-4 ">
                                <label for="tgl_penerimaan">Tgl Penerimaan</label>
                                <input type="date" name="tgl_penerimaan" id="tgl_penerimaan"
                                    class="form-control @error('tgl_penerimaan') is-invalid @enderror"
                                    placeholder="Enter tanggal" value="{{ $barang->tgl_penerimaan }}">
                                {{-- VALIDATION ERRORS --}}
                                @error('tgl_penerimaan')
                                <div class="text-danger mt-1">{{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6 mr-4 ">
                                <label for="harga">Harga</label>
                                <input type="text" name="harga" id="harga"
                                    class="form-control @error('harga') is-invalid @enderror" placeholder="Enter barang"
                                    value="{{ $barang->harga }}">
                                {{-- VALIDATION ERRORS --}}
                                @error('harga')
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
                            <a href="/admin/barang" class="btn btn-default">Back</a>
                        </div>
                        <div class="float-right">
                            <button class="btn btn-primary float-right">Tambah barang</button>
                            {{-- {{ Form::submit('Tambah barang', ['class' => 'btn btn-primary float-right']) }} --}}
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