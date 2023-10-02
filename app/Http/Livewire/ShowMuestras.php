<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowMuestras extends Component
{

    public $code, $name, $ced;
    public $open = false;

    public function render()
    {
        return view('livewire.show-muestras');
    }
}
