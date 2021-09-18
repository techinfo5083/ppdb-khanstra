<?php

namespace App\Http\Livewire\Admin\Jurusan;

use Livewire\Component;
use App\Models\Jurusan;

class CreateJurusan extends Component
{
    public $kode_jurusan;
    public $nama_jurusan;

    public function render()
    {
        return view('livewire.admin.jurusan.create-jurusan');
    }

    private function clearInput()
    {
        $this->kode_jurusan = null;
        $this->nama_jurusan = null;
    }

    public function store()
    {
        $this->validate([
            'kode_jurusan' => 'required',
            'nama_jurusan' => 'required'
        ]);

        $jurusan = Jurusan::create([
            'kode_jurusan' =>  $this->kode_jurusan,
            'nama_jurusan' => $this->nama_jurusan
        ]);
        
        $this->clearInput();
        $this->emit('loadDataJurusan', $jurusan);
        $this->alert('success', 'Jurusan Berhasil di Tambahkan!', [
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
