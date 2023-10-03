<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateMuestra extends Component
{

    public $open = false;
    public $type, $analysis, $date_taken, $time, $patient, $location, $state;

    protected $rules = [
        'type' => 'required',
        'analysis' => 'required|min:8|max:25',
        'date_taken' => 'required',
        'time' => 'required',
        'patient' => 'required|integer|min:100000|max:999999999',
        'location' => 'required',
        'state' => 'required',
    ];

    public function save()
    {
        $this->validate();
        $this->reset(['type','analysis', 'date_taken','time','patient','location','state']);        
        $this->emit('alert', 'La Muestra se creo correctamente');
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.create-muestra');
    }
}
