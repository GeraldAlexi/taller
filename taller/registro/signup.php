<?php
require '../conec/database.php';

$nom=$_POST['nombre'];
$ema=$_POST['email'];
$pas=$_POST['password'];
$conf=$_POST['confirm_password'];

  if (!empty($ema) && !empty($pas) && !empty($conf) && !empty($nom)) {

    $records = $conn->prepare('SELECT email, username FROM users WHERE email =:email or username=:nom' );
    $records->bindParam(':email', $ema);
    $records->bindParam(':nom', $nom);
    $records->execute();
    $resultado = $records->fetch(PDO::FETCH_ASSOC);

    if ($resultado>0){
      header("Location: ../registrarse.php?error=El correo o el Nombre de usario ya existe");
    }else{
        if ($pas === $conf) {

          $sql = "INSERT INTO users (username,email, pass,perfil) VALUES (:nom,:email, :pass,'vis')";
          $stmt = $conn->prepare($sql);
          $stmt->bindParam(':nom',$nom);
          $stmt->bindParam(':email',$ema);
          $password = password_hash($pas, PASSWORD_BCRYPT);
          $stmt->bindParam(':pass', $password);

      
          if ($stmt->execute()) {
            header("Location: ../index.php?error=Cuenta creada");
          } else {
            header("Location: ../registrarse.php?error=Debe de haber un problema");
          }
        }
        else{
          header("Location: ../registrarse.php?error=La Contraseñas no coinciden");
          }
        
    }
  }
  else {
    header("Location: ../registrarse.php?error=Debe de llenar todos los campos");
  }
mysqli_close($conn);
?>
