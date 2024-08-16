<?php

namespace App\Http\Livewire\Patients;

use Livewire\Component;
use App\Models\Patient;

class MultiStepForm extends Component
{
    public $patientId;
    public $patient;
    public $step = 1;
    public $formData = [
        'first_name' => '',
        'last_name' => '',
        'email' => '',
        'address' => '',
        // Add more fields as needed
    ];

    public function mount($id)
    {
        $this->patientId = $id;
        $this->patient = Patient::findOrFail($this->patientId);

        // Pre-fill the form with patient data
        $this->formData['first_name'] = $this->patient->first_name;
        $this->formData['last_name'] = $this->patient->last_name;
        // Add more pre-filled fields as needed
    }

    public function nextStep()
    {
        $this->validateStep();
        $this->step++;
    }

    public function previousStep()
    {
        $this->step--;
    }

    public function submit()
    {
        $this->validateStep();

        // Update the patient data in the database
        $this->patient->update($this->formData);

        session()->flash('message', 'Form successfully submitted.');
        return redirect()->route('form.success'); // Redirect to a success page
    }

    public function validateStep()
    {
        if ($this->step == 1) {
            $this->validate([
                'formData.first_name' => 'required|string|max:255',
                'formData.last_name' => 'required|string|max:255',
            ]);
        } elseif ($this->step == 2) {
            $this->validate([
                'formData.email' => 'required|email|max:255',
                'formData.address' => 'required|string|max:255',
            ]);
        }
        // Add more validation for other steps
    }

    public function render()
    {
        return view('livewire.patients.multi-step-form');
    }
}

