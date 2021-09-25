<div class="card">
    <div class="card-header">
        Detail Calon Siswa
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
        </button>
    </div>
    </div>
    <div class="card-body">
        <div class="table table-responsive">
            <table class="table table-striped">
                <tr>
                    <td>{{ $nisn }}</td>
                    <td>{{ $nama }}</td>
                    <td>{{ $jk }}</td>
                    <td>{{ $tempat_lahir }}</td>
                    <td>{{ $tgl_lahir }}</td>
                    <td>{{ $alamat }}</td>
                    <td>{{ $nama_sekolah }}</td>
                    <td>{{ $no_telp }}</td>
                </tr>
            </table>
        </div>
        <button wire:click="disableDetail()" class="btn btn-danger float-right">Tutup</button>
    </div>
</div>
