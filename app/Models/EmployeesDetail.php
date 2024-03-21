<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmployeesDetail extends Model
{
    use HasFactory;
    protected $table = 'employee_details';
    protected $fillable = ['employee_id','karyawan_status','salary','direct_supervisor'];






    
public function Employee(): BelongsTo
{
    return $this->belongsTo(Employee::class, 'employee_id', 'id');
}
}


