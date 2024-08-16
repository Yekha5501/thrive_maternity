<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UpcomingAppointmentsCard extends Component
{
    public $upcomingAppointments;

    public function mount()
    {
        // Set a static number for upcoming appointments
        $this->upcomingAppointments = 25; // Replace 25 with your desired static number
    }

    public function render()
    {
        return view('livewire.upcoming-appointments-card');
    }
}
