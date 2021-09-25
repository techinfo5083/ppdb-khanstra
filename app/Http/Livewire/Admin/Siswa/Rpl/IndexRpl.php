<?php

namespace App\Http\Livewire\Admin\Siswa\Rpl;

use Livewire\Component;
use App\Models\Jurusan;
use App\Models\CalonSiswa;
use Illuminate\Support\Facades\DB;

class IndexRpl extends Component
{
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

        // $coba = DB::table('calon_siswa')
        //     ->join('jurusan', 'calon_siswa.id_jurusan', '=', 'jurusan.id')
        //     ->select('calon_siswa.*', 'jurusan.nama_jurusan')
        //     ->where('kode_jurusan','RPL')
        //     ->orderBy('nama','asc')
        //     ->get();

        // dd($coba);
        return view('livewire.admin.siswa.rpl.index-rpl', $data);
    }
}
