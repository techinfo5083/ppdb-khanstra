<div class="containert">
    @if($statusDetail)
        @livewire('admin.siswa.tsm.detail-tsm')
    @endif
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Siswa Teknik Sepeda Motor</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
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
                    @foreach($CalonSiswa as $siswa)
                    <tr>
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