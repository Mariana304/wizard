<?php

namespace App\Livewire;

use Livewire\Component;

class FormWizard extends Component
{
    public $step = 1;
    public $data = [
        1 => ['nombre' => ''],
        2 => ['summary' => ''],
        3 => ['precio' => ''],
    ];

    public $success = false;

    public function render()
    {
        return view('livewire.form-wizard');
    }

    public function nextStep()
    {
        $step = $this->step;

        if ($step === 1) {
            $this->validate([
                'data.1.nombre' => 'required',
            ]);
        } elseif ($step === 2) {
            $this->validate([
                'data.2.summary' => 'required',
            ]);
        } elseif ($step === 3) {
            $this->validate([
                'data.3.precio' => 'required',
            ]);
        }

        if ($this->step < 3) {
            $this->step++;
        }

    }

    public function previousStep()
    {
        if ($this->step > 1) {
            $this->step--;
        }
    }

   
    public function save(){
        $this->validate([
            'data.1.nombre' => 'required',
            'data.2.summary' => 'required',
            'data.3.precio' => 'required',
        ]);

        $this->success = true;  
    } 
}
