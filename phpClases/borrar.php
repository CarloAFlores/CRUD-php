<?php
$id3 = $_GET['id'];
#Llamar la conexion
include_once"db.php";
$cone = conectar();
#Consulta
$sql="DELETE FROM camisas WHERE id=$id3";
#Ejecutar
$query = mysqli_query($cone,$sql);
if ($query) {
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=db.php?borrar\">";
	}
?>