<nav class="navbar navbar-expand-md navbar-light bg-warning">
    <div class="container-fluid">
        <a class="navbar-brand d-md-none mx-auto text-center" href="{{ route('index') }}">
            <img src="{{ asset('images/logo_footer_black.png') }}" alt="Logo" style="height: 40px;">
            <div class="mt-2">Brainster</div>
        </a>


        <a class="navbar-brand d-none d-md-flex flex-column align-items-center me-4" href="{{ route('index') }}">
            <img src="{{ asset('images/logo_footer_black.png') }}" alt="Logo" style="height: 40px;">
            <div class="mt-2 text-center">Brainster</div>
        </a>


        <button class="navbar-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav  mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-dark me-4" href="https://brainster.co/full-stack/">Академија за програмирање</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark me-4" href="https://brainster.co/marketing/">Академија за маркетинг</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark me-4" href="https://brainster.co/graphic-design/">Академија за дизајн</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark me-4" href="https://blog.brainster.co/">Блог</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark me-4" href="#contactModal" data-bs-toggle="modal">Вработи наши студенти</a>
                </li>

                @if(Route::currentRouteName() == 'admin.dashboard')
                <li class="nav-item text-center">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button style="text-decoration: none;" type="submit" class=" fw-bolder  pt-4 btn btn-link text-dark me-4 ">Logout</button>
                    </form>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>