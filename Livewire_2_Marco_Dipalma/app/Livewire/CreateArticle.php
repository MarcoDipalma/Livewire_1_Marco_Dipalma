<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\WithFileUploads;

class CreateArticle extends Component
{
    use WithFileUploads;

    #[Validate('required', message: 'Il titolo è obbligatorio')]
    #[Validate('min:3', message: 'Il titolo è troppo corto')]
    public $title;

    #[Validate('required', message: 'Il sottotitolo è obbligatorio')]
    public $subtitle;
    
    #[Validate('required', message: 'Il campo è obbligatorio')]
    public $body;
    
    public $img;


    public function store()
    {
        $this->validate();
 
        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
            'img' => !$this->img ? null : $this->img->store('img', 'public'),        

        ]);

        // $this->reset();
        $this->clearForm();

        session()->flash('status', 'Articolo creato con successo');
        
    }

    protected function clearForm(){
        $this->title='';
        $this->subtitle='';
        $this->body='';
        $this->img='';
    }


    public function render()
    {
        return view('livewire.create-article');
    }
}
