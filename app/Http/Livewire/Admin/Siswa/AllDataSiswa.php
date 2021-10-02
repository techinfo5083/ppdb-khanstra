<?php

namespace App\Http\Livewire\Admin\Siswa;

use Livewire\Component;
use App\Models\Jurusan;
use App\Models\CalonSiswa;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class AllDataSiswa extends Component
{
    use WithPagination;

    public $paginate = 5;
    public $search;
    public $statusDetail = false;

    protected $listeners = [
        'loadAllSiswa'
    ];

    public function render()
    {
        $CalonSiswa = $this->search === null ?
                      DB::table('calon_siswa')
                    ->join('jurusan', 'calon_siswa.id_jurusan', '=', 'jurusan.id')
                    ->select('calon_siswa.*', 'jurusan.nama_jurusan')->orderBy('nama','asc')
                    ->paginate($this->paginate) :
                    DB::table('calon_siswa')
                    ->join('jurusan', 'calon_siswa.id_jurusan', '=', 'jurusan.id')
                    ->select('calon_siswa.*', 'jurusan.nama_jurusan')->orderBy('nama','asc')
                    ->where('nama', 'like', '%' . $this->search . '%')
                    ->orderBy('nama','asc')
                    ->paginate($this->paginate);
        $data = [
            'CalonSiswa' => $CalonSiswa,
            'semua' => CalonSiswa::all()->count(),
            'perempuan' => CalonSiswa::get()->where('jk', '=', 'P')->count(),
            'laki_laki' => CalonSiswa::get()->where('jk', '=', 'L')->count(),
            'currentPage' => $CalonSiswa->currentPage()
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
