<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyInformation extends Model
{
    use HasFactory;
    protected $table = 'family_information';
    protected $fillable = ['employee_id', 'status_perkawinan', 'jumlah_anak'];
}
