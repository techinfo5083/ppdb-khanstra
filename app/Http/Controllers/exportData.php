<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Models\CalonSiswa;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;

class exportData extends Controller
{
    public function exportAllSiswa()
    {
        $data = [
            'DataSiswa' => DB::table('calon_siswa')
            ->join('jurusan', 'calon_siswa.id_jurusan', '=', 'jurusan.id')
            ->select('calon_siswa.*', 'jurusan.nama_jurusan')->orderBy('nama','asc')->get()
        ];

        $pdf = PDF::loadView('admin.pdf.allSiswa', $data);
        return $pdf->stream();
        
    }

    public function exportSiswaRpl()
    {
        $data = [
            'CalonSiswa' => DB::table('calon_siswa')
                        ->join('jurusan', 'calon_siswa.id_jurusan', '=', 'jurusan.id')
                        ->select('calon_siswa.*', 'jurusan.nama_jurusan')
                        ->where('kode_jurusan','RPL')
                        ->orderBy('nama','asc')
                        ->get(),
        ];

        $pdf = PDF::loadView('admin.pdf.siswaRpl', $data);
        return $pdf->stream();
        
    }

    public function exportSiswaOm()
    {
        $data = [
            'CalonSiswa' => DB::table('calon_siswa')
                        ->join('jurusan', 'calon_siswa.id_jurusan', '=', 'jurusan.id')
                        ->select('calon_siswa.*', 'jurusan.nama_jurusan')
                        ->where('kode_jurusan','OM')
                        ->orderBy('nama','asc')
                        ->get(),
        ];

        $pdf = PDF::loadView('admin.pdf.siswaOm', $data);
        return $pdf->stream();
        
    }

    public function exportSiswaAk()
    {
        $data = [
            'CalonSiswa' => DB::table('calon_siswa')
                        ->join('jurusan', 'calon_siswa.id_jurusan', '=', 'jurusan.id')
                        ->select('calon_siswa.*', 'jurusan.nama_jurusan')
                        ->where('kode_jurusan','AK')
                        ->orderBy('nama','asc')
                        ->get(),
        ];

        $pdf = PDF::loadView('admin.pdf.siswaAk', $data);
        return $pdf->stream();
        
    }

    public function exportSiswaTsm()
    {
        $data = [
            'CalonSiswa' => DB::table('calon_siswa')
                        ->join('jurusan', 'calon_siswa.id_jurusan', '=', 'jurusan.id')
                        ->select('calon_siswa.*', 'jurusan.nama_jurusan')
                        ->where('kode_jurusan','TSM')
                        ->orderBy('nama','asc')
                        ->get(),
        ];

        $pdf = PDF::loadView('admin.pdf.siswaTsm', $data);
        return $pdf->stream();
        
    }
}
