<?php
namespace App\Http\Livewire\Multistepform;

use Livewire\Component;

class StepOne extends Component
{
    public $bloodType;
    public $rhFactor;
    public $cbc;
    public $rubella;
    public $hepatitisBC;
    public $hiv;
    public $syphilis;
    public $bloodSugar;

    public function render()
    {
        return view('livewire.multistepform.step-one');
    }

    public function resetForm()
    {
        $this->reset([
            'bloodType',
            'rhFactor',
            'cbc',
            'rubella',
            'hepatitisBC',
            'hiv',
            'syphilis',
            'bloodSugar',
        ]);
    }
}
