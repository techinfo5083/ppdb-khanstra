<div class="container">
    <table class="table table-bordered" border="1">
        <tr class="text-center">
            <th>No</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>JK</th>
            <th>Alamat</th>
            <th>Tempat Lahir</th>
            <th>Tanggal</th>
            <th>Asal Sekolah</th>
            <th>Jurusan</th>
            <th>No.Telp</th>
        </tr>
        @php
            $i = 1;
        @endphp
        @foreach($DataSiswa as $siswa)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $siswa->nisn }}</td>
            <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->jk }}</td>
            <td>{{ $siswa->alamat }}</td>
            <td>{{ $siswa->tempat_lahir }}</td>
            <td>{{ $siswa->tgl_lahir }}</td>
            <td>{{ $siswa->nama_sekolah }}</td>
            <td>{{ $siswa->nama_jurusan }}</td>
            <td>{{ $siswa->no_telp }}</td>
        </tr>
        @endforeach
    </table>
</div>
