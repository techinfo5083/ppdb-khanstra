<?php

namespace App\Http\Livewire\Admin\Siswa;

use Livewire\Component;
use App\Models\Jurusan;
use App\Models\CalonSiswa;
use Illuminate\Support\Facades\DB;

class AllDataSiswa extends Component
{
    public $statusDetail = false;

    protected $listeners = [
        'loadAllSiswa'
    ];

    public function render()
    {
        $data = [
            'CalonSiswa' => DB::table('calon_siswa')
            ->join('jurusan', 'calon_siswa.id_jurusan', '=', 'jurusan.id')
            ->select('calon_siswa.*', 'jurusan.nama_jurusan')->orderBy('nama','asc')->get(),
            'semua' => CalonSiswa::all()->count(),
            'perempuan' => CalonSiswa::get()->where('jk', '=', 'P')->count(),
            'laki_laki' => CalonSiswa::get()->where('jk', '=', 'L')->count(),
        ];
        return view('livewire.admin.siswa.all-data-siswa', $data);
    }

    public function getIDSiswa($id)
    {
        $this->statusDetail = true;
        $siswaID = CalonSiswa::find($id);
        $this->emit('showSiswa', $siswaID);
    }

     public function destroy($id)
    {   
        if($id)
        {
            CalonSiswa::find($id)->delete();
        }

        $this->alert('success', 'Siswa Berhasil di Hapus!', [
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

    public function loadAllSiswa()
    {
        $this->statusDetail = false;
    }
}
