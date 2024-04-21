<?php
require_once __DIR__ . "/Autoload.php";

$errors = ['registration_number' => false];
$submit = true;


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $registrationNumber = $_POST['registration_number'];


    $errors = ['productCode' => false];
    $submit = true;


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $registrationNumber = $_POST['registration_number'];


        $sql = 'SELECT * FROM `registrations` r' .
            ' inner join vehicle_types vt on vt.id = r.vehicle_type_id' .
            ' inner join vehicle_models vm on vm.id = r.vehicle_model_id' .
            ' inner join fuel_types ft on ft.id = r.fuel_type_id' .
            ' WHERE r.registration_number = :registration_number ;';
        $selectQuery = $pdo->prepare($sql);
        $selectQuery->bindParam(':registration_number', $registrationNumber, PDO::PARAM_STR);
        $selectQuery->execute();
        $registration = $selectQuery->fetch(PDO::FETCH_ASSOC);


        if (!$registration) {
            $errors['registration'] = "<span class='text-danger'> Registration number doesnt exist! </span>";
            $submit = false;
        }
    }
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
        <div class="container-fluid ">
            <a class="navbar-brand" href="/index.php">Vehicle Registration</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <div class="navbar-nav me-auto mb-2 mb-lg-0">
                </div>


                <a class="navbar-brand text-info" href="./LoginIndex.php">Login</a>
            </div>
        </div>
    </nav>
    <div class="container border border-black mt-5 bg-secondary">
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="row row-cols-3  justify-content-center align-items-center">

                <div class="col-4 mt-4  ">
                    <h1 class="mt-4">Vehicle Registration</h1>
                    <p class=" fw-bolder ">Enter your registration number to check its validity</p>
                    <div class="col-auto">
                        <div class="container d-flex flex-column align-items-center justify-content-center">
                            <label for="registration_number" class="visually-hidden"></label>
                            <input type="text" class="form-control " name="registration_number" id="registration_number" placeholder="Registration number">
                            <?= array_key_exists('registration_number', $errors) ? $errors['registration_number'] : '' ?>
                            <br>
                            <div class="d-grid gap-1 col-2 mx-auto">
                                <button type="submit" class="btn btn-primary mb-4">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <br>

    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && $submit) { ?>

        <?php require_once __DIR__ . '/VehicleTable.php';  ?>

    <?php } ?>

    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>