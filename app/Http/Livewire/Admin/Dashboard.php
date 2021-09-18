<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\CalonSiswa;
use App\Models\Jurusan;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class Dashboard extends Component
{
    use WithPagination;
    public $statusUpdate = false;

    
    protected $listeners = [
        'loadDataSiswa',
        'loadDataJurusan',
        'statusUpdate'
    ];
    public function render()
    {
        $data = [
            'CalonSiswa' => DB::table('calon_siswa')
            ->join('jurusan', 'calon_siswa.id_jurusan', '=', 'jurusan.id')
            ->select('calon_siswa.*', 'jurusan.nama_jurusan')->latest()->paginate(5),
            'jurusan'   => Jurusan::all(),
            'rpl'       => CalonSiswa::get()->where('id_jurusan', '=', '1')->count(),
            'om'        => CalonSiswa::get()->where('id_jurusan', '=', '2')->count(),
            'ak'        => CalonSiswa::get()->where('id_jurusan', '=', '3')->count(),
            'tsm'       => CalonSiswa::get()->where('id_jurusan', '=', '4')->count()
            
        ];
        // $rpl = CalonSiswa::get()->where('id_jurusan', '=', '1')->count();
        // dd($rpl);
        return view('livewire.admin.dashboard', $data);
    }

    public function loadDataSiswa($CalonSiswa)
    {

    }

    public function loadDataJurusan($jurusan)
    {

    }

    public function statusUpdate()
    {
        $this->statusUpdate = false;
    }

    public function getIDJurusan($id)
    {
        $this->statusUpdate = true;
        $jurusan = Jurusan::find($id);
        $this->emit('getJurusan', $jurusan);
    }

    public function destroy($id)
    {   
        if($id)
        {
            Jurusan::find($id)->delete();
        }

        $this->alert('success', 'Jurusan Berhasil di Hapus!', [
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
