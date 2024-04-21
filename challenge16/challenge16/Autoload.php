<?php

require_once __DIR__ . "/Database/Connection.php";

$connection = new Connect("mysql", "localhost", "vehicle", "4306", "root", "");
$connection->Connection();
$pdo = $connection->getConnection();
