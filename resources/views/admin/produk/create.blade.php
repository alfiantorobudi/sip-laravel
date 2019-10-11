@extends('admin/layouts/admin')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tambah Produk</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Tambah Produk</li>
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
            {{ Form::open(array('url' => 'admin/produk/store', 'class' => 'form', 'id' => 'form', 'method'=>'post', 'files' => true)) }}
            @csrf
            <div class="col-lg-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Tambah Produk</h3>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Kategori</label>
                                <select class="form-control @error('id_kategori') is-invalid @enderror" id="id_kategori"
                                    name="id_kategori">
                                    @foreach ($list_kategori as $kategori)
                                    <option>
                                        {{ $kategori }}
                                    </option>
                                    @endforeach
                                </select>

                                {{-- VALIDATION ERRORS --}}
                                @error('id_kategori')
                                <div class="text-danger mt-1">{{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="nama_produk">Nama Produk</label>
                                <input type="text" class="form-control @error('nama_produk') is-invalid @enderror"
                                    id="nama_produk" name="nama_produk" placeholder="Nama Produk">

                                @error('nama_produk')
                                <div class="text-danger mt-1">{{ $message }}
                                </div>
                                @enderror
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="harga">Harga</label>
                                <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga"
                                    name="harga" placeholder="Harga">

                                {{-- VALIDATION ERRORS --}}
                                @error('harga')
                                <div class="text-danger mt-1">{{ $message }}
                                </div>
                                @enderror
                            </div>


                            <div class="form-group col-md-6">
                                <label>Satuan</label>
                                <select class="form-control @error('satuan') is-invalid @enderror" id="satuan"
                                    name="satuan">
                                    @foreach ($list_satuan as $satuan)
                                    <option>
                                        {{ $satuan }}
                                    </option>
                                    @endforeach
                                </select>
                                {{-- VALIDATION ERRORS --}}
                                @error('satuan')
                                <div class="text-danger mt-1">{{ $message }}
                                </div>
                                @enderror
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="status">Status Aktif</label>
                                <div class="row mt-2 ml-0">
                                    {{ Form::label('tidak_aktif','Tidak Aktif', ['class'=>"mr-4 text-secondary"]) }}
                                    <div class="custom-control custom-switch">
                                        {{ Form::checkbox('customSwitch1', 'aktif', true,
                                                    ['class' => 'custom-control-input', 'id'=>"customSwitch1"]) }}
                                        {{ Form::label('customSwitch1', 'Aktif', ['class' => 'custom-control-label']) }}
                                    </div>

                                    {{-- VALIDATION ERRORS --}}
                                    @error('aktif')
                                    <div class="text-danger mt-1">{{ $message }}
                                    </div>
                                    @enderror
                                </div>

                            </div>

                            <div class="form-group col-md-6">
                                <label for="image">Image</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                                    name="image">

                                {{-- VALIDATION ERRORS --}}
                                @error('image')
                                <div class="text-danger mt-1">{{ $message }}
                                </div>
                                @enderror
                            </div>


                        </div>

                        <div class="form-group mt-3">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control @error('deskripsi') is-invalid @enderror" rows="4"
                                id="deskripsi" name="deskripsi" placeholder="Masukan deskripsi ..."></textarea>
                            {{-- VALIDATION ERRORS --}}
                            @error('deskripsi')
                            <div class="text-danger mt-1">{{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->

                    {{-- footer form --}}
                    <div class="card-footer bg-gradient-dark">
                        <div class="float-left">
                            <div class="float-left">
                                <a href="/admin/produk" class="btn btn-default">Back</a>
                            </div>
                        </div>
                        <div class="float-right">
                            {{ Form::submit('Tambah Produk', ['class' => 'btn btn-primary float-right']) }}
                        </div>

                    </div>
                </div>
                <!-- /.card -->

                </form>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
</section>
<!-- /.content -->

@endsection