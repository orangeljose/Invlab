<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;
use Livewire\WithPagination;

class ShowArticles extends Component
{

    use WithPagination;

    public $code;
    public $name;
    public $batch;
    public $due_date;
    public $sort = 'id';
    public $direction = 'desc';

    public $open_edit = false;

    protected $rules = [
        'article.name' => 'required|min:2|max:30',
        'article.description' => 'max:90',
        'article.due_date' => 'required',
        'article.batch' => 'required',
        'article.stock' => 'required',
    ];

    protected $listeners = ['render', 'delete'];

    public function updating(){
        $this->resetPage();
    }

    public function delete(Article $article){
        $article->delete();
    }

    public function render()
    {
        $articles = Article::where('id','like','%' . $this->code . '%')
                                ->where('name','like','%' . $this->name . '%')
                                ->where('batch','like','%' . $this->batch . '%')
                                ->where('due_date','like','%' . $this->due_date . '%')
                                ->orderBy($this->sort, $this->direction)
                                ->paginate(10);

        return view('livewire.show-articles', compact('articles'));
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
    public function edit(Article $article)
    {
        $this->article = $article;
        $this->open_edit = true;
    }

    public function update(){
        $this->validate();        
        $this->article->save();
        $this->reset(['open_edit']);
        $this->emitTo('show-articles','render');
        $this->emit('alert', 'El artículo se actualizó correctamente');
    }
}
