<?php

namespace App\Http\Livewire\Multistepform;

use Livewire\Component;

class StepThree extends Component
{
    public $geneticTesting;
    public $bloodPressure;
    public $weight;
    public $pelvicExam;
    public $uterusMeasurement;
    public $otherBloodPressure;
    public $baselineWeight;
    public $height;
    public $mentalHealth;
    public $lifestyleCounseling;

    public function render()
    {
        return view('livewire.multistepform.step-three');
    }
}
