<?php
require_once __DIR__ . "/posts.php";
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
    .ban {
        height: 150vh;
        background-image: url("../img/meric-dagli-7NBO76G5JsE-unsplash.jpg");
        background-size: cover;
        /* background-position: top top; */
        display: flex;

    }
</style>


<body>
    <div class="ban">
        <div class="container">
            <form method="post" class="row g-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h1 class="mb-3 mt-2 text-center fw-bold">You are one step away from your webpage</h1>
                <div class="row row-cols-3">
                    <div class="col-4 ">
                        <div class="card">
                            <div class="card-body">
                                <label for="basic-url" class="form-label mt-2 fw-bolder">Cover Image URL</label>
                                <input for="basic-url" class=" form-control mt-2 fw-bolder" type="text" name="cover_image_url" id="cover_image_url"> <?= $errors['cover_image_url'] ? $errors['cover_image_url'] : ''; ?>
                                <div class="input-group">
                                </div>
                                <label for="form-text" class="form-label mt-2 fw-bolder">Maine title of page</label>
                                <input for="basic-text" class=" form-control mt-2 fw-bolder" type="text" name="main_title" id="main_title"> <?= $errors['main_title'] ? $errors['main_title'] : ''; ?><div class="input-group">
                                </div>
                                <label for="form-text" class="form-label mt-2 fw-bolder">Subtitle of page</label>
                                <input for="basic-text" class=" form-control mt-2 fw-bolder" type="text" name="subtitle" id="subtitle"> <?= $errors['subtitle'] ? $errors['subtitle'] : ''; ?> <div class="input-group">
                                </div>

                                <label for="form-text" class="form-label mt-2 fw-bolder">Something about you</label>

                                <textarea class="form-control" aria-label="textarea" type="" name="about_you" id="about_you"></textarea> <?= $errors['about_you'] ? $errors['about_you'] : ''; ?><div class="input-group">

                                </div>


                                <label for="form-number" class="form-label mt-2 fw-bolder">Your telephone number</label>
                                <!-- <input type="number" class="form-control" id="number" aria-describedby="basic-addon3 basic-addon4"> -->
                                <input for="number" class=" form-control mt-2 fw-bolder" type="number" name="telephone_number" id="telephone_number"> <?= $errors['telephone_number'] ? $errors['telephone_number'] : ''; ?> <div class="input-group">
                                </div>
                                <label for="form-text" class="form-label mt-2 fw-bolder">Location</label>
                                <!-- <input type="text" class="form-control mb-5" id="basic-text" aria-describedby="basic-addon3 basic-addon4"> -->
                                <input for="location" class=" form-control mt-2 fw-bolder" type="location" name="location" id="location"> <?= $errors['location'] ? $errors['location'] : ''; ?> <div class="input-group">
                                </div>
                            </div>

                        </div>

                        <div class="card mt-3 pt-3">
                            <div class="card-body">

                                <!-- [[[[[[[[[[[[[[[ ]]]]]]]]]]]]]]]]] -->
                                <label for="" class="form-label pb-3">Do you provide services or products</label>
                                <select name="state" class="form-select mt-2 mb-3" id="state">
                                    <option selected disabled>Choose one</option>
                                    <option class="fw-bolder text-info" value="Services">Services</option>
                                    <option class="fw-bolder text-warning" value="Products">Products</option>
                                </select>
                                <?= $errors['state'] ? $errors['state'] : '' ?>
                            </div>
                        </div>

                    </div>

                    <div class="col">
                        <div class="card">

                            <div class="card-body">
                                <h5 class="card-title fw-bolder mt-2">Provide url for an image and description of your service/product </h5>
                                <label for="basic-url" class="form-label mt-4 fw-bolder">Image URL</label>
                                <input for="basic-url" class=" form-control mt-2 fw-bolder" type="url" name="image_url" id="image_url"> <?= $errors['image_url'] ? $errors['image_url'] : ''; ?><div class="input-group">

                                </div>
                                <label for="form-text" class="form-label mt-2 fw-bolder">Description of services/product</label>

                                <textarea class="form-control" aria-label="textarea" type="" name="description" id="description"></textarea> <?= $errors['description'] ? $errors['description'] : ''; ?> <div class="input-group">

                                </div>
                                <label for="basic-url" class="form-label mt-4 fw-bolder">Image URL</label>
                                <input for="basic-url" class=" form-control mt-2 fw-bolder" type="url" name="image_url_2" id="image_url_2"> <?= $errors['image_url_2'] ? $errors['image_url_2'] : ''; ?> <div class="input-group">

                                </div>
                                <label for="form-text" class="form-label mt-2 fw-bolder">Description of services/product</label>

                                <textarea class="form-control" aria-label="textarea" type="" name="description_2" id="description_2"></textarea> <?= $errors['description_2'] ? $errors['description_2'] : ''; ?> <div class="input-group">

                                </div>

                                <label for="basic-url" class="form-label mt-4 fw-bolder">Image URL</label>

                                <input for="basic-url" class=" form-control mt-2 fw-bolder" type="url" name="image_url_3" id="image_url_3"> <?= $errors['image_url_3'] ? $errors['image_url_3'] : ''; ?> <div class="input-group">

                                </div>
                                <label for="form-text" class="form-label mt-2 fw-bolder">Description of services/product</label>

                                <textarea class="form-control" aria-label="textarea" type="" name="description_3" id="description_3"></textarea> <?= $errors['description_3'] ? $errors['description_3'] : ''; ?> <div class="input-group">


                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <label for="form-text" class="form-label mt-2 fw-bolder">Provide a description of your company, something people should be aware of before they contact you:</label>

                                <textarea class="form-control" aria-label="textarea" type="" name="company_description" id="company_description"></textarea> <?= $errors['company_description'] ? $errors['company_description'] : ''; ?> <div class="input-group">

                                </div>


                                <hr>
                                <label for="form-text" class="form-label mt-2 fw-bolder">Linkedin:</label>

                                <input for="basic-url" class=" form-control mt-2 fw-bolder" type="url" name="linkedin" id="linkedin"> <?= $errors['linkedin'] ? $errors['linkedin'] : ''; ?> <div class="input-group mb-2">

                                </div>
                                <label for="form-text" class="form-label mt-2 fw-bolder">Facebook:</label>

                                <input for="basic-url" class=" form-control mt-2 fw-bolder" type="url" name="facebook" id="facebook"> <?= $errors['facebook'] ? $errors['facebook'] : ''; ?> <div class="input-group mb-2">

                                </div>
                                <label for="form-text" class="form-label mt-2 fw-bolder">Twitter:</label>

                                <input for="basic-url" class=" form-control mt-2 fw-bolder" type="url" name="twitter" id="twitter"> <?= $errors['twitter'] ? $errors['twitter'] : ''; ?> <div class="input-group mb-2">

                                </div>
                                <label for="form-text" class="form-label mt-2 fw-bolder">Google +:</label>

                                <input for="basic-url" class=" form-control mt-2 fw-bolder" type="url" name="google_plus" id="google_plus"> <?= $errors['google_plus'] ? $errors['google_plus'] : ''; ?> <div class="input-group mb-2">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto mt-5">
                    <button value="Submit" class=" fw-bolder btn btn-secondary text-primary border-primary" type="subbmit">Submit</button>
                </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>