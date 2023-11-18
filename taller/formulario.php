
<?php 
    require 'loginfl/denegacion.php';
    require 'template/header.php';
    require 'template/nav.php';
?>
<section class="py-5">
    <form class="formulario"action="agregar/guardar_2.php" method="POST">
        
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
        
    <label for="exampleInputEmail1" class="form-label" >Nombre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre">
    <label for="exampleInputEmail1" class="form-label" >Descripción</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="descrip">
    <label for="exampleInputEmail1" class="form-label">Stock</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="stock">    
    <button type="submit" class="btn btn-primary" style="margin: inherit;margin-top: 15px;">Submit</button>
    </form>

</section>
<?php
include('template/footer.php');
?>
