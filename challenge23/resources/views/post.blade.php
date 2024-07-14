@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clean Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/Post.css') }}" />


</head>

<body>
    @section('content')

    <div class="card-img-overlay text-center">
        <div class="text-start " style=" padding-left: 35%;text-wrap: wrap;">
            <div class="container  ">
                <h1 class="card-title fw-bolder" style=" width: 60%;">Man must explore, and this is exploration at it's greatest.</h1>
                <p class="card-text pt-4 fs-3 text-white-50 " style=" width: 50%;">Problems look mighty small from 150 miles up</p>
                <small class="text-white-50">Posted by Start Bootstrap on August 24, 2018.</small>
            </div>
        </div>
    </div>
    </div>
    <div class="text-start " style=" padding-left: 30%;text-wrap: wrap;">
        <div class="container">

            <div style=" width: 63%;">
                <div class="mt-4">
                    <p class="fw-medium text-secondary ">Eu labore nostrud nulla veniam adipisicing exercitation do consequat aute occaecat commodo consectetur. Est tempor pariatur ut eiusmod exercitation consequat id voluptate sint aute amet Lorem eu commodo. Ad voluptate est sit commodo amet. Proident elit ullamco ad proident ea anim commodo.</p>
                </div>
                <div>
                    <p class="fw-medium text-secondary ">Ad occaecat in ut cupidatat. Excepteur sint eiusmod esse do amet officia non cupidatat tempor cupidatat elit excepteur exercitation. Quis enim anim ut
                        Lorem nulla nostrud occaecat dolore do do ea. Irure labore amet cillum dolore fugiat veniam incididunt laborum cillum.</p>
                </div>
                <div>
                    <p class="fw-medium text-secondary ">Cupidatat magna fugiat sint magna amet consequat veniam ex minim in ea id ut. Anim culpa velit elit ipsum. Eiusmod esse deserunt deserunt pariatur excepteur sit ut et cillum ut amet minim. Mollit qui amet ipsum enim occaecat amet incididunt proident ut cupidatat Lorem officia. Qui veniam sit eu aute
                        cupidatat ullamco adipisicing ipsum cupidatat exercitation. Ea enim voluptate in nostrud non mollit non quis deserunt consequat Lorem est. Cillum excepteur do excepteur aliquip cupidatat amet sit proident veniam ad
                        adipisicing qui.</p>
                </div>
                <div>
                    <p class="fw-medium text-secondary ">Sit sit est enim non aute ad exercitation nulla mollit esse adipisicing enim officia. Ad velit proident cillum exercitation deserunt adipisicing nulla eiusmod. Consectetur amet consequat pariatur aliqua excepteur minim qui
                        consectetur reprehenderit.</p>
                </div>
                <div>
                    <p class="fw-medium text-secondary ">Dolor nulla ad ullamco esse dolor voluptate velit. Voluptate ipsum consequat cillum consequat eu excepteur nisi aliqua. Minim proident nostrud excepteur duis qui dolor mollit ea duis in. Officia dolore magna aliquip labore quis qui proident Lorem proident quis exercitation pariatur. Sint exercitation id amet in mollit magna dolor Lorem consectetur irure consectetur esse irure mollit.</p>
                </div>
                <div>
                    <h2>The Final Frontier</h2>
                    <p class="fw-medium text-secondary ">Eu labore nostrud nulla veniam adipisicing exercitation do consequat aute occaecat commodo consectetur. Est tempor pariatur ut eiusmod exercitation consequat id voluptate sint aute amet Lorem eu commodo. Ad voluptate est sit commodo amet. Proident elit ullamco ad proident ea anim commodo.</p>
                </div>
                <div>
                    <p class="fw-medium text-secondary ">Ad occaecat in ut cupidatat. Excepteur sint eiusmod esse do amet officia non cupidatat tempor cupidatat elit excepteur exercitation. Quis enim anim ut
                        Lorem nulla nostrud occaecat dolore do do ea. Irure labore amet cillum dolore fugiat veniam incididunt laborum cillum.</p>
                </div>
                <div>
                    <p class="fw-medium text-body-tertiary ">Cupidatat magna fugiat sint magna amet consequat veniam ex minim in ea id ut. Anim culpa velit elit ipsum. Eiusmod esse deserunt deserunt pariatur excepteur sit ut et cillum ut amet minim. Mollit qui amet ipsum enim occaecat amet incididunt proident ut cupidatat Lorem officia. Qui veniam sit eu aute
                        cupidatat ullamco adipisicing ipsum cupidatat exercitation. Ea enim voluptate in nostrud non mollit non quis deserunt consequat Lorem est. Cillum excepteur do excepteur aliquip cupidatat amet sit proident veniam ad adipisicing qui.</p>
                </div>
                <div>
                    <p class="fw-medium text-secondary ">Sit sit est enim non aute ad exercitation nulla mollit esse adipisicing enim officia. Ad velit proident cillum exercitation deserunt adipisicing nulla eiusmod. Consectetur amet consequat pariatur aliqua excepteur minim qui
                        consectetur reprehenderit.</p>
                </div>
                <div>
                    <p class="fw-medium text-secondary ">Dolor nulla ad ullamco esse dolor voluptate velit. Voluptate ipsum consequat cillum consequat eu excepteur nisi aliqua. Minim proident nostrud excepteur duis qui dolor mollit ea duis in. Officia dolore magna aliquip labore quis qui proident Lorem proident quis exercitation pariatur. Sint exercitation id amet in mollit magna dolor Lorem consectetur irure consectetur esse irure mollit.</p>
                </div>
                <div>
                    <h2>Reaching for the stars</h2>
                    <p class="fw-medium text-secondary ">Cupidatat magna fugiat sint magna amet consequat veniam ex minim in ea id ut. Anim culpa velit elit ipsum. Eiusmod esse deserunt deserunt pariatur excepteur sit ut et cillum ut amet minim. Mollit qui amet ipsum enim occaecat amet incididunt proident ut cupidatat Lorem officia. Qui veniam sit eu aute
                        cupidatat ullamco adipisicing ipsum cupidatat exercitation. Ea enim voluptate in nostrud non mollit non quis deserunt consequat Lorem est. Cillum excepteur do excepteur aliquip cupidatat amet sit proident veniam ad
                        adipisicing qui.</p>
                </div>
                <div>
                    <img src="{{ asset('images/blog-image.jpg') }}" class="rounded mx-auto d-block" alt="">
                    <p class="fw-medium text-secondary text-center pt-2  ">Elit sint voluptate fugiat eu ullamco ea ea.</p>
                </div>
                <div>
                    <p class="fw-medium text-secondary ">Sit sit est enim non aute ad exercitation nulla mollit esse adipisicing enim officia. Ad velit proident cillum exercitation deserunt adipisicing nulla eiusmod. Consectetur amet consequat pariatur aliqua excepteur minim qui
                        consectetur reprehenderit.</p>
                </div>
                <div>
                    <p class="fw-medium text-secondary ">Dolor nulla ad ullamco esse dolor voluptate velit. Voluptate ipsum consequat cillum consequat eu excepteur nisi aliqua. Minim proident nostrud excepteur duis qui dolor mollit ea duis in. Officia dolore magna aliquip labore quis qui proident Lorem proident quis exercitation pariatur. Sint exercitation id amet in mollit magna dolor Lorem consectetur irure consectetur esse irure mollit.</p>
                </div>
                <div>
                    <p class="fw-medium text-secondary ">Dolor nulla <span style=" text-decoration: underline;"> voluptate velit</span>. Voluptate <span style=" text-decoration: underline;"> ipsum consequat</span> excepteur nisi aliqua.</p>
                </div>

                <div>
                </div>
            </div>
        </div>
    </div>


    @endsection



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>