<?php

namespace App\Livewire;

use App\Models\AdditionalInformation;
use App\Models\Employee;
use App\Models\EmployeesDetail;
use App\Models\FamilyInformation;
use App\Models\PerformanceInformation;
use Livewire\Component;

class DetailKaryawan extends Component
{
    public $karyawan;
    public $kesehatanKaryawan;
    public $kinerjaKaryawan;
    public $informasiTambahan;
    public function mount($id)
    {
        $this->karyawan = EmployeesDetail::with('Employee')->find($id);
        $this->kesehatanKaryawan = FamilyInformation::with('Employee')->find($id);
        $this->kinerjaKaryawan = PerformanceInformation::with('Employee')->find($id);
        $this->informasiTambahan = AdditionalInformation::with('Employee')->find($id);
      

    }
    
    public function render()
    {
        return view('livewire.detail-karyawan',[
           'karyawan' =>  $this->karyawan,
           'kesehatanKaryawan' => $this->kesehatanKaryawan,
           'kinerjaKaryawan' => $this->kinerjaKaryawan,
           'informasiTambahan' => $this->informasiTambahan,
        ]);
    }
}
