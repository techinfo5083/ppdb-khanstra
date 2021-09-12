<br>
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-8 col-sm-10">
            <div class="card shadow mb-5 bg-body rounded">
                <div class="card-header">
                    <h6>Form Pendaftaran</h6>
                </div>
                <div class="card-body">
                    @if(session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> {{ session('message') }} .
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form class="row g-3" wire:submit.prevent="store">
                        <div class="col-md-6">
                            <label for="nisn" class="form-label">No.NISN</label>
                            <input type="text" class="form-control @error('nisn') is-invalid @enderror" id="nisn" wire:model="nisn">
                            @error('nisn')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" wire:model="nama">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="alamat" class="form-label">Alamat</label>
                            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" wire:model="alamat">
                            @error('alamat')
                                <div class="invalid-feedback">
                                    {{  $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="asal_sekolah" class="form-label">Nama Asal Sekolah</label>
                            <input type="text" class="form-control @error('nama_sekolah') is-invalid @enderror" id="asal_sekolah" wire:model="nama_sekolah">
                            @error('nama_sekolah')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir" wire:model="tempat_lahir">
                            @error('tempat_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" wire:model="tgl_lahir">
                            @error('tgl_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label for="jk" class="form-label">Jenis Kelamin</label>
                            <select id="jk" class="form-control @error('jk') is-invalid @enderror" wire:model="jk">
                                <option value="">---Pilih---</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                            @error('jk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select id="jurusan" class="form-control @error('id_jurusan') is-invalid @enderror" wire:model="id_jurusan">
                                <option value="">---Pilih---</option>
                                @foreach($jurusan as $jrs)
                                    <option value="{{ $jrs['id'] }}">{{ $jrs['nama_jurusan'] }}</option>
                                @endforeach
                            </select>
                            @error('id_jurusan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="no_telp" class="form-label">No.Telp/WA</label>
                            <input type="text" id="no_telp" class="form-control @error('no_telp') is-invalid @enderror" wire:model="no_telp">
                            @error('no_telp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-12 mt-2">
                            <button type="submit" class="btn btn-success">Daftar</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
