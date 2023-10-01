<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowRequests extends Component
{
    public $code, $fecha_ini, $fecha_end;
    
    public function render()
    {
        return view('livewire.show-requests');
    }
}
