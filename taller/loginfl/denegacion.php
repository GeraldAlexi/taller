<?php
session_start();
$permiso=$_SESSION['ll'];


if ($permiso=='vis') {

    echo'<script>   
    location.href="tabla.php";
    </script>';
    die();
}


?>