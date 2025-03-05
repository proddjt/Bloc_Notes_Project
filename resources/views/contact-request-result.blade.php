<x-layout title="Bloc Notes - CONFERMA EMAIL">
    <x-nav/>
    <div class="container pt-5 mt-5">
        <div class="row">
            <div class="col-12">
                @if (session('status'))
                <h2 class="text-main, display-2 fw-bold text-center">{{session('status')}}</h2>
                @endif
                @if  (session('emailError'))
                <h2 class="text-main, display-2 fw-bold text-center">{{session('emailError')}}</h2>
                @endif
            </div>
            <div class="col-12 d-flex justify-content-center align-items-center">
                @if (session('status'))
                <button class="articleBtn px-4 py-2">
                    <a href="{{route('homepage')}}" class="text-decoration-none articleBtnLink fs-6">Ritorna alla homepage</a>
                </button>
                @endif
                @if (session('emailError'))
                <button class="articleBtn px-4 py-2">
                    <a href="{{route('contacts')}}" class="text-decoration-none articleBtnLink fs-6">Ritorna ai contatti</a>
                </button>
                @endif
            </div>
        </div>
    </div>
</x-layout>