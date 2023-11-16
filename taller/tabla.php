
<?php
require 'template/header.php';
require 'template/nav.php';

session_start();
$h=$_SESSION['pp'];
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

</body>
</html>


<?php include 'template/footer.php';?>