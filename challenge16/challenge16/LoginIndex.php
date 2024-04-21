<?php
require_once __DIR__ . "/login.php";
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

</head>

<body>
    <div class="container ">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="row row-cols-3  justify-content-center align-items-center">
                <div class="col-4 mt-4 ">
                    <label for="username" class="form-label mt-2 fw-bolder">Username</label>
                    <input for="username" class=" form-control mt-2 fw-bolder" type="text" name="username" id="username"> <?= $errors['username'] ? $errors['username'] : ''; ?><div class="input-group">
                    </div>
                    <label for="password" class="form-label mt-2 fw-bolder">Password</label>
                    <input for="password" class=" form-control mt-2  mb-4 fw-bolder" type="password" name="password" id="password"> <?= $errors['password'] ? $errors['password'] : ''; ?>
                    <div class="input-group">
                    </div>
                    <button value="Submit" type="submit" class="btn btn-primary " class=" fw-bolder btn btn-secondary text-primary border-primary">Sumbit <a href="./Admin.php"></a></button>
                </div>
            </div>
    </div>
    </div>
    </form>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>