<nav>
    <div class="container-fluid">
        <div class="row pt-3 align-items-center pb-3 justify-content-evenly">
            <div class="col-lg-4 col-12 d-flex justify-content-lg-start justify-content-center pb-2 pb-lg-0 align-items-center">
                <h5 class="text-main fw-bold m-0">Bloc Notes™</h5>
            </div>
            <div class="col-lg-4 col-12 d-flex align-items-center justify-content-lg-evenly justify-content-center pb-md-0 pb-2">
                <a href="{{route('homepage')}}" class="text-main fs-6 ps-md-0 ps-1 {{Route::currentRouteName()=='homepage' ? 'text-decoration-line-through' : ''}} myNav-link">Home</a>
                <a href="{{route('article.all')}}" class="text-main fs-6 ps-md-0 ps-1 {{Route::currentRouteName()=='article.all' ? 'text-decoration-line-through' : ''}} myNav-link">Tutti gli articoli</a>
                <a href="{{route('contacts')}}" class="text-main fs-6 ps-md-0 ps-1 {{Route::currentRouteName()=='contacts' ? 'text-decoration-line-through' : ''}} myNav-link">Contatti</a>
                <a href="{{route('article.create')}}" class="text-main fs-6 ps-md-0 ps-1 {{Route::currentRouteName()=='article.create' ? 'text-decoration-line-through' : ''}} myNav-link">Carica un articolo</a>
            </div>
            <div class="col-1 text-main">
                <i class="fa-solid fa-lightbulb fa-xl" id="modeIcon"></i>
            </div>
        </div>
    </div>
</nav>