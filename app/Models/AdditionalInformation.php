<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalInformation extends Model
{
    use HasFactory;
    protected $table = 'additional_information';
    protected $fillable = ['employee_id','asuransi_kesehatan','dana_pensiun'];
}
