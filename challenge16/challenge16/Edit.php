<?php
require_once __DIR__ . "/Autoload.php";


$sql = "SELECT * FROM vehicle_models";
$pdo_statement = $pdo->prepare($sql);
$pdo_statement->execute();
$vehicleModels = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);

$errors = ['chassis_number' => false, 'production_year' => false, 'registration_number' => false, 'registration_to' => false, 'modelid' => false, 'typeid' => false, 'fuelid' => false];
$validated = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // vehicle_model_id	vehicle_type_id		fuel_type_id
    // Validate

    if (empty($_POST['chassis_number'])) {
        $errors['chassis_number'] = "<p style='color:red;'>Please enter the chassis number.</p>";
        $validated = false;
    }

    if (empty($_POST['production_year'])) {
        $errors['production_year'] =  "<p style='color:red;'>Please enter the production year.</p>";
        $validated = false;
    }
    if (empty($_POST['registration_number'])) {
        $errors['registration_number'] =  "<p style='color:red;'>Please enter the registration number.</p>";
        $validated = false;
    }
    if (empty($_POST['registration_to'])) {
        $errors['registration_to'] =  "<p style='color:red;'>Please enter the registration.</p>";
        $validated = false;
    }

    if (empty($_POST['modelid'])) {
        $errors['modelid'] = "<p style='color:red;'>Please choose one option.</p>";
        $validated = false;
    }
    if (empty($_POST['typeid'])) {
        $errors['typeid'] = "<p style='color:red;'>Please choose one option.</p>";
        $validated = false;
    }
    if (empty($_POST['fuelid'])) {
        $errors['fuelid'] = "<p style='color:red;'>Please choose one option.</p>";
        $validated = false;
    }

    if ($validated) {
        $userId = $_GET['id'];
        $vehicle_model_id =  $_POST['modelid'];
        $vehicle_type_id = $_POST['typeid'];
        $chassis_number = $_POST['chassis_number'];
        $production_year = $_POST['production_year'];
        $registration_number = $_POST['registration_number'];
        $fuel_type_id = $_POST['fuelid'];
        $registration_to = $_POST['registration_to'];


        $sql = "UPDATE registrations SET vehicle_model_id= :vehicle_model_id,vehicle_type_id =:vehicle_type_id,chassis_number = :chassis_number,production_year = :production_year,registration_number = :registration_number,fuel_type_id = :fuel_type_id,registration_to = :registration_to WHERE id = :id;";
        $pdo_statement = $pdo->prepare($sql);
        $pdo_statement->bindParam(":id", $userId, PDO::PARAM_INT);
        $pdo_statement->bindParam(':vehicle_model_id', $_POST['modelid'], PDO::PARAM_STR);
        $pdo_statement->bindParam(":vehicle_type_id", $_POST['typeid'], PDO::PARAM_STR);
        $pdo_statement->bindParam(":chassis_number", $_POST['chassis_number'], PDO::PARAM_STR);
        $pdo_statement->bindParam(":production_year", $_POST['production_year'], PDO::PARAM_STR);
        $pdo_statement->bindParam(":registration_number", $_POST['registration_number'], PDO::PARAM_STR);
        $pdo_statement->bindParam(":fuel_type_id", $_POST['fuelid'], PDO::PARAM_STR);
        $pdo_statement->bindParam(":registration_to", $_POST['registration_to'], PDO::PARAM_STR);
        $pdo_statement->execute();
        header("Location:Admin.php");
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
</nav>
<div class="container mt-5">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="">
                        <label for="" class="form-label pb-3">Vehicle models</label>
                        <select name="modelid" class="form-select mt-2 mb-3" id="modelid" required>
                            <option selected disabled>vehicle models</option>
                            <?php
                            foreach ($vehicleModels as &$model) {
                                echo '<option class="fw-bolder text-info" value="' . $model['id'] . '">' . $model['model_name'] . '</option>';
                            }
                            ?>
                        </select>
                        <?= $errors['modelid'] ? $errors['modelid'] : '' ?>

                        <label for="basic-url" class="form-label mt-2 fw-bolder">Vehicle chassis number</label>
                        <input for="basic-url" class=" form-control mt-2 fw-bolder" type="text" name="chassis_number" id="chassis_number"> <?= $errors['chassis_number'] ? $errors['chassis_number'] : ''; ?>
                        <div class="input-group">
                        </div>
                        <label for="form-text" class="form-label mt-2 fw-bolder">Registration number</label>
                        <input for="basic-text" class=" form-control mt-2 fw-bolder" type="text" name="registration_number" id="registration_number"> <?= $errors['registration_number'] ? $errors['registration_number'] : ''; ?><div class="input-group">
                        </div>
                        <label for="form-text" class="form-label mt-2 fw-bolder">Registration to </label>
                        <input for="basic-text" placeholder="mm/dd/yy" class=" form-control mt-2 fw-bolder" type="date" name="registration_to" id="registration_to"> <?= $errors['registration_to'] ? $errors['registration_to'] : ''; ?> <div class="input-group">
                        </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <div class="card-body ">
                    <label for="" class="form-label pb-3">Vehicle type</label>
                    <select name="typeid" class="form-select mt-2 mb-3" id="typeid">
                        <option selected disabled>vehicle type</option>
                        <option class="fw-bolder text-info" value="1">Sedan</option>
                        <option class="fw-bolder text-info" value="2">Coupe</option>
                        <option class="fw-bolder text-info" value="3">Hatchback</option>
                        <option class="fw-bolder text-info" value="4">Suv</option>
                        <option class="fw-bolder text-info" value="5">Minivan</option>
                    </select>
                    <?= $errors['typeid'] ? $errors['typeid'] : '' ?>

                    <label for="form-text" class="form-label mt-2 fw-bolder">Vehicle production </label>
                    <input for="basic-text" placeholder="mm/dd/yy" class=" form-control mt-2 fw-bolder" type="date" name="production_year" id="production_year"> <?= $errors['production_year'] ? $errors['production_year'] : ''; ?><div class="input-group">
                    </div>
                    <label for="fuelid" class="form-label pb-3">Fuel Type</label>
                    <select name="fuelid" class="form-select mt-2 mb-3" id="fuelid">
                        <option selected disabled>fuel type</option>
                        <option class="fw-bolder text-info" value="1">Gasoline</option>
                        <option class="fw-bolder text-info" value="2">Diesel</option>
                        <option class="fw-bolder text-info" value="3">Electric</option>
                    </select>
                    <?= $errors['fuelid'] ? $errors['fuelid'] : '' ?>

                </div>
                <div class="d-grid gap-2 col-6 mx-auto mt-5 mb-4">
                    <button value="Submit" type="submit" class="btn btn-primary " class=" fw-bolder btn btn-secondary text-primary border-primary">Sumbit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>