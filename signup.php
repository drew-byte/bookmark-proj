<?php

session_start();

include "connection.php";
include "function.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   

    $sql1 = "INSERT INTO `account`(id, name, email, password) VALUES (NULL,'$name','$email','$password')";

    $result = mysqli_query($conn, $sql1);

    header("Location: login.php");
    die;
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
                <h1 class="masthead-heading mb-0">Sign Up&nbsp;</h1>
                <h2 class="masthead-subheading mb-0">Fill up the form</h2>
                <div class="d-flex p-2 justify-content-center" style="">
                    <div class="form-box">
                        <form class="form" method="post">
                         
                            <span class="subtitle">Create a free account with your email.</span>
                            <div class="form-container">
                                <input type="text" class="input" name="name" placeholder="Full Name">
                                <input type="email" class="input" name="email" placeholder="Email">
                                <input type="password" class="input" name="password" placeholder="Password">
                            </div>
                            <button name="submit" >Sign up</button>
                        </form>
                        <div class="form-section">
                            <p>Have an account? <a href="login.php">Log in</a> </p>
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