<?php 
include ('../loginfl/database.php');

$nombre=$_POST['nombre'];
$stock=$_POST['stock'];

$nom= strtolower($nombre);

$validar=mysqli_query($conn,"SELECT nombre from productos WHERE nombre='$nom'");
$r=mysqli_num_rows($validar);
if($r>0){

    $modificar=mysqli_query($conexion,"UPDATE productos set stock=stock+'$stock'
            WHERE nombre='$nom'");

    echo
        '<script> 
        location.href="guardar.php";
        </script>;
    ';
}
elseif($r=0){
    $insertar= mysqli_query($conexion,"INSERT INTO productos (nombre,stock,estado) 
    VALUES ('$nom','$stock','no prestado')");

    if($insertar){
        echo
            '<script> 
            location.href="guardar.php";
            </script>;
        ';

    }
}

mysqli_close($conexion);
// mysqli_close($conexion);
?>