@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clean Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/About.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Text.css') }}" />

</head>

<body>
    @section('content')

    <div class="card-img-overlay text-center">
        <h1 class="card-title">About Me</h1>
        <p class="card-text pt-4 text-white-50">This is what i do.</p>
    </div>
    </div>
    </div>
    <div class="text-start pos">
        <div class="container">
            <div style=" width: 57%;">
                <div class="mt-4">
                    <p class="monospace text-secondary">Irure labore non sunt exercitation enim aliquip anim sint sint et veniam aute dolore. Nisi deserunt Lorem commodo magna tempor. Duis consequat reprehenderit duis deserunt velit labore adipisicing irure commodo nisi. In dolor excepteur anim id proident do velit magna esse et veniam.</p>

                </div>
                <div class="mb-4">
                    <small class="monospace text-secondary">Exercitation ipsum ea ut proident non qui consequat nostrud cupidatat.
                        Adipisicing aute id ullamco deserunt est aute amet minim laboris. Est minim enim mollit amet cillum consequat in commodo elit voluptate sunt velit enim.
                        Laborum quis aliqua nulla dolor elit ea ex nulla incididunt nulla.</small>
                </div>
                <div class="mb-5">
                    <small class="monospace text-secondary">n ea consectetur irure ut officia tempor enim voluptate adipisicing mollit minim id ex. Veniam exercitation amet nisi elit esse eu dolor. Id quis elit nulla eu pariatur sunt incididunt enim eu ea. Excepteur enim sunt proident duis.</small>
                </div>
            </div>
        </div>
    </div>


    @endsection



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>