<?php
require('template/header.php')
?>

<?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Registrarse</h1>
    <span>o <a href="index.php">Iniciar Sesion</a></span>

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
  
    <section class="py-5">
        <form action="registro/signup.php" method="POST">
        <input name="nombre" type="text" class="form-control" placeholder="Ingrese su Nombre">
        <input name="email" type="text" class="form-control" placeholder="Ingrese su Email">
        <input name="password" type="password" class="form-control" placeholder="Ingrese su Contraseña">
        <input name="confirm_password" type="password" class="form-control" placeholder="Confirme su Contraseña">
        <input type="submit" class="btn btn-primary" value="Submit">
        </form>
    </section>

<?php
require('template/footer.php')
?>