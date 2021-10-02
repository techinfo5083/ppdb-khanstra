<div class="container">
<br>
    @if (count($id_user) !== 0)
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-info">Pengumuman</div>
                    <div class="card-body">
                        <h4 class="text-center">Tunggu informasi pelaksanaan test di sekolah</h4>
                    </div>
                </div>
            </div>
        </div>
    @else 
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-info">Pengumuman</div>
                    <div class="card-body">
                        <h4 class="text-center">Anda belum mendaftar!</h4>
                        <a href="{{ route('pendaftaran') }}" class="btn btn-primary float-right">Daftar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
