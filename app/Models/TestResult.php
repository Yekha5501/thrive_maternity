<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id', 'test_type', 'test_date', 'result'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
