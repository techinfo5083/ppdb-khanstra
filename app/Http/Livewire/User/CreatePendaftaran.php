<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\CalonSiswa;
use App\Models\Jurusan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class CreatePendaftaran extends Component
{
    public $nisn, $nama, $jk, $alamat, $tempat_lahir;
    public $tgl_lahir, $nama_sekolah, $id_jurusan, $no_telp;
    public $confirmForAdmin = false;

    public function render()
    {
        $data = [
            'jurusan' => Jurusan::all(),
            'id_user' => CalonSiswa::select('id_user')->where('id_user',auth()->user()->id)->get(),
            'id'      => auth()->user()->id, 
        ];
        
        // $id_user = CalonSiswa::select('nama')->where('id_user',auth()->user()->id)->get();
        // dd($id_user);
        return view('livewire.user.create-pendaftaran', $data);
    }

    private function clearInput()
    {
        $this->nisn = null;
        $this->nama = null;
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
            'nisn'          => 'required|unique:calon_siswa|max:15|min:10',
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
            'id_user'       => auth()->user()->id,
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
        $this->emit('loadDataSiswa', $CalonSiswa);
        $this->alert('success', 'Data Berhasil di Tambahkan!', [
            'position' =>  'top', 
            'timer' =>  3000,  
            'toast' =>  true, 
            'text' =>  '', 
            'confirmButtonText' =>  'Ok', 
            'cancelButtonText' =>  'Cancel', 
            'showCancelButton' =>  false, 
            'showConfirmButton' =>  false, 
        ]);

    }

    public function confirmUpdate($id)
    {
        $this->confirmForAdmin = true;
        $user = $id;
        $this->emit('confirmUpdateUser', $user);
        $this->alert('success', 'Berhasil melakukan pengajuan!', [
            'position' =>  'top', 
            'timer' =>  3000,  
            'toast' =>  true, 
            'text' =>  '', 
            'confirmButtonText' =>  'Ok', 
            'cancelButtonText' =>  'Cancel', 
            'showCancelButton' =>  false, 
            'showConfirmButton' =>  false, 
        ]);
    }

}
