<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\CalonSiswa;
use Illuminate\Support\Facades\Auth;

class Pengumuman extends Component
{
    public function render()
    {
        $data = [
            'id_user' => CalonSiswa::select('id_user')->where('id_user',auth()->user()->id)->get(),
        ];
        return view('livewire.user.pengumuman', $data);
    }
}
