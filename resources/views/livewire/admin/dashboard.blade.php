<div>
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $rpl }}</h3>

                            <p>Rekayasa Perangkat Lunak</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <a href="/rekayasaPerangkatLunak" class="small-box-footer">Info Lebih <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $ak }}</h3>

                            <p>Akutansi</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-money-bill-alt"></i>
                        </div>
                        <a href="akutansi" class="small-box-footer">Info Lebih <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>{{ $om }}</h3>

                            <p>Office Management</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <a href="officeManagement" class="small-box-footer">Info Lebih <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>{{ $tsm }}</h3>

                            <p>Teknik Sepeda Motor</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-motorcycle"></i>
                        </div>
                        <a href="teknikSepedaMotor" class="small-box-footer">Info Lebih <i class="fas fa-arrow-circle-right"></i></a>
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
                            Live Siswa Terbaru
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
                                        <th>Nama Calon Siswa</th>
                                        <th>Jurusan</th>
                                        <th>Waktu</th>
                                    </tr>
                                    @foreach($CalonSiswa as $siswa)
                                    <tr>
                                        <td>{{ $siswa->nama }}</td>
                                        <td>{{ $siswa->nama_jurusan }}</td>
                                        <td>{{ \Carbon\Carbon::parse($siswa->created_at)->diffForHumans() }}</td>
                                    </tr>
                                    @endforeach
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
                                        <th>Kode Jurusan</th>
                                        <th>Jurusan</th>
                                        <th>Aksi</th>
                                    </tr>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach($jurusan as $jrs)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $jrs['kode_jurusan'] }}</td>
                                        <td>{{ $jrs['nama_jurusan'] }}</td>
                                        <td>
                                            <button wire:click="getIDJurusan({{ $jrs['id'] }})" class="btn btn-sm btn-primary">Edit</button>
                                            <button onclick="return confirm('Yakin ingin mengahapus jurusan ini?') || event.stopImmediatePropagation()" wire:click="destroy({{ $jrs['id'] }})" class="btn btn-sm btn-danger">Hapus</button>
                                        </td>
                                    </tr>
                                    @endforeach
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

                    {{-- Componen Livewire Edit dan Tambah jurusan --}}
                    @if($statusUpdate)
                        @livewire('admin.jurusan.edit-jurusan')
                    @else 
                        @livewire('admin.jurusan.create-jurusan')
                    @endif
                    {{-- Akhir Componen Livewire Edit dan Tambah Jurusan --}}

                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
</div>
