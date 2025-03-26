@extends('master.app')

@section('content-header')
    <div class="row">
        <div class="col-sm-6">
            <h3 class="mb-0">Periksa</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Periksa</li>
            </ol>
        </div>
    </div>
@endsection

@section('sidebar')
    <li class="nav-item">
        <a href="{{ route('dokter.dashboard') }}" class="nav-link ">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
                Dashboard
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('dokter.periksa') }}" class="nav-link active">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
                Periksa
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="{{ route('dokter.obat') }}" class="nav-link">
            <i class="nav-icon bi bi-speedometer"></i>
            <p>
                Obat
            </p>
        </a>
    </li>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- /.col -->

            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Periksa</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>ID Periksa</th>
                                        <th>Pasien</th>
                                        <th>Tanggal Periksa</th>
                                        <th>Catatan</th>
                                        <th>Biaya Periksa</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($periksas as $periksa)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $periksa->id }}</td>
                                            <td>{{ $periksa->pasien->nama }}</td>
                                            <td>{{ $periksa->tgl_periksa }}</td>
                                            <td>{{ $periksa->catatan }}</td>
                                            <td>{{ $periksa->biaya_periksa }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
