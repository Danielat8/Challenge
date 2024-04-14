<?php
require_once __DIR__ . "/connect.php";

$connection = new Connect("mysql", "localhost", "user", "4306", "root", "");
$connection->Connection();
$conObj = $connection->getConnection();
