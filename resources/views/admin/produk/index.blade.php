@extends('admin/layouts/admin')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Daftar Produk</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Daftar Produk</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="datatable" class="table table-bordered table-hover">
                        <a href="produk/create/" class="btn btn-success mb-3">Tambah Data Produk</a>
                        <thead class="thead-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Satuan</th>
                                <th>Deskripsi</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php $no=1; ?>
                                @foreach ( $list_produk as $produk)
                                <td>{{ $no }}</td>
                                <td>{{ $produk->nama_kategori }} </td>
                                <td>{{ $produk->nama_produk }}</td>
                                <td> {{ $produk->harga }}</td>
                                <td>{{ $produk->satuan }}</td>
                                <td> {{ $produk->deskripsi }}</td>
                                <td> {{ $produk->image }}</td>
                                <td> {{ $produk->status }}</td>
                                <?php $no++?>

                                @endforeach
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Satuan</th>
                                <th>Deskripsi</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>

        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->

@endsection