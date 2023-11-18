<?php 
require ('../conec/database.php');

$nombre=$_POST['nombre'];
$stock=$_POST['stock'];
$descrip=$_POST['descrip'];

$nom= strtolower($nombre);
$descrip= strtolower($descrip);


if (!empty($nombre) && !empty($stock) && !empty($descrip)){
$validar=$conn->prepare("SELECT nombre from productos WHERE nombre=:nom and descripcion=:descrip");
$validar->bindParam(':nom', $nom);
$validar->bindParam(':descrip', $descrip);
$validar->execute();
$r = $validar->fetch(PDO::FETCH_ASSOC);
if($r > 0){
    modi($nom,$descrip,$stock,$conn);
}
else {
    inser($nom,$descrip,$stock,$conn);

}


function modi($n,$des,$sto,$con){

    $modificar=$con->prepare("UPDATE productos set stock=stock + :stock WHERE nombre=:nom and descripcion=:descrip");
    $modificar->bindParam(':nom', $n);
    $modificar->bindParam(':stock', $sto);
    $modificar->bindParam(':descrip', $des);
    $modificar->execute();
    header("Location:../formulario.php");
    exit();

}
function inser($n,$des,$sto,$con){

    $insertar=$con->prepare("INSERT INTO productos (nombre,stock,descripcion) VALUES (:nombre, :stock, :descrip)");
    $insertar->bindParam(':nombre', $n);
    $insertar->bindParam(':stock', $sto);
    $insertar->bindParam(':descrip', $des);
    $insertar->execute();

    if($insertar){

        header("Location:../formulario.php");
        exit();
    }
}
}
else{
    header("Location: ../formulario.php?error=Faltan datos por agregar");
    exit();

}



mysqli_close($conn);
?>
