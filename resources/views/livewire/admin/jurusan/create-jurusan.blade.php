<div class="card">
    <div class="card-header">
        Tambah Jurusan
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <form wire:submit.prevent="store">
            <div class="form-group">
                <label for="">Kode Jurusan</label>
                <input type="text" wire:model="kode_jurusan" class="form-control @error('kode_jurusan') is-invalid @enderror">
                @error('kode_jurusan')
                    {{ $message }}
                @enderror
            </div>
            <div class="form-group">
                <label for="">Nama Jurusan</label>
                <input type="text" wire:model="nama_jurusan" class="form-control @error('nama_jurusan') is-invalid @enderror">
                @error('nama_jurusan')
                    {{ $message }}
                @enderror
            </div>
            <button type="submit" class="btn btn-sm btn-primary float-right">Tambah</button>
        </form>
    </div>
</div>