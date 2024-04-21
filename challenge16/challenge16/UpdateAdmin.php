<?php
require_once __DIR__ . "/Autoload.php";

$registrations = [
    'vehicle_model_id' => $vehicle_model_id,
    'id' => $id
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $vehicle_model_id = $_POST['vehicle_model_id'];
    $id = $_GET['id'];
    $sql = "UPDATE `registrations` SET `vehicle_model_id` = :$vehicle_model_id WHERE `id` = :$id;";
    $pdo_statement = $pdo->prepare($sql);
    $pdo_statement->execute($registrations);
    header("Location:VehicleAdmin.php");
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
                            <div class="container mt-5">
                                <div class="row row-cols-1 row-cols-md-2 g-4">
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <form method="POST" action="">
                                                    <div class="container d-flex flex-column align-items-center justify-content-center">
                                                        <label for="vehicle_model_id" class="visually-hidden">Vehicle models</label>
                                                        <input type="text" class="form-control " name="modelid" id="modelid">

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