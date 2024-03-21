<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FamilyInformation extends Model
{
    use HasFactory;
    protected $table = 'family_information';
    protected $fillable = ['employee_id', 'married_status', 'total_children'];


    public function Employee(): BelongsTo
{
    return $this->belongsTo(Employee::class, 'employee_id', 'id');
}
}
