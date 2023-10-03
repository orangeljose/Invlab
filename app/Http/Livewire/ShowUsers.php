<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

use Spatie\Permission\Models\Role;

class ShowUsers extends Component
{

    use WithPagination;

    public $code, $name;
    public $sort = 'id';
    public $direction = 'desc';

    public $open_edit = false;

    protected $rules = [
        'user.name' => 'required|min:2|max:30',
        'user.email' => 'email',
        'user.password' => '',
        'user.role' => 'required',
    ];

    protected $listeners = ['render', 'delete'];

    public function updating(){
        $this->resetPage();
    }

    public function delete(User $user){
        $user->delete();
    }

    public function render()
    {

        $roles = Role::all();
        $this->roles = $roles;

        $users = User::where('id','like','%' . $this->code . '%')
        ->where('name','like','%' . $this->name . '%')
        // ->orWhere('email','like','%' . $this->name . '%')
        ->orderBy($this->sort, $this->direction)
        ->paginate(5);

        return view('livewire.show-users', compact('users', 'roles'));
    }

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

    public function edit(User $user)
    {
        $this->user = $user;
        foreach($user->roles as $role) {
            $this->user->role = $role->id;
        }
        $this->open_edit = true;
    }

    public function update(){

        $this->validate();
        $usuario = User::where('email',$this->user->email)->first();
        $usuario->name = $this->user->name;
        $usuario->roles()->sync($this->user->role);
        $usuario->update();
        $this->reset(['open_edit']);
        $this->emitTo('show-users','render');
        $this->emit('alert', 'El Usuario se actualizó correctamente');
    }
}
