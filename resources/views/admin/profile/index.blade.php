@extends('admin/layouts/admin')
@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Profile</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Profile </li>
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
                    <h3 class="card-title">Edit Profil</h3>
                </div>

                <div class="container-fluid mt-3">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-6">
                        </div>
                    </div>

                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                @if ( Auth::user()->image === null)
                                <img src="{{ asset('storage/profile/default.jpg') }}" class="card-img">
                                @else <img src="{{ Auth::user()->image }}" class="card-img">
                                @endif
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3>{{ Auth::user()->name }}</h3>
                                    <p class="card-text">{{ Auth::user()->email }}</p>
                                    <p class="card-text"><small class="text-muted">Join since
                                            {{ Auth::user()->email_verified_at->format('d-m-Y') }}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.card -->
        </div>

        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->

@endsection