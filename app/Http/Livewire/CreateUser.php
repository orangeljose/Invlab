<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class CreateUser extends Component
{

    public $open = false;
    public $name, $email, $password;

    protected $rules = [
        'name' => 'required|min:2|max:30',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|max:12'
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        $this->reset(['open','name', 'email', 'password']);

        $this->emitTo('show-users','render');
        $this->emit('alert', 'El usuario se creo correctamente');
    }

    public function render()
    {
        return view('livewire.create-user');
    }
}
