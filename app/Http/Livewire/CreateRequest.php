<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateRequest extends Component
{

    public $open = false;
    public $name, $quantity, $department;

    protected $rules = [
        'name' => 'required',
        'quantity' => 'required|integer',
        'department' => 'required',
    ];

    public function save()
    {
        $this->validate();
        $this->reset(['name','quantity', 'department']);        
        $this->emit('alert', 'La Solicitud se creo correctamente');
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.create-request');
    }
}
