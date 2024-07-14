<div class="container-fluid p-0">
    <div class="overlay">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item fw-bolder"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item fw-bolder"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                        <li class="nav-item fw-bolder"><a class="nav-link" href="{{ route('post') }}">Sample Post</a></li>
                        <li class="nav-item fw-bolder"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <script src="{{ asset('js/script.js')}}"></script>