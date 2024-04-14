<?php
require_once __DIR__ . "/connect.php";
require_once __DIR__ . "/autoload.php";


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $user = $connection->authenticateaboutid($id);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>
<style>
    h2 {
        padding-top: 40%;
    }



    .ban .wrap {
        margin-left: auto;
        margin-right: auto;
        width: 50%;


    }

    .wrapper02 {
        width: 100%;
        margin-left: auto;
        margin-right: auto;
        min-height: 100vh;
        margin-bottom: 150px;
        position: relative;
    }

    .text {
        text-align: center;
        padding-top: 10px;
        flex-wrap: wrap;
        flex-direction: column;
        display: flex;
    }

    .section {
        width: 50%;
        margin-left: 25%;

    }

    .shadowtext {
        text-shadow: 1px 1px black;
    }

    hr {
        color: grey;
        border: 1px solid;
        width: 100%;
        margin-bottom: 20px;
    }


    footer {
        text-align: center;
        padding-top: 7px;
        background-color: darkslategrey;
        color: white;

    }

    .vh100 {
        height: 100vh;
        width: 100%;
    }

    .pos-relative {
        position: relative;
    }

    .pos-absolute {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>

<body>

    <nav class=" fixed-top navbar navbar-expand-lg bg-white ">
        <!-- <div class="container-fluid "> -->
        <a class="navbar-brand fw-bold ps-3" href="./third.php?id=<?php echo $user['id']; ?>">Webster</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-black fw-bolder" aria-current="home" href="#Home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold   " aria-current="true" href="#About us">About us</a>
                </li>
                <!-- ;;;;;this; -->
                <li class="nav-item">
                    <a class="nav-link fw-semibold " aria-current="true" href="#<?php echo $user['state']; ?>"><?php echo $user['state']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold " aria-current="true " href="#Contact">Contact</a>
                </li>
            </ul>
        </div>
        </div>
    </nav>

    <div class="vh100 text-black pos-relative mb-4">
        <img class="vh100" src="<?php echo $user['cover_img_url']; ?>">
        <div class="pos-absolute ">
            <h1 class="text-center text-white shadowtext"> <?php echo $user['main_title']; ?>
                <br />
                <h2 class=" ban.wrap text-center text-white shadowtext"><?php echo $user['subtitle']; ?></h2>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="wrapper02">
            <div class="section">
                <div class="text">
                    <h3 class="text-secondary" id="About us">About us</h3>
                    <p class="fw-semibold"><?php echo $user['about_you']; ?>
                    </p>
                    <hr />
                </div>

            </div>
            <p class="text-center  fw-semibold">Telephone:<?php echo $user['telephone_number']; ?></p>
            <p class="text-center fw-semibold pb-5">Location:<?php echo $user['location']; ?></p>
            <h3 class="pb-4 text-body" id="<?php echo $user['state']; ?>"> <?php echo $user['state']; ?></h3>
            <div class="card-group  text-light ">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card mb-4 border-3 border-dark  rounded-3">
                            <img src="<?php echo $user['img_url']; ?>" class="card-img-top" alt="...">
                            <div class="card-body bg-dark ">
                                <h5 class="card-title text-white"><?php echo $user['state']; ?> One Description</h5>
                                <p class="card-text"><?php echo $user['description']; ?></p>
                            </div>
                            <div class="card-footer bg-dark  border-dark">
                                <small class="text-white fw-bolder">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>

                    <div class="col">

                        <div class="card  ms-2 mb-4 border border-3 border-dark  rounded-3">
                            <img src="<?php echo $user['img_url_2']; ?>" class="card-img-top" alt="...">
                            <div class="card-body bg-dark">
                                <h5 class="card-title text-white"><?php echo $user['state']; ?> Two Description</h5>
                                <p class="card-text"><?php echo $user['description_2']; ?></p>
                            </div>

                            <div class="card-footer bg-dark  border-dark ">
                                <small class="text-white fw-bolder">Last updated 3 mins ago</small>

                            </div>
                        </div>

                    </div>


                    <div class="col">
                        <div class="card ms-2 mb-4 border border-3 border-dark rounded-3">
                            <img src="<?php echo $user['img_url_3']; ?>" class="card-img-top" alt="...">
                            <div class="card-body bg-dark">
                                <h5 class="card-title text-white"><?php echo $user['state']; ?> Three Description</h5>
                                <p class="card-text"><?php echo $user['description_3']; ?></p>
                            </div>
                            <div class="card-footer bg-dark border-dark">
                                <small class="text-white fw-bolder">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row mb-4">
                <div class="col-12 col-lg-4">
                    <div class="fw-semibold p-5 ">
                        <p id="Contact" class="h3 text-danger-emphasis">Contact</p>
                        <br>
                        <p class="fw-bold"> <?php echo $user['company_description']; ?> </p>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="fw-semibold  p-5 ">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label text-danger-emphasis"> Name</label>
                                <input type="text" class="form-control" placeholder="Dicta iste et asperi" name="name" id="name" aria-describedby="emailHelpId" />
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label text-danger-emphasis">Email </label>
                                <input type="text" class="form-control" placeholder="Iste imedit asperi" name="email" id="email" aria-describedby="emailHelpId" />
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label  text-danger-emphasis">Message</label>
                                <textarea class="form-control" placeholder="Eligendi neque quia quaerat sunt consequatur Voluptates quae enim vitae" rows="4"></textarea>
                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                                <button class="btn btn-outline-success me-md-2" type="button">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <footer class="fixed-bottom">
        <p>Copyright by Daniela @ Brainster<br>
            <a class="text-decoration-none" href="<?php echo $user['linkedin']; ?>" target="_blank">Linkedin</a><a class="ms-2 text-decoration-none" href="<?php echo $user['facebook']; ?>" target="_blank">Facebook</a><a class="ms-2 text-decoration-none" href="<?php echo $user['twitter']; ?>" target="_blank">Twitter</a><a class="ms-2 text-decoration-none" href="<?php echo $user['google_plus']; ?>" target="_blank">Google +</a>
        </p>
    </footer>

    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>