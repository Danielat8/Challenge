<!-- index.php -->
<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Sign Up / Log in</title>
    <style>
        .on {
            align-items: center;
            justify-content: center;
            display: flex;
            color: lightskyblue;
            padding-bottom: 20px;
            padding-top: 10px;
        }

        html {
            height: 100%;
        }

        body {
            margin: 0;
        }

        .bg {
            animation: slide 3s ease-in-out infinite alternate;
            background-image: linear-gradient(-60deg, #6c3 50%, #09f 50%);
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

        .content {
            background-color: rgba(255, 255, 255, .8);
            border-radius: .20em;
            box-shadow: 0 0 .20em rgba(200, 200, 200, .25);
            box-sizing: border-box;
            left: 50%;
            padding: 20vmin;
            position: fixed;
            text-align: center;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        h1 {
            font-family: monospace;
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
    <h1 class="on fw-bold ">Welcome to my challenge page</h1>
    <h2 class="on fw-bold ">If you want to continue, you need to log in and sing up </h2>


    <div class="content">
        <!-- <a href="second.php"><button>Sign Up</button></a> -->
        <!-- <a href="third.php"><button>Login</button></a> -->
        <div class="d-grid  mx-auto">
            <a href="second.php " target="_blank"><button type="button" class="fw-bolder  mt-4 mb-2 mx-2  btn btn-outline-info">Sing up</button></a>
            <a href="third.php" target="_blank"><button type="button" class="fw-bolder mb-2 mt-2  mx-2 btn btn-outline-info">Log in</button></a>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>