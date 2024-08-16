<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RecentPatientsTable extends Component
{
    public $patients = [];

    public function mount()
    {
        // Static data for recent patients
        $this->patients = [
            ['name' => 'Jane Doe', 'visit_date' => '2024-07-10', 'status' => 'Completed', 'notes' => 'Routine checkup'],
            ['name' => 'Mary Smith', 'visit_date' => '2024-07-12', 'status' => 'Pending', 'notes' => 'Follow-up visit'],
            ['name' => 'Anna Johnson', 'visit_date' => '2024-07-14', 'status' => 'Completed', 'notes' => 'Ultrasound'],
            ['name' => 'Emily Davis', 'visit_date' => '2024-07-15', 'status' => 'Scheduled', 'notes' => 'New patient'],
        ];
    }

    public function render()
    {
        return view('livewire.recent-patients-table');
    }
}
