<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PerformanceInformation extends Model
{
    use HasFactory;
    protected $table = 'performance_information';
    protected $fillable = ['employee_id','performance_evaluation','award'];


     public function Employee(): BelongsTo
{
    return $this->belongsTo(Employee::class, 'employee_id', 'id');
}

}
