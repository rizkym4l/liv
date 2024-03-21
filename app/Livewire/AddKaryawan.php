<?php

namespace App\Livewire;

use App\Models\AdditionalInformation;
use Livewire\Component;
use App\Models\Employee;
use App\Models\EmployeesDetail;
use App\Models\FamilyInformation;
use App\Models\PerformanceInformation;
use Illuminate\Support\Facades\Validator;

class AddKaryawan extends Component
{
    public $id;
    public $nama;
    public $jabatan;
    public $departement;
    public $tanggalBergabung;
    public $informasiKontak;
    public $informasiPekerjaan;
    public $informasiPerforma;
    public $informasiTambahan;
    public $dataKeluarga;

    public function render()
    {
        return view('livewire.add-karyawan');

    }
    protected $rules = [
        'nama' => 'required',
        'jabatan' => 'required',
        'departement' => 'required',
        'tanggalBergabung' => 'required|date',
        'informasiPekerjaan' => 'required|regex:/^([^,]*,){2}[^,]*$/',
        'dataKeluarga' => 'required|regex:/^([^,]*,){1}[^,]*$/',
        'informasiTambahan' => 'required|regex:/^([^,]*,){1}[^,]*$/',
        'informasiPerforma' => 'required|regex:/^([^,]*,){1}[^,]*$/',
    ];


    public function store()
    {
        $this->validate();

        $arrStatus = [];
        foreach (explode(',', $this->informasiPekerjaan) as $row) {
            array_push($arrStatus, $row);
        }
        $arrFam = [];
        foreach (explode(',', $this->dataKeluarga) as $ro) {
            array_push($arrFam, $ro);
        }
        $arrAdd = [];
        foreach (explode(',', $this->informasiTambahan) as $r) {
            array_push($arrAdd, $r);
        }
        $arrPer = [];
        foreach (explode(',', $this->informasiPerforma) as $o) {
            array_push($arrPer, $o);
        }




        Employee::create([
            'name' => $this->nama,
            'position' => $this->jabatan,
            'departement' => $this->departement,
            'join_date' => $this->tanggalBergabung,


        ]);
        sleep(.1);

        $karyawanID = Employee::orderBy('id', 'DESC')->first()->getAttribute('id');


        EmployeesDetail::create([
            'employee_id' => $karyawanID,
            'karyawan_status' => $arrStatus[0],
            'salary' => $arrStatus[1],
            'direct_supervisor' => $arrStatus[2],

        ]);
        sleep(.1);

        FamilyInformation::create([
            'employee_id' => $karyawanID,
            'married_status' => $arrFam[0],
            'total_children' => $arrFam[1],

        ]);
        sleep(.1);

        AdditionalInformation::create([
            'employee_id' => $karyawanID,
            'health_insurance' => $arrAdd[0],
            'pension_fund' => $arrAdd[1] ,
            
        ]);
        sleep(.1);
        PerformanceInformation::create([
            'employee_id' => $karyawanID,
            'performance_evaluation' => $arrPer[0],
            'award' => $arrPer[1] ,
            
        ]);




        $this->dispatch('store');
        redirect('/table')->with('success', 'User created successfully');


    }
}
