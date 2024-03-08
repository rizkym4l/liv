<?php

namespace App\Livewire;

use App\Models\Karyawan;
use Livewire\Component;

class AddKaryawan extends Component
{
   public $nama;
   public $tempatLahir;
   public $tanggalLahir;
   public $nik;
   public $noTelp;
   public $agama;
   public $status;
    public function render()
    {
        return view('livewire.add-karyawan');
   
    }


public function store()
{

  
    Karyawan::create([
'nama' => $this->nama,
'tempat_lahir' => $this->tempatLahir,
'tanggal_lahir' => $this->tanggalLahir,
'nik' => $this->nik,
'no_telp' => $this->noTelp,
'status' => $this->status,
'agama' => $this->agama,

    ]);
    $this->nama = null;
    $this->tempatLahir = null;
    $this->tanggalLahir = null;
    $this->nik = null;
    $this->noTelp = null;
    $this->status = null;
    $this->agama = null;

  redirect('/')->with('success', 'User created successfully');


}
}
