<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

use Spatie\Permission\Models\Role;

class CreateUser extends Component
{

    public $open = false;
    public $name, $email, $password, $role;

    protected $rules = [
        'name' => 'required|min:2|max:30',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6|max:12',
        'role' => 'required',
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function save(User $user)
    {
        $this->validate();
        $this->user = $user;
        $usuario = User::create([
                    'name' => $this->name,
                    'email' => $this->email,
                    'password' => bcrypt($this->password),
                ]);
        $usuario->roles()->sync($this->role);
        $this->reset(['open','name', 'email', 'password', 'role']);

        $this->emitTo('show-users','render');
        $this->emit('alert', 'El usuario se creo correctamente');
    }

    public function render()
    {
        return view('livewire.create-user', [
            'roles' => Role::all(),
        ]);
    }
}
