<?php
require_once __DIR__ . "/Autoload.php";
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
}

$sql = "SELECT * FROM vehicle_models WHERE id = :id";
$pdo_statement = $pdo->prepare($sql);
$pdo_statement->bindParam(":id", $userId, PDO::PARAM_INT);
$pdo_statement->execute();
$model = $pdo_statement->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $vehicle_model_id = $_POST['vehicle_model_id'];
    $sql = "UPDATE vehicle_models SET model_name = :model_name WHERE id = :id";
    $pdo_statement = $pdo->prepare($sql);
    $pdo_statement->bindParam(":id", $userId, PDO::PARAM_INT);
    $pdo_statement->bindParam(':model_name', $vehicle_model_id, PDO::PARAM_STR);
    $pdo_statement->execute();
    header("Location: VehicleAdmin.php");
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
    <div class="container ">
        <form method="POST" action="">
            <div class="row row-cols-3  justify-content-center align-items-center">
                <div class="col-4 mt-4 ">
                    <label for="" class="form-label pb-3 fw-bolder">Vehicle models</label>
                    <input value="<?= $model['model_name'] ?>" name="vehicle_model_id" type="text">
                    <div class="d-grid gap-1 col-2 mx-auto">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
                <br>
            </div>
        </form>
    </div>
    </div>
    </div>
    </div>