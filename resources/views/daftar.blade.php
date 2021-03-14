@extends('template.layout')

<title>Pendaftaran</title>
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-8 col-sm-10">
            <div class="card shadow mb-5 bg-body rounded">
                <div class="card-header">
                    <h6 class="d-inline" style="line-height: 50px;">Form Pendaftaran</h6>
                    <img class="d-inline float-end" src="/image/Logo.png" width="50" alt="">
                </div>
                <div class="card-body">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <h4 class="alert-heading">Selamat Datang!</h4>
                        <p>Formulir Pendaftaran PPDB Online Web SMK-KN Tegalwaru Tahun 2020-2021 <b>Pendaftaran Gratis</b>.</p>
                        <hr>
                        <p class="mb-0">Informasi Lebih Lanjut Hubungi Telp/Wa : <b>087823665454</b>.</p>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">No.NISN</label>
                            <input type="text" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="inputPassword4">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Alamat</label>
                            <input type="text" class="form-control" id="inputAddress">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Nama Asal Sekolah</label>
                            <input type="text" class="form-control" id="inputAddress2">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="inputCity">
                        </div>

                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Jenis Kelamin</label>
                            <select id="inputState" class="form-select">
                                <option value="">---Pilih---</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Upload Foto</label>
                            <input type="file" class="form-control" id="inputGroupFile01">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success">Daftar</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection()