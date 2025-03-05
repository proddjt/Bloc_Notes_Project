<x-layout title="Bloc Notes - CONTATTI">

    <x-nav/>
    <x-header/>

    <main>
        <div class="container-fluid contactSection py-5">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <h2 class="text-main display-2 text-uppercase fw-bold">contattaci.</h2>
                </div>
            </div>
            <div class="row justify-content-center align-items-center pt-4">
                <div class="col-6 d-flex justify-content-center align-items-center">
                    <form method="POST" action="{{route('contact-request-submit')}}" class="d-flex flex-column justify-content-center align-items-center myForm px-4 py-3">
                        @csrf
                        <label for="name" class="text-main fw-semibold fs-4">Nome</label>
                        <input type="name" id="name" name="name" class="text-main-perm" placeholder="Il tuo nome.">
                        <label for="email" class="text-main fw-semibold fs-4 pt-3">Email</label>
                        <input type="email" id="email" name="email" class="text-main-perm" placeholder="La tua email.">
                        <label for="user_msg" class="text-main fw-semibold fs-4 pt-3">Messaggio</label>
                        <textarea name="user_msg" name="user_msg" id="user_msg" cols="50" rows="5" placeholder="Scrivi qui il tuo messaggio." class="text-main-perm"></textarea>
                        <button class="articleBtn px-3 py-1 text-main-light fs-4 mt-4">Invia messaggio</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <x-newsletter/>
    <x-footer/>

</x-layout>

