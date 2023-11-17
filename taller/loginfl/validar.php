<?php

  if (!empty($_POST['bt_ingresar'])) {
    
    require 'database.php';
    session_start();

    $email=$_POST['email'];
    $pass=$_POST['password'];

    if (!empty($email) && !empty($pass)) {
      $records = $conn->prepare('SELECT username, email, password FROM users WHERE email =:email');
      $records->bindParam(':email', $email);
      $records->execute();
      $results = $records->fetch(PDO::FETCH_ASSOC);

      if ($results > 0 ){
        $user = $results['username'];
        $_SESSION['pp']=$user;
        header("Location: ../tabla.php");
        exit()
      } 
      else{
        header("Location: ../index.php?error=El correo o la Contraseña son incorrectas");
        exit()
      }
    }
    else{

      header("Location: ../index.php?error=Ingrese un valor");
    }
    
    mysqli_close($conn);
}
?>

