<div class="col-4 py-3 d-flex justify-content-center align-items-center articleCard">
    <div class="row">
        <div class="col-12">
            <h2 class="text-main fw-semibold fs-4 pb-3 m-0">{{$article->title}}</h2>
        </div>
        <div class="col-12 overflow-hidden">
            <div class="imgContainer overflow-hidden">
                <img src="{{Storage::url($article->img)}}" alt="Immagine articolo {{$article->id}}" class="articleCardImg">
            </div>
        </div>
        <div class="col-6 pt-2">
            <p class="text-main m-0 fs-6">di <span class="fw-semibold">{{$article->author}}</span></p>
        </div>
        <div class="col-6 d-flex justify-content-end pt-2">
            <button class="articleBtn px-3">
                <a href="{{route('article.detail', ['id' => $article->id])}}" class="text-decoration-none articleBtnLink fs-6">Continua a leggere</a>
            </button>
        </div>
    </div>
</div>