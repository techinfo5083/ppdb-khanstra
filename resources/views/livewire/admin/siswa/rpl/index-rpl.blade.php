<div class="containert">
    @if($statusDetail)
        @livewire('admin.siswa.rpl.detail-rpl')
    @endif
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Siswa Rekayasa Perangkat Lunak</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if(count($CalonSiswa) !== 0)
                <a href="{{ route('exportSiswaRpl') }}" target="_blank" class="btn btn-danger mb-2"><i class="fas fa-file-pdf fa-1x"></i></a>
            @endif
            <br>
            <div class="row mb-2">
                <div class="col-sm-8">
                    <select wire:model="paginate" name="" id="" class="form-control form-control-sm w-auto">
                        <option value="5">5</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <input type="text" wire:model="search" name="" id="" class="form-control form-control-sm" placeholder="Cari Nama Calon Siswa...">
                </div>
            </div>
            <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td>No</td>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>JK</th>
                            <th>Alamat</th>
                            <th>Asal Sekolah</th>
                            <th>No.Telp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($CalonSiswa) == 0)
                            <div class="alert alert-danger" role="alert">
                                Data Masih Kosong!
                            </div>
                        @else             
                            @php
                                $i = 1 + ($paginate * ($currentPage - 1));
                            @endphp               
                            @foreach($CalonSiswa as $siswa)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $siswa->nisn }}</td>
                                <td>{{ $siswa->nama }}</td>
                                <td class="text-center">{{ $siswa->jk }}</td>
                                <td>{{ $siswa->alamat }}</td>
                                <td>{{ $siswa->nama_sekolah }}</td>
                                <td>{{ $siswa->no_telp }}</td>
                                <td class="text-center">
                                    <button  wire:click="getIDSiswa({{ $siswa->id }})" class="btn btn-sm btn-info"><i class="fas fa-info"></i></button>
                                    <button onclick="return confirm('Yakin ingin mengahapus {{ $siswa->nama }} dari data ini?') || event.stopImmediatePropagation()" wire:click="destroy({{ $siswa->id }})" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                {{ $CalonSiswa->links() }}
            </div>

            <table>
                <tr>
                    <th>Jumlah</th>
                    <td>: {{ $semua }} Orang</td>
                </tr>
                <tr>
                    <th>Laki-Laki</th>
                    <td>: {{ $laki_laki }} Orang</td>
                </tr>
                <tr>
                    <th>Perempuan</th>
                    <td>: {{ $perempuan }} Orang</td>
                </tr>
            </table>
        </div>
    </div>
</div>