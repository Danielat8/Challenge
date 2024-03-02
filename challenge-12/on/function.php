<?php
function verifyPassword($password, $hashedPassword)
{
    return password_verify($password, $hashedPassword);
}
function validateaboutInput($data)
{
    return htmlspecialchars(trim($data));
}

// Function to hash password
function hashPassword($password)
{
    return password_hash($password, PASSWORD_DEFAULT);
}

// Function to validate email format
function validateEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}
function checkExistingUser($username)
{
    $Users1 = file_get_contents("users.txt");
    $Users1 = trim($Users1);
    $Users1 = explode(PHP_EOL, $Users1);
    foreach ($Users1 as $row) {
        $Users3 = explode(",", $row);
        $Users5 = explode("=", $Users3[1]);
        if ($username == $Users5[0]) {
            return true;
        } else {
            return false;
        }
    }
}
function checkExistingPassword($password)
{
    $Users1 = file_get_contents("users.txt");
    $Users1 = trim($Users1);
    $Users1 = explode(PHP_EOL, $Users1);
    foreach ($Users1 as $row) {
        $Users3 = explode(",", $row);
        $Users5 = explode("=", $Users3[1]);
        if ($password == password_verify($password, $Users5[1])) {
            return true;
        } else {
            return false;
        }
    }
}
function Allusers()
{
    $Users1 = file_get_contents("users.txt");
    $Users1 = trim($Users1);
    $Users1 = explode(PHP_EOL, $Users1);
    return $Users1;
}
function validateUser($username, $password)
{
    $all = AllUsers();
    foreach ($all  as $usersRow) {
        $userstrue = explode(",", $usersRow);
        $credentials = explode("=", $userstrue[1]);
        if ($credentials[0] === $username && password_verify($password, $credentials[1])) {
            return true;
        }
        return false;
    }
}
function checkExistingEmail($email)
{

    $Users2 = file_get_contents("users.txt");
    $Users2 = trim($Users2);
    $Users2 = explode(PHP_EOL, $Users2);
    foreach ($Users2 as $row) {
        $Users4 = explode(",", $row);
        if ($email == $Users4[0]) {
            return true;
        } else {
            return false;
        }
    }
}
