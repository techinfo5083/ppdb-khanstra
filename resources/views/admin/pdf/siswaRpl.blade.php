<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export Data Siswa RPL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        @page { size: letter landscape };
    </style>
</head>
<body>
    
<div class="row">
    <div class="col-sm-4">
        <img src="https://i.ibb.co/tYQ6nKh/Logo.png" alt="Logo" border="0" width="100">
    </div>
    <div class="col-sm-8 m-auto">
        <h3 class="text-center">SMK KHARISMA NUSANTARA</h3>
        <h4 class="text-center">PPDB Online Tahun 2021-2022</h4>
        <h4 class="text-center">Data Calon Siswa RPL</h4>
    </div>
</div>
<hr style="border: 2px solid black; margin-top: -80px;">

<table class="table table-bordered mt-2">
    <tr class="text-center bg-primary">
        <th>No</th>
        <th>NISN</th>
        <th>Nama</th>
        <th>JK</th>
        <th>Alamat</th>
        <th>Asal Sekolah</th>
        <th>Jurusan</th>
    </tr>
    @php
        $i = 1;
    @endphp
    @foreach($CalonSiswa as $siswa)
    <tr>
        <td>{{ $i++ }}</td>
        <td>{{ $siswa->nisn }}</td>
        <td>{{ $siswa->nama }}</td>
        <td>{{ $siswa->jk }}</td>
        <td>{{ $siswa->alamat }}</td>
        <td>{{ $siswa->nama_sekolah }}</td>
        <td>{{ $siswa->nama_jurusan }}</td>
    </tr>
    @endforeach
</table>


</body>
</html>