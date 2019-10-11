@extends('admin/layouts/admin')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Daftar Satuan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Daftar Satuan</li>
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
                    <h3 class="card-title">Daftar Semua Satuan</h3>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                    <table id="datatable" class="table table-bordered table-hover">
                        <a href="satuan/create/" class="btn btn-success mb-3">Tambah Data Satuan</a>
                        <thead class="thead-dark">
                            <tr>
                                <th>No.</th>
                                <th>ID Satuan</th>
                                <th>Nama Satuan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; ?>
                            @foreach($daftar_satuan as $satuan)
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $satuan->id }}</td>
                                <td> {{ $satuan->nama }}
                                </td>
                                <td>
                                    <a href="{{ url('admin/satuan/show/'.$satuan->id) }}" class="btn btn-primary"><i
                                            class="fa fa-eye"></i></a>
                                    <a href="{{ url('admin/satuan/edit/'.$satuan->id) }}" class="btn btn-success"><i
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
                                <th>ID Satuan</th>
                                <th>Nama Satuan</th>
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