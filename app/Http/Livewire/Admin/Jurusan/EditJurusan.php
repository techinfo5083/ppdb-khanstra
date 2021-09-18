<?php

namespace App\Http\Livewire\Admin\Jurusan;

use Livewire\Component;
use App\Models\Jurusan;

class EditJurusan extends Component
{
    public $kode_jurusan;
    public $nama_jurusan;
    public $id_jurusan;

    protected $listeners = [
        'getJurusan'
    ];

    public function render()
    {
        return view('livewire.admin.jurusan.edit-jurusan');
    }

    public function getJurusan($jurusan)
    {
        $this->kode_jurusan = $jurusan['kode_jurusan'];
        $this->nama_jurusan = $jurusan['nama_jurusan'];
        $this->id_jurusan   = $jurusan['id'];
    }

    private function clearInput()
    {
        $this->kode_jurusan = null;
        $this->nama_jurusan = null;
    }

    public function update()
    {
        $this->validate([
            'kode_jurusan' => 'required',
            'nama_jurusan' => 'required'
        ]);

        if($this->id_jurusan) {
            $jurusan = Jurusan::find($this->id_jurusan);
            $jurusan->update([
                'kode_jurusan' =>  $this->kode_jurusan,
                'nama_jurusan' => $this->nama_jurusan,
            ]);
        }
        
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
        $this->statusUpdate();
    }

    public function statusUpdate()
    {
        $this->emit('statusUpdate');
    }
}