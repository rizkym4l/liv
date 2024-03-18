<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeesDetail extends Model
{
    use HasFactory;
    protected $table = 'employee_details';
    protected $fillable = ['employee_id','karyawan_status','salary','direct_supervisor'];
}
