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
            'nama' => $this->nama,
            'jabatan' => $this->jabatan,
            'departemen' => $this->departement,
            'tanggal_bergabung' => $this->tanggalBergabung,


        ]);
        sleep(.2);

        $karyawanID = Employee::orderBy('id', 'DESC')->first()->getAttribute('id');


        EmployeesDetail::create([
            'employee_id' => $karyawanID,
            'status_karyawan' => $arrStatus[0],
            'gaji' => $arrStatus[1],
            'atasan_langsung' => $arrStatus[2],

        ]);
        sleep(.2);

        FamilyInformation::create([
            'employee_id' => $karyawanID,
            'status_perkawinan' => $arrFam[0],
            'jumlah_anak' => $arrFam[1],

        ]);
        sleep(.2);

        AdditionalInformation::create([
            'employee_id' => $karyawanID,
            'asuransi_kesehatan' => $arrAdd[0],
            'dana_pensiun' => $arrAdd[1] ,
            
        ]);
        sleep(.2);
        PerformanceInformation::create([
            'employee_id' => $karyawanID,
            'evaluasi_kinerja' => $arrPer[0],
            'penghargaan' => $arrPer[1] ,
            
        ]);




        $this->dispatch('store');
        redirect('/table')->with('success', 'User created successfully');


    }
}
