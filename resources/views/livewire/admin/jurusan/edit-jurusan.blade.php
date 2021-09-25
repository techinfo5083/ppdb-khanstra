<div class="card">
    <div class="card-header">
        Edit Jurusan
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <form action="" wire:submit.prevent="update">
            <div class="form-group">
                <label for="">Kode Jurusan</label>
                <input type="text" wire:model="kode_jurusan" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Nama Jurusan</label>
                <input type="text" wire:model="nama_jurusan" class="form-control">
            </div>
            <button type="reset" wire:click="statusUpdate()" class="btn btn-sm btn-danger float-left">Batal</button>
            <button type="submit" class="btn btn-sm btn-primary float-right">Ubah</button>
        </form>
    </div>
</div>