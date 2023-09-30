<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class CreateArticle extends Component
{

    public $open = false;
    public $name, $description, $due_date, $batch, $stock;

    protected $rules = [
        'name' => 'required|min:2|max:30',
        'description' => 'max:90',
        'due_date' => 'required',
        'batch' => 'required',
        'stock' => 'required',
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();

        Article::create([
            'name' => $this->name,
            'description' => $this->description,
            'due_date' => $this->due_date,
            'batch' => $this->batch,
            'stock' => $this->stock,
        ]);

        $this->reset(['open','name', 'description', 'due_date', 'batch', 'stock']);

        $this->emitTo('show-articles','render');
        $this->emit('alert', 'El artículo se creo correctamente');
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
