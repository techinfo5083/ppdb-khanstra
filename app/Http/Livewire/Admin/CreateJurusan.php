<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class CreateJurusan extends Component
{
    public $kode_jurusan;
    public $nama_jurusan;

    public function render()
    {
        return view('livewire.admin.create-jurusan');
    }

    public function store()
    {
        $this->validate([
            'kode_jurusan' => 'required',
            'nama_jurusan' => 'required'
        ]);

        
    }
}
