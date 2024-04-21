<?php
require_once __DIR__ . "/Autoload.php";

$userId = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $registration_to = $_POST['registration_to'];

    $sql = "UPDATE registrations SET registration_to = :registration_to WHERE id = :id;";
    $pdo_statement = $pdo->prepare($sql);
    $pdo_statement->bindParam(":id", $userId, PDO::PARAM_INT);
    $pdo_statement->bindParam(":registration_to", $registration_to, PDO::PARAM_STR);
    $pdo_statement->execute();
    header("Location:Admin.php");
}
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
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <div class="navbar-nav me-auto mb-2 mb-lg-0">
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="">
                            <label for="form-text" class="form-label mt-2 fw-bolder">Registration to </label>
                            <input for="basic-text" placeholder="mm/dd/yy" class=" form-control mt-2 fw-bolder" type="date" name="registration_to" id="registration_to">
                            <div class="input-group">
                            </div>
                            <br>
                            <div class="d-grid gap-1 col-2 mx-auto">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>