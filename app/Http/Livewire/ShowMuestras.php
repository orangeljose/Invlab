<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowMuestras extends Component
{

    public $code, $name, $ced;
    public $type, $analysis, $date_taken, $time, $patient, $location, $state;
    public $open = false;
    public $sort = 'id';
    public $direction = 'desc';
    public $open_edit = false;

    public function order($sort)
    {
        if($sort){
            if($this->sort == $sort){

                if($this->direction == 'desc'){
                    $this->direction = 'asc';
                }else{
                    $this->direction = 'desc';
                }
    
            }else{
                $this->sort = $sort;
                $this->direction = 'desc';
            }

        }
    }

    public function edit()
    {
        $this->open_edit = true;
    }

    public function update(){

        $this->reset(['open_edit']);
        $this->emitTo('show-muestras','render');
        $this->emit('alert', 'La Muestra se actualizó correctamente');
    }

    public function render()
    {
        return view('livewire.show-muestras');
    }
}
