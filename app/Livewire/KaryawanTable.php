<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Employee;

class KaryawanTable extends Component
{
protected $listener = ['store','edit'];
public  $search = '';
    public function render()
    {
        $karyawan = Employee::where('name','like','%' . $this->search . '%')->paginate(8);
        return view('livewire.karyawan-table', [
            'karyawan' => $karyawan
        ]);
    }

    public function delete($id)
    {
        $karyawan = Employee::find($id);
        $karyawan->delete();
        redirect('table')->with('success', 'Successfully deleted');
    }
    public function updatingSearch(){
        $this->reset();
    }
}
