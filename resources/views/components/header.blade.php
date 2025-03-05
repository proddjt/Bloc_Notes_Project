<header>
    <div class="container-fluid">
        <div class="row py-4 header-title">
            <div class="col-12 d-flex justify-content-center align-items-center">
                <h1 class="text-main text-uppercase display-1 fw-bolder">Raw. Sharp. Essential.</h1>
            </div>
        </div>
        <div class="row pt-4 pb-5">
            <div class="col-lg-6 col-12">
                <div class="row">
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <img src="/media/img/creator_img.png" alt="Immagine founder">
                    </div>
                    <div class="col-8 d-flex justify-content-center flex-column">
                        <p class="text-main m-0 fw-semibold fs-5">Giovanni Tramontano</p>
                        <p class="text-sec m-0 fs-6">Founder, writer, editor.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 d-flex align-items-center">
                <a href="{{route('socialRedirect', ['social' => 'facebook'])}}">
                    <button class="socialBtn text-main px-3 py-1 mx-4">
                        <i class="pe-2 fa-brands fa-facebook-f"></i>
                        Facebook
                    </button>
                </a>
                <a href="{{route('socialRedirect', ['social' => 'instagram'])}}">
                    <button class="socialBtn text-main px-3 py-1 mx-4">
                        <i class="pe-2 fa-brands fa-instagram"></i>
                        Instagram
                    </button>
                </a>
                <a href="{{route('socialRedirect', ['social' => 'linkedin'])}}">
                    <button class="socialBtn text-main px-3 py-1 mx-4">
                        <i class="pe-2 fa-brands fa-linkedin-in"></i>
                        Linkedin
                    </button>
                </a>
                <a href="{{route('socialRedirect', ['social' => 'email'])}}">
                    <button class="socialBtn text-main px-3 py-1 mx-4">
                        <i class="pe-2 fa-regular fa-envelope"></i>
                        Email
                    </button>
                </a> 
            </div>
        </div>
    </div>
</header>