<x-layout title="Bloc Notes - ARTICOLO {{$article->id}}">

    <x-nav/>
    <x-header/>

    <main>
        <div class="container-fluid px-5">
            <div class="row px-5">
                <div class="col-12">
                    <h2 class="text-main fw-bold display-2 text-uppercase text-center">articolo {{$article->id}}</h2>
                </div>
            </div>
            <div class="row mainArticle justify-content-center">
                <div class="row py-5 justify-content-evenly">
                    <div class="col-md-5 col-12 d-flex justify-content-center align-items-center order-md-1 order-2">
                        <img src="{{Storage::url($article->img)}}" alt="Immagine articolo {{$article->id}}" class="homeMinicard">
                    </div>
                    <div class="col-md-5 col-12 d-flex align-items-center homeArticleDesc order-md-2 order-1 text-md-start text-center mb-md-0 mb-3">
                        <div class="row">
                            <div class="col-12 pt-3">
                                <h2 class="text-main fw-semibold display-5 pb-3">{{$article->title}}</h2>
                            </div>
                            <div class="col-md-4 col-12">
                                <p class="text-main m-0 fs-6">di <span class="fw-semibold">{{$article->author}}</span></p>
                            </div>
                            <div class="col-md-4 col-12">
                                <p class="text-main m-0 fs-6">del <span class="fw-semibold">{{$article->created_at->format('d/m/Y')}}</span></p>
                            </div>
                            <div class="col-md-4 col-12">
                                <p class="text-main m-0 fs-6">Tag: <span class="fw-semibold">{{$article->tag}}</p>
                            </div>
                            <div class="col-12 pt-5">
                                <p class="text-main fs-5 pb-3">{{$article->content}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 col-12 d-flex justify-content-center align-items-center">
                        <button class="articleBtn px-3 py-1">
                            <a href="{{route('article.all')}}" class="text-decoration-none articleBtnLink fs-3">Torna a tutti gli articoli</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <x-newsletter/>
    <x-footer/>

</x-layout>