<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
include("db.php");


$word=$_POST['palabra'];
$mean=$_POST['significado'];


$query="INSERT INTO palabras(name,mean)VALUES ('$word','$mean');";

$resultado=$conexion->query($query);
if($resultado){
    echo"<script>alert('Done')</script>";
        echo"<script>window.location.href='index.php'</script>";
}
else{
    echo"<script>alert('Error')</script>";
        echo"<script>window.location.href='index.php'</script>";
}


?>
