<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\CalonSiswa;
use App\Models\Jurusan;
use Illuminate\Support\Facades\DB;

class PieChart extends Component
{
    protected $listeners = [
        'loadDataSiswa'
    ];

    public function render()
    {
        $data = [
            'rpl'       => CalonSiswa::get()->where('id_jurusan', '=', '1')->count(),
            'om'        => CalonSiswa::get()->where('id_jurusan', '=', '2')->count(),
            'ak'        => CalonSiswa::get()->where('id_jurusan', '=', '3')->count(),
            'tsm'       => CalonSiswa::get()->where('id_jurusan', '=', '4')->count()
            
        ];

        return view('livewire.admin.pie-chart', $data);
    }

    public function loadDataSiswa($CalonSiswa)
    {

    }
}
