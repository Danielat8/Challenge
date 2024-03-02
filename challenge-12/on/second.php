<!-- second.php -->
<?php
require_once __DIR__ . "/function.php";
// Function to validate input fields
$errors = ['password' => false, 'email' => false, 'username' => false];
$validated = true;

// code for sign up
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = validateaboutInput($_POST["username"]);
    $email = validateaboutInput($_POST["email"]);
    $password = hashPassword($_POST["password"]);

    // Validate input

    if (empty($_POST['username'])) {
        $errors['username'] = '<span>username is required!</span>';
        $validated = false;
    } elseif (strpos($username, ' ') !== false || !preg_match('/^[a-zA-Z0-9]+$/', $_POST["username"])) {
        $errors['username'] = "<p style='color:red;'>Username cannot contain empty spaces or special signs.</p>";
        $validated = false;
    } else {
        $username = $_POST['username'];
    }
    // kkkkk
    if (empty($_POST['email'])) {
        $errors['email'] = '<span>email is required!</span>';
        $validated = false;
    } elseif (strlen($email) < 5 || !validateEmail($email, $_POST["email"])) {
        $errors['email'] = "<p style='color:red;'>Email must have at least 5 characters before @.</p>";
        $validated = false;
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['password'])) {
        $errors['password'] = '<span>password is required!</span>';
        $validated = false;
    } elseif (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}$/", $_POST["password"])) {
        $errors['password'] = "<p style='color:red;'>Password must have at least one number, one special sign, and one uppercase letter.</p>";
        $validated = false;
    } else {

        $password = hashPassword($_POST["password"]);
    }
    // check email and username
    if (checkExistingUser($username)) {
        $errors['username'] =  "<p style='color:red;'>Username taken.</p>";
        $validated = false;
    }
    if (checkExistingEmail($email)) {
        $errors['email'] =  "<p style='color:yellow;'> Email already exists.</p>";
        $validated = false;
    }

    if ($validated) {
        file_put_contents("users.txt", "$email,$username=$password" . PHP_EOL, FILE_APPEND);
        header("Location: welcome.php?username=$username");
        exit();
    }
}



?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Sign Up</title>
    <style>
        span {
            color: red;

        }

        .bg {
            animation: slide 3s ease-in-out infinite alternate;
            background-image: linear-gradient(-60deg, lightcoral 50%, lightblue 50%);
            bottom: 0;
            left: -50%;
            opacity: .5;
            position: fixed;
            right: -50%;
            top: 0;
            z-index: -1;
        }

        .bg2 {
            animation-direction: alternate-reverse;
            animation-duration: 4s;
        }

        .bg3 {
            animation-duration: 5s;
        }

        @keyframes slide {
            0% {
                transform: translateX(-25%);
            }

            100% {
                transform: translateX(25%);
            }
        }
    </style>

</head>

<body>
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div class="container">
        <h1 class="mt-4 mb-5">Sign Up form</h1>
        <form method="post" class="row g-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="col-md-4 ">

                <!-- <input class=" form-control" type="text" name="username"><br> -->
                Username:<input class=" form-control" type="text" name="username" id="username"> <span><?= $errors['username'] ? $errors['username'] : ''; ?></span>

                <div class="col-md-4">

                </div>
                Email:<input class=" form-control" type="text" name="email" id="email"> <span><?= $errors['email'] ? $errors['email'] : ''; ?></span>

                <div class="col-md-4">
                </div>

                Password:<input class=" form-control" type="password" name="password" id="password"> <span><?= $errors['password'] ? $errors['password'] : ''; ?></span>

                <br>
                <br>
                <input type="submit" value="Sign Up" class="fw-bolder mb-2 mt-2  mx-2 btn btn-outline-info">
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>