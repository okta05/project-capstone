@extends('template')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard | Tambah Tempat</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <div class="col">

                <!-- Card Edit -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Edit -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-dark">Tambah Tempat</h6>
                    </div>
                        
                    <!-- Card Content - Edit -->
                    <div class="card-body">
                        <form class="user">
                            <div class="form-group">
                                <label for="">Nama Tempat</label>
                                <input type="text" class="form-control form-control-user">
                            </div>
                            <div class="form-group">
                                <label for="">Kapasitas</label>
                                <input type="text" class="form-control form-control-user">
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <input type="text" class="form-control form-control-user">
                            </div>
                            <div class="form-group">
                                <label for="">WA Penanggungjawab Tempat</label>
                                <input type="number" class="form-control form-control-user">
                            </div>
                            <div class="form-group">
                                <label for="">Lampiran</label>
                                <div class="my-2"></div>
                                <a href="#" class="btn btn-light btn-icon-split">
                                    <span class="icon text-gray-600">
                                        <i class="fas fa-arrow-up"></i>
                                    </span>
                                    <span class="text">Upload File</span>
                                </a>
                            </div>
                            <a href="{{ url('tempat') }}" class="btn btn-danger">Simpan</a>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- End of Container-Fluid -->
@endsection