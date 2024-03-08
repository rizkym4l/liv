<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Karyawan;

class KaryawanTable extends Component
{

    public function render()
    {
        $karyawan = Karyawan::paginate(8);
        return view('livewire.karyawan-table',[
            'karyawan' => $karyawan
        ]);
    }

    public function delete($id)
    {
    $karyawan = Karyawan::find($id);
    $karyawan->delete();
   redirect('table')->with('success', 'Successfully deleted')   ;
    }
}
