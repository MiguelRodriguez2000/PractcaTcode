<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Actualizar registro</title>
	<style>
		body{
			background: #c2d6d6;
		}
	</style>
</head>
<body>
	<br><br><br>
	<h1><center>Registro encontrado</center></h1>
	<form method="POST" action="../actualizarRegistro">
		<div>	
		<center>ID: <input required type="text" name="id_factura" id="id_factura" value="<?php echo $id_factura; ?>" readonly></center>
		<br>
		<center>Fecha de la compra: <input required type="date" name="fecha" id="fecha" value="<?php echo $fecha ?>"></center>
		<br>
		<center>Descripciòn del articulo: <input required type="text" name="descripcion" id="descripcion" value="<?php echo $descripcion ?>"></center>
		<br>
		<center>Cantidad de articulo: <input required type="number" name="cantidad" id="cantidad" value="<?php echo $cantidad ?>"></center>
		<br>
		<center>Precio unitario: <input required type="number" name="precio_u" id="precio_u" value="<?php echo $cantidad ?>"></center>
		<br>
		<center><input type="submit" name="enviar" value="Registrar"></center>
	</form>
	</div>
	<br/><br/>
</body>
</html>