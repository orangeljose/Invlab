<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateInventory extends Component
{

    public $open = false;
    public $open_egreso = false;
    public $name, $due_date, $batch, $quantity, $action, $reason, $provider, $location;

    protected $rules = [
        'name' => 'required',
        'due_date' => 'required',
        'batch' => 'required',
        'quantity' => 'required|integer',
        'action' => 'required',
        'reason' => '',
        'provider' => 'required',
        'location' => 'required',
    ];

    public function save()
    {
        $this->validate();
        $this->reset(['name', 'due_date', 'batch', 'quantity', 'action', 'reason', 'provider','location']);      
        if($this->action == 0){
            $this->emit('alert', 'El Ingreso se proceso correctamente');
        }else{
            $this->emit('alert', 'El Egreso se proceso correctamente');
        }
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.create-inventory');
    }
}
