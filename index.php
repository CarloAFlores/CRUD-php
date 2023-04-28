<?php
require("database/db.php");
$cone = $parametros;
$cone->conexion();
$cone->consulta();
$cone->agregar();
$cone->borrar();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<link href="style/style.css" rel="stylesheet">
</head>
<body>
	<div class="cabeza">
		<h1 class="titulo">Compras</h1>
		<figure class="cabeza__figure">
			<img src="assets/comida1.jpg" class="img1">
		</figure>
	</div>
	<br>
	<br>
	<section class="formulario">
		<form action="" method="GET" autocomplete="off">
			<br>
			<label for="" class="etiqueta">Nombre del platillo</label>
			<input type="text" class="contenedor" name="nombre">
			<br>
			<br>
			<label for="" class="etiqueta">Precio</label>
			<input type="number" class="contenedor" name="precio">
			<br>
			<br>
			<div class="enviar"><input type="submit" class="submit" name="enviar"></div>

		</form>
	</section>
	<br>
	<table class="tabla">
		<tr>
			<th class="tabla__titulo">Numero</th>
			<th class="tabla__titulo">Nombre</th>
			<th class="tabla__titulo">Precio</th>
			<th class="tabla__titulo">Eliminar</th>
			<th class="tabla__titulo">Modificas</th>
		</tr>

	<?php if ($cone ->validacion) : ?>
		<?php while ($row = mysqli_fetch_object($cone ->validacion)) :  ?>
			<tr>
				<td class="tabla__datos"><?= $row->id ?></td>
				<td class="tabla__datos"><?= $row->nombre ?></td>
				<td class="tabla__datos">$<?= $row->precio ?></td>
				<td class="tabla__datos"><a class="borrar" href="index.php?id=<?= $row->id ?>">Borrar</a></td>
				<td class="tabla__datos"><a class="modificar" href="modificar.php?id=<?= $row->id ?>">Modificar</a></td>

			</tr>
		<?php endwhile;  ?>
	<?php endif; ?>
	</table>
</body>
</html>