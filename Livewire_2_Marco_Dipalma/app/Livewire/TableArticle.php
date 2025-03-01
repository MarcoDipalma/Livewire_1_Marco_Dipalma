<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class TableArticle extends Component
{
    public function destroy(Article $article){
        
        if($article->img!=null){
            Storage::delete($article->img);
        };
        
        $article->delete();
    }

    public function render()
    {
        $articles=Article::all();
        
        return view('livewire.table-article', compact('articles'));
    }
}
