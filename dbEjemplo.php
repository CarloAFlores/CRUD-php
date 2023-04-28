<?php
function conectar(){
	$server = "localhost";
	$user = "root";
	$pass = "Linux3529600**";
	$db = "ropa";
	$conectar = mysqli_connect($server,$user,$pass,$db) or die("No se conect");
	return $conectar;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
</head>
<body>
	<div class="cabeza">
		<h1 class="titulo">Compras</h1>
		<figure class="cabeza__figure">
			<img src="camisa1.jpg" class="img1">
		</figure>
	</div>

	<section class="formulario">
		<form action="insertar.php">
			<br>
			<label for="" class="etiqueta">Nombre del producto</label>
			<input type="text" name="nombre" class="contenedor">
			<br>
			<br>
			<label for="" class="etiqueta">Precio</label>
			<input type="number" name="precio" class="contenedor">
			<br>
			<br>
			<label for="" class="etiqueta">Color</label>
			<input type="text" name="color" class="contenedor">
			<br>
			<br>
			<div class="enviar"><input type="submit" value="Registrar" class="submit"></div>

		</form>
	</section>


	<table class="tabla">
		<tr >
			<th class="tabla__titulo">N°</th>
			<th class="tabla__titulo">Nombre</th>
			<th class="tabla__titulo">Precio</th>
			<th class="tabla__titulo">Color</th>
			<th class="tabla__titulo">Eliminar</th>
			<th class="tabla__titulo">Modificar</th>
		</tr>
	
	<?php
	$consu = conectar();
	$sql="SELECT * FROM camisas";
	$query = mysqli_query($consu,$sql);
	$contador = 1;
	?>

	<?php if ($query) : ?>
		<?php while ($row = mysqli_fetch_assoc($query)) : ?>
			
		<tr>
			<td class="tabla__datos"><?= $row["id"]; ?></td>
			<td class="tabla__datos"><?= $row["nombre"]; ?></td>
			<td class="tabla__datos">$<?=$row["precio"]; ?></td>
			<td class="tabla__datos"><?= $row["color"]; ?></td>
			<td class="tabla__datos"><a class="borrar" href="borrar.php?id=<?= $row["id"] ?>">Eliminar</a></td>
			<td class="tabla__datos"><a class="modificar" href="actualizar.php?id=<?= $row["id"] ?>">Modificar</a></td>
			<br>
		</tr>
		<?php $contador++; ?>
			<?php endwhile; ?>
		<?php endif; ?>

	</table>

</body>
</html>