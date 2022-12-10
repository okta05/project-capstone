@extends('template')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard | Edit</h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <div class="col-lg-3">

                <!-- Default Card Example -->
                <div class="card mb-4">
                    <div class="card h-100 py-2">
                        <img src="assets/img/gesibu.svg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <h5 class="card-title">GESIBU BLAMBANGAN</h5>
                                <p class="card-text">Kapasitas max 600 orang</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-9">

                <!-- Card Edit -->
                <div class="card shadow mb-4">
                    <!-- Card Header - Edit -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-dark">Edit</h6>
                    </div>
                        
                    <!-- Card Content - Edit -->
                    <div class="card-body">
                        <form class="user">
                            <div class="form-group">
                                <label for="">Ganti Nama Tempat</label>
                                <input type="text" class="form-control form-control-user">
                            </div>
                            <div class="form-group">
                                <label for="">Ganti Kapasitas</label>
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
                            <div class="row justify-content-between">
                                <div class="col-4">
                                    <a href="{{ url('tempat') }}" class="btn btn-danger">Simpan Perubahan</a>
                                </div>
                                <div class="col-4">
                                    <a href="{{ url('tempat') }}" class="btn btn-primary">Hapus Tempat</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- End Of Container-Fluid -->
@endsection