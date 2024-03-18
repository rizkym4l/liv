<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerformanceInformation extends Model
{
    use HasFactory;
    protected $table = 'performance_information';
    protected $fillable = ['employee_id','performance_evaluation','award'];

}
