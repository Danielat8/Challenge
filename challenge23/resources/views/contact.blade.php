@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clean Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Contact.css') }}" />

</head>

<body>
    @section('content')

    <div class="card-img-overlay text-center">
        <h1 class="card-title fw-bolder">Contact Me</h1>
        <p class="card-text pt-4 text-white-50">Have questions? I have answers!</p>
    </div>
    </div>
    </div>

    <div class="text-start" style=" padding-left: 36%;">
        <div class="container">
            <div class="mt-4">
                <div>
                    <label for="basic-url" class="form-label">Name</label>
                </div>
                <input class="mb-5" placeholder="" type="text" />
                <div>
                    <label for="basic-url" class="form-label">Email Adress</label>
                </div>
                <input class="mb-5" placeholder="" type="text" />
                <div>
                    <label for="basic-url" class="form-label">Phone Number</label>
                </div>
                <input class="mb-5" placeholder="" type="text" />
                <div>
                    <label for="basic-url" class="form-label">Message</label>
                </div>
                <textarea class="mb-3" placeholder="" type="text"></textarea>
                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-info mb-4  text-white" type="button">SEND</button>
                </div>
            </div>
        </div>
    </div>

    @endsection



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>