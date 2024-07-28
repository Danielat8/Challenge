<!DOCTYPE html>
<html>

<head>
    <title>Brainster Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/2f66486f8e.js" crossorigin="anonymous"></script>
    <link href="{{asset('css/Home.css')}}" rel="stylesheet">
    <link href="{{asset('css/Navbar.css')}}" rel="stylesheet">
    <link href="{{asset('css/Footer.css')}}" rel="stylesheet">
    <link href="{{asset('css/Card.css')}}" rel="stylesheet">
</head>

<body>
    @include('layouts.navbar')

    @yield('photo')

    @yield('errors')
    @yield('content')


    @include('layouts.modal')
    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    @yield('scripts')
</body>

</html>