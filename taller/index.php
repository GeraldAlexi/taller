<!-- 


  // session_start();

  // require 'loginfl/database.php';

  // if (isset($_SESSION['user_id'])) {
  //   $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
  //   $records->bindParam(':id', $_SESSION['user_id']);
  //   $records->execute();
  //   $results = $records->fetch(PDO::FETCH_ASSOC);

  //   $user = null;

  //   if (count($results) > 0) {
  //     $user = $results;
  //   }
  // }



  // session_start();

  // if (isset($_SESSION['user_id'])) {
  //   header('Location: /loginfl');
  // }
  // require 'loginfl/database.php';

  // if (!empty($_POST['email']) && !empty($_POST['password'])) {
  //   $records = $conn->prepare('SELECT id, username, email, password FROM users WHERE email = :email');
  //   $records->bindParam(':email', $_POST['email']);
  //   $records->execute();
  //   $results = $records->fetch(PDO::FETCH_ASSOC);

  //   $message = '';

  //   if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
  //     $_SESSION['user_id'] = $results['id'];
  //   } else {
  //     $message = 'Sus datos no coinciden';


-->
<?php require 'template/header.php' ?>
<h1 class="login_titulo">Iniciar Sesion</h1>

<form action="loginfl/validar.php" method="POST">
    <input class="login_txt" type="text" name="email" placeholder="Ingrese su email">
    <input class="login_txt" type="password" name="password" placeholder="Ingrese su contrasena">
    <input class="login_bt" type="submit" value="Iniciar" > 
</form>

<?php require 'template/footer.php' ?>

