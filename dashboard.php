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
    <link rel="stylesheet" href="assets/bootstrap/css/button.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/bootstrap/css/astronaut.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <div class="masthead-content" style="height:1000px">
            <div class="container">
                <h3>Hello , <?php echo $data['name'] ?> ! </h3>
                <h1 class="masthead-heading mb-0">Dashboard&nbsp;</h1>

                <button class="custom-btn btn-1"><a href="add.php" style="text-decoration:none;color:white;">Add!</a> </button>
                <br>
                <br>
                <div class="container">

                    <div class="card shadow border-start-success py-2">
                        <div class="card-body">
                            <div class="row align-items-center no-gutters">
                                <div class="col me-2">

                                    <br>
                                    <table class="table">
                                        <thead>
                                            <tr>

                                                <th scope="col">Name</th>
                                                <th scope="col">Link</th>
                                                <th scope="col">Control</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            <?php



                                            $sql = "SELECT * FROM `bookmark` WHERE  creator = '{$data['email']}'";

                                            $result = mysqli_query($conn, $sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $row['name'] ?></td>
                                                    <td><?php echo $row['bookmark'] ?></td>
                                                    <td><a href="edit.php?id=<?php echo $row['id'] ?>"><i class="fa-solid fa-pen-to-square fa-2x" style="color: #000000;margin-right:10px"></i></a>
                                                        <a href="delete.php?id=<?php echo $row['id'] ?>"><i class="fa-sharp fa-solid fa-trash fa-2x" style="color: #000000;margin-left:10px"></i></a>
                                                    </td>


                                                </tr>
                                            <?php

                                            }
                                            ?>


                                        </tbody>
                                    </table>

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

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

<footer class="py-5 bg-black">
    <div class="container">
    <p class="text-center text-white m-0 small">Copyright&nbsp;© drewbyte&nbsp; 2023 <br>
    </div>
</footer>

</html>