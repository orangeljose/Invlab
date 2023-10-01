<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class EditArticle extends Component
{

    public $open = false;
    public $article;

    protected $rules = [
        'article.name' => 'required|min:2|max:30',
        'article.description' => 'max:90',
        'article.due_date' => 'required',
        'article.batch' => 'required',
        'article.stock' => 'required',
    ];

    public function mount(Article $article){
        $this->article = $article;
    }

    function save(){
        $this->validate();        
        $this->article->save();
        $this->reset(['open']);
        $this->emitTo('show-articles','render');
        $this->emit('alert', 'El artículo se actualizó correctamente');
    }
    
    public function render()
    {
        return view('livewire.edit-article');
    }
}
