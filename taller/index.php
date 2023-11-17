<?php require 'template/header.php' ?>

<h1 class="login_titulo">Iniciar Sesion</h1>
<form action="loginfl/validar.php" method="POST">

  <?php
  if (isset($_GET['error'])) {
  ?>
    <p class="parrafo_er">
      <?php
      echo $_GET['error'];
      ?>
    </p>
  <?php
  }
  ?>

  <input class="login_txt" type="text" name="email" placeholder="Ingrese su email">
  <input class="login_txt" type="password" name="password" placeholder="Ingrese su contrasena">
  <input class="login_bt" type="submit" name="bt_ingresar" value="Iniciar" > 
</form>

<?php require 'template/footer.php' ?>

