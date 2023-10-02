<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowExpirationReport extends Component
{
    public $code, $name, $fecha_ini, $fecha_end;

    public function render()
    {
        return view('livewire.show-expiration-report');
    }
}
