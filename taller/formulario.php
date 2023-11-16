
<?php 
    require 'template/header.php';
    require 'template/nav.php';
?>
<section class="py-5">
    <form action="agregar/guardar_2.php" method="POST">
        
    <label for="exampleInputEmail1" class="form-label" >Nombre</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre">
    <label for="exampleInputEmail1" class="form-label">Stock</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="stock">    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</section>
<?php
include('template/footer.php');
?>