<?php
require_once __DIR__ . "/Autoload.php";
require_once __DIR__ . "/Database/Connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $model = $_POST['model'];
    $sql = "INSERT INTO vehicle_models (model_name) VALUES (:model_name)";
    $pdo_statement = $pdo->prepare($sql);
    $pdo_statement->bindParam(":model_name", $model, PDO::PARAM_STR);
    $pdo_statement->execute();
}
$sql = "SELECT * FROM vehicle_models";
$pdo_statement = $pdo->prepare($sql);
$pdo_statement->execute();
$vehicleModels = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);

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
            <a class="navbar-brand" href="./index.php">Vehicle Registration</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <div class="navbar-nav me-auto mb-2 mb-lg-0">
                </div>
                <a class="navbar-brand text-info" href="./Logout.php">Logout</a>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <div class="card-body bg-info">
                        <form method="POST" action="">
                            <label for="model" class="form-label pb-3 fw-bolder">Add new model</label>
                            <input type="text" name="model" id="model">
                            <button class="btn btn-warning fw-bolder">Add</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <div class="container-xxl">
        <table class=" mt-5 table table-bordered">
            <thead>
                <tr>
                    <th> Vehicle model name</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($vehicleModels as $registration) {
                ?>
                    <tr>
                        <td><?php echo $registration['model_name'] ?></td>
                        <td> <a href="./DeleteAdmin.php?id=<?= $registration['id'] ?>"> <button type="button" class="btn btn-danger">Delete</button>
                                <a href="./EditAdmin.php?id=<?= $registration['id'] ?>"> <button type="button" class="btn btn-warning">Edit</button>
                        </td>
                    </tr>
                <?php
                }

                ?>


    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>