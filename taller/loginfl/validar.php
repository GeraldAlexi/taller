<?php

  if (!empty($_POST['bt_ingresar'])) {
    
    require '../conec/database.php';
    session_start();

    $email=$_POST['email'];
    $pass=$_POST['password'];

    $_SESSION['email']=$email;

    if (!empty($email) && !empty($pass)) {
      $records = $conn->prepare('SELECT username, email,perfil, pass FROM users WHERE email =:email');
      $records->bindParam(':email', $email);
      $records->execute();
      $results = $records->fetch(PDO::FETCH_ASSOC);

      if ($results > 0 && password_verify($pass,$results['pass'])){
        $perf = $results['perfil'];
        $user = $results['username'];
        $_SESSION['pp']=$user;
        $_SESSION['ll']=$perf;
        header("Location: ../tabla.php");
        exit();
      } 
      else{
        header("Location: ../index.php?error=El correo o la Contraseña son incorrectas");
        exit();
      }
    }
    else{
      header("Location: ../index.php?error=Ingrese un valor");
      exit();
    }
    
    mysqli_close($conn);
  }
?>

