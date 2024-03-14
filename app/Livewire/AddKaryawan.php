<?php

namespace App\Livewire;

use App\Models\Employee;
use Livewire\Component;

class AddKaryawan extends Component
{
    public $id;
    public $name;
    public $birthPlace;
    public $birthDate;
    public $nik;
    public $phoneNumber;
    public $religion;
    public $status;
    public function render()
    {
        return view('livewire.add-karyawan');

    }


    public function store()
    {


        Employee::create([
            'name' => $this->name,
            'birth_place' => $this->birthPlace,
            'birth_date' => $this->birthDate,
            'nik' => $this->nik,
            'phone_number' => $this->phoneNumber,
            'status' => $this->status,
            'religion' => $this->religion,

        ]);
        $this->name = null;
        $this->birthPlace = null;
        $this->birthDate = null;
        $this->nik = null;
        $this->phoneNumber = null;
        $this->status = null;
        $this->religion = null;

        $this->dispatch('store');
        redirect('/table')->with('success', 'User created successfully');


    }
}
