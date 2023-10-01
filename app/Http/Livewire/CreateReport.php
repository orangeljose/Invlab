<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateReport extends Component
{

    public $open = false;

    public function save()
    {      
        $this->emit('alert', 'El reporte se genero correctamente');
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.create-report');
    }
}
