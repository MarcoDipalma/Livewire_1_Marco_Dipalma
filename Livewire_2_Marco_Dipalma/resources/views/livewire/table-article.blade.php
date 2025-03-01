<div>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 mb-5">Articoli</h1>
            </div>

            <div class="container">
                
                <div class="row justify-content-center">
    
                    @foreach ($articles as $article)
                        
                    <div class="col-6 col-md-3 mb-3">
                        
                        <div class="card mx-auto" style="width: 20rem;">
                            <img src="{{!$article->img ? Storage::url('img/defaultimg.jpg') : Storage::url($article->img)}}" class="card-img-top" alt="Immagine articolo">
                            <div class="card-body">
                              <h5 class="card-title">{{$article->title}}</h5>
                              <h6 class="card-subtitle mb-2 text-body-secondary">{{$article->subtitle}}</h6>
                              <p class="text-dark card-text">{{$article->body}}</p>
                              <a href="{{route('articles.show', compact('article'))}}" class="btn btn-info">Dettaglio</a>
                              <a href="{{route('articles.edit', compact('article'))}}" class="btn btn-warning">Modifica</a>
                              <button wire:click="destroy({{$article}})" class="btn btn-danger">Elimina</button>
                            </div>
                          </div>
        
                    </div>

                    @endforeach
    
                </div>

            </div>



        </div>
    </div>
</div>
