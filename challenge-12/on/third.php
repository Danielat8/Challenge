<!-- login -->
<?php
require_once __DIR__ . "/function.php";

$errors = ['password' => false, 'username' => false];
$validated = true;


// Main code for login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = ($_POST["username"]);
    $password = $_POST["password"];

    // Validate input
    if (empty($_POST['password'])) {
        $errors['password'] = "<p style='color:red;'>All fields are required.</p>";

        $validated = false;
    } elseif (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}$/", $_POST["password"])) {
        $errors['password'] = "<p style='color:red;'>Password must have at least one number, one special sign, and one uppercase letter.</p>";
        $validated = false;
    } else {
        $password = $_POST['password'];
    }

    if (empty($_POST['username'])) {
        $errors['username'] = "<p style='color:red;'>All fields are required.</p>";
        $validated = false;
    } elseif (strpos($username, ' ') !== false || !preg_match('/^[a-zA-Z0-9]+$/', $_POST["username"])) {
        $errors['username'] = "<p style='color:red;'>Username cannot contain empty spaces or special signs.</p>";
        $validated = false;
    }

    if (validateUser($username, $password)) {
        header("Location:welcome.php?username=$username");
        die();
    } else {
        if (!empty($_POST['username']) && (!empty($_POST['password']))) {
            $errors['password'] = "<p style='color:red;'>Wrong username/password combination.</p>";
            $errors['username'] = "<p style='color:red;'>Wrong username/password combination.</p>";
            $validated = false;
        }
    }
}



?>
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Log in</title>
</head>

<body>

    </form>

    <style>
        span {
            color: red;

        }

        .bg {
            animation: slide 3s ease-in-out infinite alternate;
            background-image: linear-gradient(-60deg, lightseagreen 50%, purple 50%);
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
    <div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <div class="container">
        <h1 class="mt-4 mb-5">Log in</h1>
        <form method="post" class="row g-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

            <div class="col-md-4 ">

                Username:<input class=" form-control" type="text" name="username" id="username"> <span><?= $errors['username'] ? $errors['username'] : ''; ?></span>

                <div class="col-md-4">
                </div>
                Password:<input class=" form-control" type="password" name="password" id="password"> <span><?= $errors['password'] ? $errors['password'] : ''; ?></span>
                <br>
                <br>
                <input type="submit" value="Log in" class="fw-bolder mb-2 mt-2  mx-2 btn btn-outline-info">
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>