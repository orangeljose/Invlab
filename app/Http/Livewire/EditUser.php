<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Livewire\Component;

class EditUser extends Component
{

    public $open = false;
    public $user;

    public function mount(User $user){
        $this->user = $user;
    }    
    
    protected $rules = [
        'user.name' => 'required|min:2|max:30',
        'user.email' => 'required|email|unique:users,email',      
        'user.password' => 'required|min:6|max:12',
    ];

    public function render()
    {
        return view('livewire.edit-user');
    }
}
