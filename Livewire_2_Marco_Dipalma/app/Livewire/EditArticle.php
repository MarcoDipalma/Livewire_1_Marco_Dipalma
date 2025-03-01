<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Storage;

class EditArticle extends Component
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
    public $old_img;

    public $article;

    public function mount()
    {
        $this->title = $this->article->title;
        $this->subtitle = $this->article->subtitle;
        $this->body = $this->article->body;
        $this->old_img = $this->article->img;
    }


    public function updateArticle()
    {
        $this->validate();
 
        // Article::create([
        //     'title' => $this->title,
        //     'subtitle' => $this->subtitle,
        //     'body' => $this->body,
        //     // 'img' => $this->img,
        // ]);

        $this->article->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ]);

        if ($this->img) {
            $this->article->update([
            'img' => $this->img->store('img', 'public'),
            ]);
            
            if($this->old_img) {
            Storage::delete($this->old_img);
            }
            
            $this->reset('img');

        }

        
        $this->reset();
    
        session()->flash('status', 'Articolo aggiornato con successo');
    }


    public function render()
    {
        return view('livewire.edit-article');
    }
}
