@extends('template.admin')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Data Calon Siswa RPL
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-8">
                        <select name="" id="" class="form-control form-control-sm w-auto">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="25">25</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="text" name="" class="form-control form-control-sm" placeholder="Cari...">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>#</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>JK</th>
                            <th>Jurusan</th>
                            <th>Asal Sekolah</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>7873935834</td>
                            <td>Acep Sutisna</td>
                            <td>L</td>
                            <td>Rekayasa Perangkat Lunak</td>
                            <td>SMPN2 Darangdan</td>
                            <td>Babakan Sawah</td>
                            <td>
                                <a href="" class="btn btn-sm btn-primary">Edit</a>
                                <a href="" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>7873935834</td>
                            <td>Acep Sutisna</td>
                            <td>L</td>
                            <td>Rekayasa Perangkat Lunak</td>
                            <td>SMPN2 Darangdan</td>
                            <td>Babakan Sawah</td>
                            <td>
                                <a href="" class="btn btn-sm btn-primary">Edit</a>
                                <a href="" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>7873935834</td>
                            <td>Acep Sutisna</td>
                            <td>L</td>
                            <td>Rekayasa Perangkat Lunak</td>
                            <td>SMPN2 Darangdan</td>
                            <td>Babakan Sawah</td>
                            <td>
                                <a href="" class="btn btn-sm btn-primary">Edit</a>
                                <a href="" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>7873935834</td>
                            <td>Acep Sutisna</td>
                            <td>L</td>
                            <td>Rekayasa Perangkat Lunak</td>
                            <td>SMPN2 Darangdan</td>
                            <td>Babakan Sawah</td>
                            <td>
                                <a href="" class="btn btn-sm btn-primary">Edit</a>
                                <a href="" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                    </table>
                    <div class="keterangan">
                        <table>
                            <tr>
                                <th>Jumlah</th>
                                <td>: 50 Orang</td>
                            </tr>
                            <tr>
                                <th>Laki-Laki</th>
                                <td>: 30 Orang</td>
                            </tr>
                            <tr>
                                <th>Perempuan</th>
                                <td>: 20 Orang</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endSection()