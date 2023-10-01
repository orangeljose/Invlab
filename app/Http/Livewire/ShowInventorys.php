<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowInventorys extends Component
{
    public $code, $name, $batch, $quantity;

    public function render()
    {
        return view('livewire.show-inventorys');
    }
}
