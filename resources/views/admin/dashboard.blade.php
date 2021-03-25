@extends('template.admin')
@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>

                        <p>Rekayasa Perangkat Lunak</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <a href="#" class="small-box-footer">Info Lebih <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>53</h3>

                        <p>Akutansi</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-money-bill-alt"></i>
                    </div>
                    <a href="#" class="small-box-footer">Info Lebih <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3>44</h3>

                        <p>Office Management</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <a href="#" class="small-box-footer">Info Lebih <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>65</h3>

                        <p>Teknik Sepeda Motor</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-motorcycle"></i>
                    </div>
                    <a href="#" class="small-box-footer">Info Lebih <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
                <!-- Card Live Siswa daftar -->
                <div class="card">
                    <div class="card-header">
                        Live Siswa Daftar
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>#</th>
                                    <th>Nama Calon Siswa</th>
                                    <th>Jurusan</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Agung Kusaeri</td>
                                    <td>Rekayasa Perangkat Lunak</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Deni Muhammad Arifin</td>
                                    <td>Rekayasa Perangkat Lunak</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Silvia Rahmawati</td>
                                    <td>Akutansi</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Gilang Sunandar</td>
                                    <td>Teknik Sepeda Motor</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- akhir Card Live Siswa daftar -->

                <!-- Card Jurusan -->
                <div class="card">
                    <div class="card-header">
                        Jurusan
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>#</th>
                                    <th>Jurusan</th>
                                    <th>Aksi</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Rekayasa Perangkat Lunak</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Office Management</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Akutansi</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Teknik Sepeda Motor</td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-primary">Edit</a>
                                        <a href="" class="btn btn-sm btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- akhir Card jurusan -->
            </section>
            <!-- /.Left col -->

            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">
                <!-- Donut chart -->
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="far fa-chart-bar"></i>
                            Donut Chart
                        </h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="donut-chart" style="height: 300px;"></div>
                    </div>
                    <!-- /.card-body-->
                </div>
                <!-- /.card -->

                <div class="card">
                    <div class="card-header">
                        Tambah Jurusan
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group">
                                <label for="">Nama Jurusan</label>
                                <input type="text" name="" id="" class="form-control">
                            </div>
                            <button class="btn btn-sm btn-primary float-right">Tambah</button>
                        </form>
                    </div>
                </div>
            </section>
            <!-- right col -->
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
@endSection()