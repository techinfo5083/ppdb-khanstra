<?php

namespace App\Http\Livewire\Admin\Siswa\Ak;

use Livewire\Component;

class DetailAk extends Component
{
    public $nisn, $nama, $jk,
           $tempat_lahir, $tgl_lahir,
           $alamat, $nama_sekolah, $no_telp;

    protected $listeners = [
        'showSiswaAk',
    ];

    public function render()
    {
        return view('livewire.admin.siswa.ak.detail-ak');
    }

    public function showSiswaAk($siswaID)
    {
        $this->nisn         = $siswaID['nisn'];
        $this->nama         = $siswaID['nama'];
        $this->jk           = $siswaID['jk'];
        $this->tempat_lahir = $siswaID['tempat_lahir'];
        $this->tgl_lahir    = $siswaID['tgl_lahir'];
        $this->alamat       = $siswaID['alamat'];
        $this->nama_sekolah = $siswaID['nama_sekolah'];
        $this->no_telp      = $siswaID['no_telp'];
    }

    public function disableDetail()
    {
        $this->emit('loadSiswaAk');
    }
}
