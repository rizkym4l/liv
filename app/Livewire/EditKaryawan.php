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


        $this->name = $karyawan->nama;
        $this->birthPlace = $karyawan->tempat_lahir;
        $this->birthDate = $karyawan->tanggal_lahir;
        $this->nik = $karyawan->nik;
        $this->phoneNumber = $karyawan->no_telp;
        $this->religion = $karyawan->agama;
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
            'nama' => $this->name,
            'tempat_lahir' => $this->birthPlace,
            'tanggal_lahir' => $this->birthDate,
            'nik' => $this->nik,
            'no_telp' => $this->phoneNumber,
            'status' => $this->status,
            'agama' => $this->religion,

        ]);
        $this->dispatch('edit');
        redirect('table')->with('success', 'success Update');
    }
}
