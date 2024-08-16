<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id', 'record_type', 'description'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
