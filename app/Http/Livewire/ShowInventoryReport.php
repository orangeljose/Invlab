<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowInventoryReport extends Component
{
    public $sort = 'id';
    public $direction = 'desc';

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
    public function render()
    {
        return view('livewire.show-inventory-report');
    }
}
