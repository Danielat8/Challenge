<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information page</title>
    <link rel="stylesheet" href="{{ asset('css/FirstPage.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <h1 class="text-center mt-5 mb-5 text-white ">BUSINESS CASUAL</h1>
    <nav class="navbar navbar-expand-lg ">
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
    <div class="container text-white mt-4 ">
        <h2>Your name is: {{ $name }}</h2>
        <h2>Your last name is: {{ $lastname }}</h2>
        @if($email !== 'Not provided')
        <h2>Your email is: {{ $email }}</h2>
        @endif
    </div>

    <footer style="margin-top:440px;">
        <p> Copyright © Your Website 2024 </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>