<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AdditionalInformation extends Model
{
    use HasFactory;
    protected $table = 'additional_information';
    protected $fillable = ['employee_id','health_insurance','pension_fund'];


      public function Employee(): BelongsTo
{
    return $this->belongsTo(Employee::class, 'employee_id', 'id');
}
}
