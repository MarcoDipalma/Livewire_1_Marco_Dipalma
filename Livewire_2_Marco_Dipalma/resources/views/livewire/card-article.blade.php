<div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <h1 class="mt-5 text-center text-white">{{$article->title}}</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5 align-items-center">
            <div class="col-6 mb-3">
                <img src="{{!$article->img ? Storage::url('img/defaultimg.jpg') : Storage::url($article->img)}}" class="card-img-top" alt="Immagine articolo">
            </div>

            <div class="col-6 mb-3">
                <h3 class="text-white mb-3 card-title">{{$article->title}}</h3>
                <h4 class="text-white card-subtitle mb-2">{{$article->subtitle}}</h4>
                <p class="text-white mb-5" class="card-text">{{$article->body}}</p>
                <a href="{{route('articles.index')}}" class="mt-5 card-link">Indietro</a>
            </div>

        </div>
    </div>

</div>
