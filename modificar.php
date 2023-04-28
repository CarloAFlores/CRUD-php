<?php
require("database/db.php");
$cone = $parametros;
$cone->conexion();
$cone->consultaId();
$cone->actualizar();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<link href="style/style2.css" rel="stylesheet">
 	<title>Document</title>
 </head>

 <body>
 	<div class="cabeza">
 		<a class="regresar" href="index.php">Regresar</a>
 		<h2>EDITAR PRODUCTO</h2>
 		<div></div>
 	</div>
 	<br>
 	<br>
 	<?php $rows = mysqli_fetch_object($cone->validacionId) 	  ?>
 	<section class="formulario">
 	<form action="" method="GET" autocomplete="off">
 		<input type="hidden" name="id" value="<?= $rows->id ?> " readonly="readonly" >
 		<br>
 		<br>
 		<label for="" class="etiqueta">Nombre del nuevo platillo</label>
 		<input class="contenedor" type="text" name="nombre" value="<?= $rows->nombre ?>">
 		<br>
 		<br>
 		<label for="" class="etiqueta">Nuevo precio</label>
 		<input class="contenedor" type="number" name="precio" value="<?= $rows->precio ?>">
 		<br>
 		<br>
 		<div class="actualizar"><input class="submit" type="submit" name="actualizar" value="Actualizar"></div>
 	</form>
 	</section>
 </body>
 </html>