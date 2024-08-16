<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TotalStaffsCard extends Component
{
    public $totalStaffs;

    public function mount()
    {
        // Set a static number for the total number of staff
        $this->totalStaffs = 50; // Replace 50 with your desired static number
    }

    public function render()
    {
        return view('livewire.total-staffs-card');
    }
}
