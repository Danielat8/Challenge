<?php
require_once __DIR__ . "/Autoload.php";
require_once __DIR__ . "/Database/Connection.php";
require_once __DIR__ . "/classes/User.php";


function fetchUserFromDatabase($connObj, $username)
{
    $sql = "SELECT * FROM users WHERE username = :username";
    $pdo_statement = $connObj->prepare($sql);
    $pdo_statement->bindParam(":username", $username, PDO::PARAM_STR);
    $pdo_statement->execute();
    return $pdo_statement->fetch(PDO::FETCH_ASSOC);
}


$errors = ['password' =>  false, 'username' => false];
$validated = true;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input

    if (!array_key_exists('username', $_POST) || empty($_POST['username'])) {
        $errors['username'] = "<p style='color:red;'>Username is required.</p>";
        $validated = false;
    } elseif (strpos($_POST['username'], ' ') !== false) {
        $errors['username'] = "<p style='color:red;'>Username cannot contain empty spaces.</p>";
        $validated = false;
    } else {
        $username = $_POST['username'];
    }

    if (!array_key_exists('password', $_POST) || empty($_POST['password'])) {
        $errors['password'] =  "<p style='color:red;'>Password is required.</p>";
        $validated = false;
    } else
        $password = $_POST["password"];

    if ($validated) {
        $user = fetchUserFromDatabase($pdo, $username);
        $authenticated = true;
        if (empty($user)) {
            $errors['username'] =  "<p style='color:red;'>User not found</p>";
            $authenticated = false;
        } else {
            $userObject = new User($username, $password);
            if (!$userObject->authenticate($user['password'])) {
                $errors['password'] =  "<p style='color:red;'>Password not correct</p>";
                $authenticated = false;
            }
        }



        if ($authenticated) {
            $_SESSION["loggedin"];
            session_start();
            header("Location: Admin.php");
            exit();
        }
    }
}
