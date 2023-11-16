<?php
  require 'database.php';
  session_start();

  $email=$_POST['email'];
  $pass=$_POST['password'];

    // if (isset($_SESSION['user_id'])) {
    // }


  if (!empty($email) && !empty($pass)) {
    $records = $conn->prepare('SELECT username, email, password FROM users WHERE email =:email');
    $records->bindParam(':email', $email);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if ($results > 0 ){
      $user = $results['username'];
      header("Location: ../tabla.php");

    } 
    elseif($results == 0) {
      echo
      '<script> 
      alert("no cincide");
      </script>;
    ';
    header("Location: ../index  .php");
      $message = 'Sus datos no coinciden'; 
    }
  }
  elseif (empty($email) || empty($pass)) {

    header("Location: ../index.php");
  }
  $_SESSION['pp']=$user;
  mysqli_close($conn);
?>

