<?php
$nombre2 =$_GET['nombre'];
$precio2 = $_GET['precio'];
$color2 =$_GET['color'];

#Llamar a la conexion
include_once "db.php";
$conectar = conectar();
$sql = "INSERT INTO camisas(nombre,precio,color) VAlUES('$nombre2','$precio2','$color2')";
$cquery = mysqli_query($conectar,$sql);
if ($cquery) {
    echo "<meta http-equiv=\"refresh\" content=\"0;URL=db.php\">";
}
?>
 