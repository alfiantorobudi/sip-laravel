@extends('admin/layouts/admin')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Detail Kategori</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Detail Kategori</li>
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
                    <h3 class="card-title">Detail Kategori</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-6 mr-4">
                            <label for="nama_kategori">Nama Kategori</label>
                            <input type="text" class="form-control" name="nama_kategori" id="nama_kategori"
                                placeholder="Enter kategori" value="{{ $kategori->nama_kategori }}" disabled>
                        </div>

                        <div class="form-group float-right col-md-4">
                            <label for="status">Status Aktif</label>
                            <input type="text" class="form-control" name="status" id="status"
                                value="{{ $kategori->status }}" disabled>
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