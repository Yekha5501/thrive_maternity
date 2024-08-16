<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TotalPatientsCard extends Component
{
    public $totalPatients;

    public function mount()
    {
        // Set a static number for the total number of patients
        $this->totalPatients = 150; // Replace 150 with your desired static number
    }

    public function render()
    {
        return view('livewire.total-patients-card');
    }
}
