<?php
session_start();

include "connection.php";
include "function.php";

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password) && !is_numeric($email)) {


        $sql = "SELECT * FROM account WHERE email = '$email' limit 1";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if ($result && mysqli_num_rows($result) > 0) {

                $data = mysqli_fetch_assoc($result);

                if ($data['password'] === $password) {

                    $_SESSION['id'] = $data['id'];
                    header("Location: dashboard.php");
                    die;
                
                }
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>drew-byte</title>
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/bootstrap/css/astronaut.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark navbar-custom">
        <div class="container"><a class="navbar-brand" href="index.php">drew-byte</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbarResponsive"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="signup.php">Sign Up</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Log In</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="text-center text-white masthead">
        <div class="masthead-content" style="height: 500px">
            <div class="container">
                <h1 class="masthead-heading mb-0">Login&nbsp;</h1>
                <h2 class="masthead-subheading mb-0">Welcome back</h2>
                <div class="d-flex p-2 justify-content-center">
                    <div class="form-box">
                        <form class="form" method="post">

                            <span class="subtitle">Login with your email and password.</span>
                            <div class="form-container">
                                <input type="text" name="email" class="input" placeholder="Email">

                                <input type="password" name="password" class="input" placeholder="Password">
                            </div>
                            <button type="submit" name="submit">Login</button>
                        </form>
                        <div class="form-section">
                            <p>Don't have an account? <a href="signup.php">Signup</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
        <div class="bg-circle-5 bg-circle"></div>
        <div class="bg-circle-6 bg-circle"></div>
        <div class="bg-circle-7 bg-circle"></div>




    </header>
    <section>


    </section>
    <section></section>
    <section></section>
    <footer class="py-5 bg-black">
        <div class="container">
        <p class="text-center text-white m-0 small">Copyright&nbsp;© drewbyte&nbsp; 2023 <br>
        </div>
    </footer>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>