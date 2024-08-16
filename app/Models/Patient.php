<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'dob', 'gender', 'contact_number', 'email', 'address'
    ];

    public function records()
    {
        return $this->hasMany(PatientRecord::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function medicalHistories()
    {
        return $this->hasMany(MedicalHistory::class);
    }

    public function testResults()
    {
        return $this->hasMany(TestResult::class);
    }
}
