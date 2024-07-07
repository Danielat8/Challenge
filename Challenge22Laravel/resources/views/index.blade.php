<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="{{ asset('css/FirstPage.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1 class="text-center mt-4 mb-5 text-white">BUSINESS CASUAL</h1>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid py-2">
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="fw-bolder" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="fw-bolder" href="{{ route('login') }}">Log in</a>
                    </li>
                    @if(Session::has('name'))
                    <li class="nav-item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="nav-link-button">Log Out</button>
                        </form>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <div class="container main-section">
        <div class="row">
            <div class="image-container">
                <img src="{{asset('images/cafe.jpg')}}" alt="Catalyst Cafe" class="img-fluid">
                <div class="overlay-content">
                    <h2>LOREM IPSUM</h2>
                    <p>Enim sunt aliquip ullamco laborum ad laboris non aliqua mollit consequat. Sunt quis laboris quis tempor reprehenderit nulla irure labore irure aute ipsum incididunt nostrud laborum. Consequat enim ex non velit veniam excepteur nisi sunt et.</p>
                    <a href="#" class="btn btn-primary">Visit us today</a>
                </div>
            </div>
        </div>
    </div>
    <div class="con text-center">
        <h3>Welcome, {{ $name }} {{ $lastname }}</h3>
        <h3>OUR PROMISE</h3>
        <p>
            Irure reprehenderit magna aliquip nisi ex pariatur. Magna aliquip dolore deserunt pariatur anim. Excepteur officia veniam commodo culpa aute in esse. Dolore ea nisi nostrud do culpa. Irure commodo cupidatat tempor esse aliquip eiusmod excepteur nulla ut duis do aliquip. Id proident ex eu quis aliqua elit cillum consectetur ut minim nostrud. Non aute consectetur exercitation occaecat reprehenderit adipiscing consequat laborum commodo et. Aliqua duis officia eiusmod voluptate ex occaecat aliquip qui.
        </p>
    </div>
    <footer>
        <p> Copyright © Your Website 2024 </p>
    </footer>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>