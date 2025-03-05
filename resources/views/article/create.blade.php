<x-layout title="Bloc Notes - CREA UN ARTICOLO">

    <x-nav/>
    <x-header/>

    <main>
        <div class="container-fluid contactSection py-5">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <h2 class="text-main display-2 text-uppercase fw-bold">CARICA IL TUO ARTICOLO.</h2>
                </div>
            </div>
            <div class="row justify-content-center align-items-center pt-4">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <form method="POST" action="{{route('article.store')}}" class="d-flex flex-column justify-content-center align-items-center myForm px-4 py-3" enctype="multipart/form-data">
                        @csrf
                        <label for="title" class="text-main fw-semibold fs-4 @error('title') is-invalid @enderror">Titolo</label>
                        <input type="title" id="title" name="title" class="text-main-perm w-100" placeholder="Il titolo." value="{{old('title')}}">
                        @error('title')
                        <div class="text-main fw-semibold">{{$message}}</div>
                        @enderror
                        <label for="author" class="text-main fw-semibold fs-4 pt-3 @error('author') is-invalid @enderror">Autore</label>
                        <input type="author" id="author" name="author" class="text-main-perm w-100" placeholder="L'autore." value="{{old('author')}}">
                        @error('title')
                        <div class="text-main fw-semibold">{{$message}}</div>
                        @enderror
                        <label for="tag" class="text-main fw-semibold fs-4 pt-3 @error('tag') is-invalid @enderror">Tag</label>
                        <select type="tag" id="tag" name="tag" class="text-main-perm w-100" placeholder="Il tag dell'argomento.">
                            <option value="Tecnologia">Tecnologia</option>
                            <option value="Attualità">Attualità</option>
                            <option value="Sport">Sport</option>
                            <option value="Cronaca nera">Cronaca nera</option>
                            <option value="Cultura">Cultura</option>
                            <option value="Politica">Politica</option>
                        </select>
                        @error('title')
                        <div class="text-main fw-semibold">{{$message}}</div>
                        @enderror
                        <label for="content" class="text-main fw-semibold fs-4 pt-3 @error('content') is-invalid @enderror">Testo dell'articolo</label>
                        <textarea name="content" name="content" id="content" cols="100" rows="10" placeholder="Scrivi qui il tuo articolo." class="text-main-perm w-100">{{old('content')}}</textarea>
                        @error('title')
                        <div class="text-main fw-semibold">{{$message}}</div>
                        @enderror
                        <label for="img" class="text-main fw-semibold fs-4 pt-3 @error('img') is-invalid @enderror">Cover articolo</label>
                        <input type="file" id="img" name="img">
                        @error('title')
                        <div class="text-main fw-semibold">{{$message}}</div>
                        @enderror
                        <button class="articleBtn px-3 py-1 text-main-light fs-4 mt-4">Carica articolo</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <x-newsletter/>
    <x-footer/>

</x-layout>