@extends('admin/layouts/admin')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Detail barang</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Detail barang</li>
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

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Detail barang</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6 mr-4">
                            <label for="no_barang">No barang</label>
                            <input type="text" class="form-control" name="no_barang" id="no_barang"
                                placeholder="Enter barang" value="{{ $barang->no }}" disabled>
                        </div>

                        <div class="form-group col-md-6 mr-4">
                            <label for="nama_barang">Nama barang</label>
                            <input type="text" class="form-control" name="nama_barang" id="nama_barang"
                                placeholder="Enter barang" value="{{ $barang->nama }}" disabled>
                        </div>

                        <div class="form-group col-md-6 mr-4">
                            <label for="tgl_penerimaan">Tgl penerimaan</label>
                            <input type="text" class="form-control" name="tgl_penerimaan" id="tgl_penerimaan"
                                placeholder="Tanggal penerimaan" value="{{ $barang->tgl_penerimaan }}" disabled>
                        </div>

                        <div class="form-group col-md-6 mr-4">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" name="harga" id="harga" placeholder="Enter barang"
                                value="{{ $barang->harga }}" disabled>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            {{-- footer form --}}
            <div class="card-footer bg-gradient-dark">
                <div class="float-right">
                    <button onclick="history.go(-1);" class="btn btn-primary">Back</button>
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