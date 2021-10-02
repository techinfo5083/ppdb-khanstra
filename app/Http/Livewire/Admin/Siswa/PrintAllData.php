<?php

namespace App\Http\Livewire\Admin\Siswa;

use Livewire\Component;
use App\Models\Jurusan;
use App\Models\CalonSiswa;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class PrintAllData extends Component
{
    public function render()
    {
        $data = [
            'DataSiswa' => DB::table('calon_siswa')
            ->join('jurusan', 'calon_siswa.id_jurusan', '=', 'jurusan.id')
            ->select('calon_siswa.*', 'jurusan.nama_jurusan')->orderBy('nama','asc')->get()
        ];

        $pdf = PDF::loadView('livewire/admin/siswa/print-all-data', $data);
        return $pdf->stream();
        // return view('livewire.admin.siswa.print-all-data', $data);
    }

    // public function exportPDF()
    // {
    //     $data = [
    //         'DataSiswa' => DB::table('calon_siswa')
    //         ->join('jurusan', 'calon_siswa.id_jurusan', '=', 'jurusan.id')
    //         ->select('calon_siswa.*', 'jurusan.nama_jurusan')->orderBy('nama','asc')->get()
    //     ];

    //     $pdf = PDF::loadView('livewire.admin.siswa.print-all-data', $data);
        
    //     return $pdf->download('user.pdf');
    // }
}
