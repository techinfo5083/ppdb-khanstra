<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\CalonSiswa;
use App\Models\Jurusan;

class CreatePendaftaran extends Component
{
    public $nisn;
    public $nama;
    public $jk;
    public $alamat;
    public $tempat_lahir;
    public $tgl_lahir;
    public $nama_sekolah;
    public $id_jurusan;
    public $no_telp;

    public function render()
    {
        $data = [
            'jurusan' => Jurusan::all(),
        ];
        
        return view('livewire.user.create-pendaftaran', $data);
    }

    private function clearInput()
    {
        $this->nisn = null;
        $this->nisn = null;
        $this->jk = null;
        $this->alamat = null;
        $this->tempat_lahir = null;
        $this->tgl_lahir = null;
        $this->nama_sekolah = null;
        $this->id_jurusan = null;
        $this->no_telp = null;
    }

    public function store()
    {
        $this->validate([
            'nisn'          => 'required|max:15',
            'nama'          => 'required',
            'jk'            => 'required',
            'alamat'        => 'required',
            'tempat_lahir'  => 'required',
            'tgl_lahir'     => 'required',
            'nama_sekolah'  => 'required',
            'id_jurusan'    => 'required',
            'no_telp'       => 'required|max:13'                
        ]);

        $CalonSiswa = CalonSiswa::create([
            'nisn'          => $this->nisn,
            'nama'          => $this->nama,
            'jk'            => $this->jk,
            'alamat'        => $this->alamat,
            'tempat_lahir'  => $this->tempat_lahir,
            'tgl_lahir'     => $this->tgl_lahir,
            'nama_sekolah'  => $this->nama_sekolah,
            'id_jurusan'    => $this->id_jurusan,
            'no_telp'       => $this->no_telp
        ]);
        
        $this->clearInput();
        $this->alert('success', 'Data Berhasil di Tambahkan!', [
            'position' =>  'top', 
            'timer' =>  5000,  
            'toast' =>  true, 
            'text' =>  '', 
            'confirmButtonText' =>  'Ok', 
            'cancelButtonText' =>  'Cancel', 
            'showCancelButton' =>  false, 
            'showConfirmButton' =>  false, 
        ]);
        // return redirect()->to('/pendaftaram');



    }

}
