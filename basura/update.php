<?php
include("db.php");
$conectar = conectar();

$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$color=$_POST['color'];
$sql2="UPDATE camisas SET nombre='$nombre'.precio='$precio',color='$color'";

$query = mysqli_query($conectar,$sql2);
if ($query) {
	// code...
	Header("Location: db.php");
}
 ?>