<?php
session_start();
$h=$_SESSION['ll'];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="#!">Start Bootstrap</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <?php
                            if($h=='editor') {
                                ?>
                                <li class="nav-item"><a class="nav-link active" aria-current="page" href="tabla.php">Productos</a></li>
                                <li class="nav-item"><a class="nav-link" href="formulario.php">Agregar</a></li>
                            <?php
                            }if($h=='administrador') {
                            ?>
                                <li class="nav-item"><a class="nav-link active" aria-current="page" href="tabla.php">Productos</a></li>
                                <li class="nav-item"><a class="nav-link" href="formulario.php">Agregar</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                            <?php
                            }if($h=='vis'){
                            ?>
                                <li class="nav-item"><a class="nav-link active" aria-current="page" href="tabla.php">Productos</a></li>
                            <?php
                            }
                            ?>

                        </ul>
                    </div>
                </div>
    </nav>
    </body>
</html>
