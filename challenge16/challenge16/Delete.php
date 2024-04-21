<?php
require_once __DIR__ . "/Autoload.php";

function deleteVehicle($pdo, $id)
{
    $sql = "DELETE FROM registrations WHERE id = :id";
    $pdo_statement = $pdo->prepare($sql);
    $pdo_statement->bindParam(":id", $id, PDO::PARAM_INT);
    $pdo_statement->execute();
}
if (isset($_GET['id'])) {

    $registration = $_GET['id'];
    deleteVehicle($pdo, $registration);
    header("Location:Admin.php");
}
