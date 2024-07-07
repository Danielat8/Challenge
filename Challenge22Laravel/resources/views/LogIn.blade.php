<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="{{asset('css/FirstPage.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>


<body>
    <h1 class="text-center mt-5 mb-5 text-white">BUSINESS CASUAL</h1>
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
                </ul>
            </div>
        </div>
    </nav>

    <div class="container form-container">
        <div class="col-md-6 col-lg-5">
            <form method="POST" action="{{ route('storeInfo') }}" class="">
                @csrf
                <div class="mb-4">
                    <div class="@error('name') is-invalid @enderror" id="name">
                        @error('name')
                        <div class="invalid-feedback d-block  text-white border border-danger-subtle bg-danger">{{ $message }}</div>
                        @enderror
                        <label for="name" class="text-white fw-bolder form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                    </div>
                    <div class="mb-4">
                        <div class="@error('lastname') is-invalid @enderror" id="lastname">
                            @error('lastname')
                            <div class="invalid-feedback d-block text-white border border-danger-subtle bg-danger">{{ $message }}</div>
                            @enderror
                            <label for="lastname" class="text-white fw-bolder form-label">Last name</label>
                            <input type="text" name="lastname" class="form-control " value="{{ old('lastname') }} ">

                        </div>
                        <div class="mb-4">
                            <div class="@error('email') is-invalid @enderror" id="email">
                                @error('email')
                                <div class="invalid-feedback d-block text-white border border-danger-subtle bg-danger">{{ $message }}</div>
                                @enderror
                                <label for="email" class="text-white fw-bolder form-label">Email</label>
                                <input type="text" name="email" class="form-control " value="{{ old('email') }}">
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="text-white btn btn-info">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>

    <footer style="margin-top: 250px;">
        <p> Copyright © Your Website 2024 </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>