<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateUser extends Component
{

    public $open = false;
    
    public function render()
    {
        return view('livewire.create-user');
    }
}
