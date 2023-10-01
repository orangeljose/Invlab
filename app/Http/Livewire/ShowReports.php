<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowReports extends Component
{

    public $code, $fecha_ini, $fecha_end;
    
    public function render()
    {
        return view('livewire.show-reports');
    }
}
