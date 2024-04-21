<?php
require_once __DIR__ . "/Autoload.php";

function deleteModel($pdo, $id)
{
    $sql = "DELETE FROM vehicle_models WHERE id = :id";
    $pdo_statement = $pdo->prepare($sql);
    $pdo_statement->bindParam(":id", $id, PDO::PARAM_INT);
    $pdo_statement->execute();
}
if (isset($_GET['id'])) {

    $vehicle_model = $_GET['id'];
    deleteModel($pdo, $vehicle_model);
    header("Location:VehicleAdmin.php");
}
