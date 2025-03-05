<x-layout title="Bloc Notes - TUTTI GLI ARTICOLI">

    <x-nav/>
    <x-header/>

    <main>
        <div class="container-fluid px-5">
            <div class="row px-5">
                <div class="col-12">
                    <h2 class="text-main fw-bold display-2 text-uppercase">Articoli del momento</h2>
                </div>
            </div>
            <div class="row mainArticle">
                <div class="row py-5 justify-content-evenly">
                    <div class="col-5">
                        <img src="{{Storage::url($firstArticle->img)}}" alt="Immagine articolo {{$firstArticle->id}}" class="homeMinicard">
                    </div>
                    <div class="col-5 d-flex align-items-center homeArticleDesc">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="text-main fw-semibold display-5 pb-3">{{$firstArticle->title}}</h2>
                            </div>
                            <div class="col-4">
                                <p class="text-main m-0 fs-6">di <span class="fw-semibold">{{$firstArticle->author}}</span></p>
                            </div>
                            <div class="col-4">
                                <p class="text-main m-0 fs-6">del <span class="fw-semibold">{{$firstArticle->created_at->format('d/m/Y')}}</span></p>
                            </div>
                            <div class="col-4">
                                <p class="text-main m-0 fs-6">Tag: <span class="fw-semibold">{{$firstArticle->tag}}</p>
                            </div>
                            <div class="col-12 d-flex justify-content-end pt-5">
                                <button class="articleBtn px-4 py-2">
                                    <a href="{{route('article.detail', ['id' => $firstArticle->id])}}" class="text-decoration-none articleBtnLink fs-6">Continua a leggere</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row articleSection">
                @foreach ($articles as $article)
                    <x-artcard :article="$article"></x-artcard>
                @endforeach
            </div>
        </div>
    </main>

    <x-newsletter/>
    <x-footer/>

</x-layout>