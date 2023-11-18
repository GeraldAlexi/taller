
<?php
require 'template/header.php';
require 'template/nav.php';


$h=$_SESSION['pp'];
$q=$_SESSION['ll'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>bienvenido</h1>
    <br> Bienvenido 
    <?php echo"$h";?>
    <?php echo"$q";?>

</body>
</html>


<?php include 'template/footer.php';?>
