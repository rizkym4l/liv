<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Employee;

class EditKaryawan extends Component
{
    public $id;
    public $name;
    public $birthPlace;
    public $birthDate;
    public $nik;
    public $phoneNumber;
    public $religion;
    public $status;


    public function mount($id)
    {

  
      
  
        $karyawan = Employee::find($this->id);


        $this->name = $karyawan->name;
        $this->birthPlace = $karyawan->birth_place;
        $this->birthDate = $karyawan->birth_date;
        $this->nik = $karyawan->nik;
        $this->phoneNumber = $karyawan->phone_number;
        $this->religion = $karyawan->religion;
        $this->status = $karyawan->status;
        $this->id = $id;
    }
    public function render()
    {

        $karyawan = Employee::find($this->id);

        return view(
            'livewire.edit-karyawan',
            ['karyawan' => $karyawan]
        );
    }

    public function update()
    {
        Employee::where('id', $this->id)->update([
            'name' => $this->name,
            'birth_place' => $this->birthPlace,
            'birth_date' => $this->birthDate,
            'nik' => $this->nik,
            'phone_number' => $this->phoneNumber,
            'status' => $this->status,
            'religion' => $this->religion,

        ]);
        $this->dispatch('edit');
        redirect('table')->with('success', 'success Update');
    }
}
