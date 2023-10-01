<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class CreateArticle extends Component
{

    public $open = false;
    public $name, $description, $due_date, $type, $brand, $unit, $batch, $min_stock, $max_stock;

    protected $rules = [
        'name' => 'required|min:2|max:30',
        'description' => 'max:90',
        'due_date' => 'required',
        'type' => 'required',
        'brand' => 'required',
        'unit' => 'required',
        'batch' => 'required',
        'min_stock' => 'required',
        'max_stock' => 'required',
    ];

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function saveArticle()
    {
        $this->validate();

        Article::create([
            'name' => $this->name,
            'description' => $this->description,
            'due_date' => $this->due_date,
            'batch' => $this->batch,
            'type' => $this->type,
            'brand' => $this->brand,
            'unit' => $this->unit,
            'min_stock' => $this->min_stock,
            'max_stock' => $this->max_stock,
        ]);

        $this->reset(['open','name', 'description', 'due_date', 'type', 'brand', 'unit', 'batch', 'min_stock', 'max_stock']);

        $this->emitTo('show-articles','render');
        $this->emit('alert', 'El artículo se creo correctamente');
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
