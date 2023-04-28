<?php
include("db.php");
$con=conectar();

$id = $_GET['id'];
$sql="SELECT * FROM camisas WHERE id=$id";
$query = mysqli_query($con,$sql);
$row=mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
</body>
</html>