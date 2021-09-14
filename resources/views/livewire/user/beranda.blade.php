<div class="container-fluid"> 
    {{-- shadow-sm mb-5 bg-white rounded --}}
    <div id="carouselExampleCaptions" class="carousel slide"  data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/image/gambar_khanstra/kn1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Slide Pertama</h5>
                    <p>Gedung SMK Kharisma Nusantara.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/image/gambar_khanstra/kn2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Slide Kedua</h5>
                    <p>Guru-Guru dan Staff Tata Usaha.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/image/gambar_khanstra/kn3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Kegiatan Praktek Akutansi.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
        {{-- <hr class="w-50" style="border: 1px solid #8a8888"> --}}
    <div class="container mt-3">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h4 class="alert-heading">Selamat Datang {{ auth()->user()->name }}!</h4>
            <p>PPDB Online Web SMK-KN Tegalwaru Tahun 2020-2021 <b>Pendaftaran Gratis</b>.</p>
            <hr>
            <p class="mb-0">Informasi Lebih Lanjut Hubungi Telp/Wa : <b>087823665454</b>.</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-info">
                        Persyaratan
                    </div>
                    <div class="card-body">
                        <h4>Persyaratan</h4>
                        <ol>
                            <li type="number">
                                Pastikan data diri sesuai dengan Kartu keluarga (KK).
                            </li>
                            <li type="number">
                                Isi formulir dengan baik dan benar.
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header bg-info">
                        Alur Pendaftaran
                    </div>
                    <div class="card-body">
                        <h4>Alur Pendaftaran</h4>
                        <ol>
                            <li type="number">
                                Registrasi akun terlebih dahulu dan login.
                            </li>
                            <li type="number">
                                Baca persyaratan pendaftaran PPDB Online.
                            </li>
                            <li type="number">
                                Isi formulir pendaftaran
                            </li>
                            <li type="number">
                                Tunggu pengumuman diterima atau tidaknya.
                            </li>
                            <li type="number">
                                Daftar ulang di sekolah.
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>