@extends('admin/layouts/admin')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Daftar Barang</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Daftar Barang</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->

    {{-- menampilkan flash data --}}
    @if($message = Session::get('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>Sukses!</strong> {{$message}}
    </div>

    @elseif($message = Session::get('error'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>Sukses!</strong> {{$message}}
    </div>
    @else
    @endif

</div>
<!-- /.content-header -->


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Daftar Semua Barang</h3>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <table id="datatable" class="table table-bordered table-hover">
                        <a href="barang/create/" class="btn btn-success mb-3">Tambah Data Barang</a>
                        <thead class="thead-dark">

                            <tr>
                                <th>No.</th>
                                <th>No Barang</th>
                                <th>Nama Barang</th>
                                <th>Tgl Penerimaan</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            @foreach($daftar_barang as $barang)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $barang->no }}</td>
                                <td> {{ $barang->nama }}
                                </td>
                                <td> {{ $barang->tgl_penerimaan }}
                                </td>
                                <td> {{ $barang->harga }}</td>
                                <td>
                                    <a href="{{ url('admin/barang/show/'.$barang->id) }}" class="btn btn-primary"><i
                                            class="fa fa-eye"></i></a>
                                    <a href="{{ url('admin/barang/edit/'.$barang->id) }}" class="btn btn-success"><i
                                            class="fas fa-pencil-alt"></i></a>
                                    <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php $no++ ?>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>No Barang</th>
                                <th>Nama Barang</th>
                                <th>Tgl Penerimaan</th>
                                <th>Harga</th>
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