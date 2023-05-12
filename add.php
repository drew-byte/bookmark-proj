<?php
session_start();

include "connection.php";
include "function.php";
$data = check_login($conn);

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
                    <li class="nav-item"><a class="nav-link" href="login.php">Logout</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="text-center text-white masthead">
        <div class="masthead-content" style="height: 500px">
            <div class="container">
                <h3>Hello , <?php echo $data['name'] ?> ! </h3>
                <h1 class="masthead-heading mb-0">Add Page&nbsp;</h1>
                <div class="container">

                <div class="card shadow border-start-success py-2">
                        <div class="card-body">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">
                                <?php 
                                        
                                        if(isset($_POST['submit']))
                                        {
                                            $name = $_POST['name'];
                                            $bookmark = $_POST['bookmark'];
                                            $creator = $data['email'];

                                            $sql = "INSERT INTO `bookmark` (id,name,bookmark,creator) VALUES (NULL,'$name','$bookmark','$creator')";
                                            $result = mysqli_query($conn, $sql);
                                            if ($result) {
                                                header("Location: dashboard.php");
                                            }
                                        }
                                        
                                        ?>

                                    <br>
                                    <form method="post">
                                   
                                        <div class="row mt-3">
                                            <div class="col col-lg-4">
                                                <label for="name" class="form-label text-dark">Name of Bookmark: </label>
                                                <input type="text" class="form-control" name="name" placeholder="Name">

                                            </div>
                                            <div class="col col-lg-8">
                                                <label for="bookmark" class="form-label text-dark">Link: </label>
                                                <input type="text" class="form-control" name="bookmark" placeholder="https://jhaysonsantostoring.com">
                                            </div>
                                           
                                        </div>
                                     
                                        
                                      
                                        <br>
                                        
                                        <div class="text-dark fw-bold h5 mb-0" style="height: 24px">
                                        
                                            <button type="submit" name="submit" class="btn btn-success text-white">Add</button>
                                            <button type="button" class="btn btn-danger"><a href="dashboard.php" class="text-white" style="text-decoration:none">Cancel</a></button>
                                        </div>
                                        
                                       
                                    </form>
                                
                                </div>
                            </div>
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