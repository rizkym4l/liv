<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $fillable = ['nama','tempat_lahir','tanggal_lahir','nik', 'no_telp','status','agama'];
}
