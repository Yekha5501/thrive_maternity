<?php

namespace App\Http\Livewire\Multistepform;

use Livewire\Component;

class StepTwo extends Component
{
    public $urineCulture;
    public $proteinLevels;
    public $glucoseLevels;
    public $papSmear;

    public function render()
    {
        return view('livewire.multistepform.step-two');
    }

    public function resetForm()
    {
        $this->reset([
            'urineCulture',
            'proteinLevels',
            'glucoseLevels',
            'papSmear',
        ]);
    }
}
