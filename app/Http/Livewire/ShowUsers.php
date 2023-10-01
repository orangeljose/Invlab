<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class ShowUsers extends Component
{
    public $code, $name;
    public $sort = 'id';
    public $direction = 'desc';

    public function render()
    {

        $users = User::where('id','like','%' . $this->code . '%')
        ->where('name','like','%' . $this->name . '%')
        ->orderBy($this->sort, $this->direction)
        ->paginate(5);

        return view('livewire.show-users', compact('users'));
    }
}
