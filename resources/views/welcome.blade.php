<x-layout title="Bloc Notes - HOMEPAGE">
    <x-nav/>
    <x-header/>

    <main class="container-fluid">
        <div class="row justify-content-center pb-5">
            <div class="col-10">
                <img src="/media/img/home_img.jpg" alt="Immagine home" class="homeImg">
            </div>
        </div>
        <div class="row py-5 justify-content-evenly">
            <div class="col-5 text-end">
                <h2 class="text-main fw-semibold display-5">{{$article1->title}}</h2>
            </div>
            <div class="col-5">
                <p class="text-main m-0 fs-3">
                    {{$article1->contentPreview($article1->content)}} 
                    <a href="{{route('article.detail', ['id' => $article1->id])}}" class="text-main fw-semibold">CONTINUA A LEGGERE.</a>
                </p>
            </div>
        </div>
        <div class="row py-5 justify-content-evenly">
            <div class="col-5">
                <img src="{{Storage::url($article2->img)}}" alt="Immagine minicard 1" class="homeMinicard">
            </div>
            <div class="col-5 d-flex align-items-center homeArticleDesc">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-main fw-semibold display-5">{{$article2->title}}</h2>
                    </div>
                    <div class="col-12">
                        <p class="text-main m-0 fs-3">
                            {{$article2->contentPreview($article2->content)}} 
                            <a href="{{route('article.detail', ['id' => $article2->id])}}" class="text-main fw-semibold">CONTINUA A LEGGERE.</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-5 justify-content-evenly">
            <div class="col-5 d-flex align-items-center homeArticleDesc">
                <div class="row text-end">
                    <div class="col-12">
                        <h2 class="text-main fw-semibold display-5">{{$article3->title}}</h2>
                    </div>
                    <div class="col-12">
                        <p class="text-main m-0 fs-3">
                            {{$article3->contentPreview($article3->content)}} 
                            <a href="{{route('article.detail', ['id' => $article3->id])}}" class="text-main fw-semibold">CONTINUA A LEGGERE.</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <img src="{{Storage::url($article3->img)}}" alt="Immagine minicard 2" class="homeMinicard">
            </div>
        </div>
        <div class="row py-5 justify-content-evenly">
            <div class="col-5">
                <img src="{{Storage::url($article4->img)}}" alt="Immagine minicard 3" class="homeMinicard">
            </div>
            <div class="col-5 d-flex align-items-center homeArticleDesc">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-main fw-semibold display-5">{{$article4->title}}</h2>
                    </div>
                    <div class="col-12">
                        <p class="text-main m-0 fs-3">
                            {{$article4->contentPreview($article4->content)}} 
                            <a href="{{route('article.detail', ['id' => $article4->id])}}" class="text-main fw-semibold">CONTINUA A LEGGERE.</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <x-newsletter/>

    <x-footer/>
</x-layout>