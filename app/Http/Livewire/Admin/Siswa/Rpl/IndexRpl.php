<?php

namespace App\Http\Livewire\Admin\Siswa\Rpl;

use Livewire\Component;
use App\Models\Jurusan;
use App\Models\CalonSiswa;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class IndexRpl extends Component
{
    use WithPagination;

    public $paginate = 5;
    public $search;
    public $statusDetail = false;

    protected $listeners = [
        'loadSiswaRpl'
    ];

    public function render()
    {
        $CalonSiswa = $this->search === null ?
                      DB::table('calon_siswa')
                        ->join('jurusan', 'calon_siswa.id_jurusan', '=', 'jurusan.id')
                        ->select('calon_siswa.*', 'jurusan.nama_jurusan')
                        ->where('kode_jurusan','RPL')
                        ->orderBy('nama','asc')
                        ->paginate($this->paginate) :
                        DB::table('calon_siswa')
                        ->join('jurusan', 'calon_siswa.id_jurusan', '=', 'jurusan.id')
                        ->select('calon_siswa.*', 'jurusan.nama_jurusan')
                        ->where('kode_jurusan','RPL')
                        ->where('nama', 'like', '%' . $this->search . '%')
                        ->orderBy('nama','asc')
                        ->paginate($this->paginate);
        $data = [
            'CalonSiswa' => $CalonSiswa,
            'semua'     => DB::table('calon_siswa')
                        ->join('jurusan', 'calon_siswa.id_jurusan', '=', 'jurusan.id')
                        ->select('calon_siswa.jk')
                        ->where('jurusan.kode_jurusan', 'RPL')
                        ->count(),
            'perempuan' => DB::table('calon_siswa')
                        ->join('jurusan', 'calon_siswa.id_jurusan', '=', 'jurusan.id')
                        ->select('calon_siswa.jk')
                        ->where('jk', 'L')
                        ->where('jurusan.kode_jurusan', 'RPL')
                        ->count(),
            'laki_laki' => DB::table('calon_siswa')
                        ->join('jurusan', 'calon_siswa.id_jurusan', '=', 'jurusan.id')
                        ->select('calon_siswa.jk')
                        ->where('jk', 'P')
                        ->where('jurusan.kode_jurusan', 'RPL')
                        ->count(),
            'currentPage' => $CalonSiswa->currentPage()
        ];

        return view('livewire.admin.siswa.rpl.index-rpl', $data);
    }

    public function getIDSiswa($id)
    {
        $this->statusDetail = true;
        $siswaID = CalonSiswa::find($id);
        $this->emit('showSiswaRpl', $siswaID);
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

    public function loadSiswaRpl()
    {
        $this->statusDetail = false;
    }
}
