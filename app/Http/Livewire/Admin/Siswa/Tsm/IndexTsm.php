<?php

namespace App\Http\Livewire\Admin\Siswa\Tsm;

use Livewire\Component;
use App\Models\Jurusan;
use App\Models\CalonSiswa;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class IndexTsm extends Component
{
    use WithPagination;

    public $paginate = 5;
    public $search;
    public $statusDetail = false;

    protected $listeners = [
        'loadSiswaTsm'
    ];

    public function render()
    {
        $CalonSiswa = $this->search === null ?
                      DB::table('calon_siswa')
                        ->join('jurusan', 'calon_siswa.id_jurusan', '=', 'jurusan.id')
                        ->select('calon_siswa.*', 'jurusan.nama_jurusan')
                        ->where('kode_jurusan','TSM')
                        ->orderBy('nama','asc')
                        ->paginate($this->paginate) :
                        DB::table('calon_siswa')
                        ->join('jurusan', 'calon_siswa.id_jurusan', '=', 'jurusan.id')
                        ->select('calon_siswa.*', 'jurusan.nama_jurusan')
                        ->where('kode_jurusan','TSM')
                        ->orderBy('nama','asc')
                        ->where('nama', 'like', '%' . $this->search . '%')
                        ->orderBy('nama','asc')
                        ->paginate($this->paginate);
        $data = [
            'CalonSiswa' => $CalonSiswa,
            'semua'     => DB::table('calon_siswa')
                        ->join('jurusan', 'calon_siswa.id_jurusan', '=', 'jurusan.id')
                        ->select('calon_siswa.jk')
                        ->where('jurusan.kode_jurusan', 'TSM')
                        ->count(),
            'perempuan' => DB::table('calon_siswa')
                        ->join('jurusan', 'calon_siswa.id_jurusan', '=', 'jurusan.id')
                        ->select('calon_siswa.jk')
                        ->where('jk', 'L')
                        ->where('jurusan.kode_jurusan', 'TSM')
                        ->count(),
            'laki_laki' => DB::table('calon_siswa')
                        ->join('jurusan', 'calon_siswa.id_jurusan', '=', 'jurusan.id')
                        ->select('calon_siswa.jk')
                        ->where('jk', 'P')
                        ->where('jurusan.kode_jurusan', 'TSM')
                        ->count(),
            'currentPage' => $CalonSiswa->currentPage()
        ];
        return view('livewire.admin.siswa.tsm.index-tsm', $data);
    }

    public function getIDSiswa($id)
    {
        $this->statusDetail = true;
        $siswaID = CalonSiswa::find($id);
        $this->emit('showSiswaTsm', $siswaID);
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

    public function loadSiswaTsm()
    {
        $this->statusDetail = false;
    }
}
