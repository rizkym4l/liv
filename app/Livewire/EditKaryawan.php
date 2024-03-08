<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Karyawan;

class EditKaryawan extends Component
{
    public $id;
    public $nama;
    public $tempatLahir;
    public $tanggalLahir;
    public $nik;
    public $noTelp;
    public $agama;
    public $status;


    public function mount($id)
    {
        $karyawan = Karyawan::find($this->id);


        $this->nama = $karyawan->nama;
        $this->tempatLahir = $karyawan->tempat_lahir;
        $this->tanggalLahir = $karyawan->tanggal_lahir;
        $this->nik = $karyawan->nik;
        $this->noTelp = $karyawan->no_telp;
        $this->agama = $karyawan->agama;
        $this->status = $karyawan->status;
        $this->id = $id;
    }
    public function render()
    {

        $karyawan = Karyawan::find($this->id);

        return view(
            'livewire.edit-karyawan',
            ['karyawan' => $karyawan]
        );
    }

    public function update()
    {
        Karyawan::where('id', $this->id)->update([
            'nama' => $this->nama,
            'tempat_lahir' => $this->tempatLahir,
            'tanggal_lahir' => $this->tanggalLahir,
            'nik' => $this->nik,
            'no_telp' => $this->noTelp,
            'status' => $this->status,
            'agama' => $this->agama,

        ]);

        redirect('table')->with('success', 'success Update');
    }
}
