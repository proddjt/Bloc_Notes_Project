<x-layout title="Bloc Notes - CONFERMA ARTICOLO">
    <x-nav/>
    <div class="container pt-5 mt-5">
        <div class="row">
            <div class="col-12">
                @if (session('articleConfirm'))
                <h2 class="text-main, display-2 fw-bold text-center">{{session('articleConfirm')}}</h2>
                @endif
                @if  (session('articleError'))
                <h2 class="text-main, display-2 fw-bold text-center">{{session('articleError')}}</h2>
                @endif
            </div>
            <div class="col-12 d-flex justify-content-center align-items-center">
                @if (session('articleConfirm'))
                <button class="articleBtn px-4 py-2">
                    <a href="{{route('homepage')}}" class="text-decoration-none articleBtnLink fs-6">Ritorna alla homepage</a>
                </button>
                @endif
                @if (session('articleError'))
                <button class="articleBtn px-4 py-2">
                    <a href="{{route('article.create')}}" class="text-decoration-none articleBtnLink fs-6">Ritorna al caricamento</a>
                </button>
                @endif
            </div>
        </div>
    </div>
</x-layout>