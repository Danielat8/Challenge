@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clean Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Home.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Text.css') }}" />

</head>

<body>
    @section('content')

    <div class="card-img-overlay text-center">
        <h1 class="card-title">Clean Blog</h1>
        <p class="card-text pt-4 text-white-50">A Blog Theme By Start Boostrap.</p>
    </div>
    </div>
    </div>

    <div class="text-start pos">
        <div class="container">
            <div style=" width: 63%;">
                <div class="mt-4">
                    <h2 class="fw-bold">Lorem Ipsum</h2>
                    <p class="fw-medium text-black ">Cillum laborum tempor laborum non dolore duis ipsum fugiat consectetur reprehenderit ipsum ipsum ex.</p>
                    <small class="monospace text-secondary">Posted by <span class="fw-bolder ">John Doe</span></small>
                    <hr>
                </div>
                <div>
                    <h2 class="fw-bold">Lorem Ipsum 2</h2>
                    <small class="monospace text-secondary">Posted by <span class="fw-bolder">John Doe </span> another boring news</small>
                    <hr>

                </div>
                <div>
                    <h2 class="fw-bold">Lorem Ipsum 3</h2>
                    <p class="fw-medium text-black">Veniam amet ad laborum excepteur ullamco consequat in adipisicing Lorem cillum excepteur. Commodo labore non sit ullamco minim dolore velit irure incididunt quis exercitation anim dolore non. Ut ex nostrud nostrud irure. Dolor ea sint mollit nisi excepteur laboris mollit ut
                        occaecat excepteur Lorem.</p>
                    <small class="monospace text-secondary">Posted by <span class="fw-bolder ">Jane Doe</span></small>

                    <hr>

                </div>
                <div>
                    <h2 class="fw-bold">Lorem Ipsum 4</h2>
                    <p class="fw-medium text-black">Mollit aute dolore proident consectetur exercitation ex.</p>
                    <small class="monospace text-secondary">Posted by <span class="fw-bolder "> Missy Doe</span></small>

                    <hr>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-5">
                        <button class="btn btn-info me-md-2 text-white" type="button">Order Posts -></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>