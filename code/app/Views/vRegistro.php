<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario</title>
	<style>
		body{
			background: #c2d6d6;
		}
	</style>
</head>
<body>
	<br><br><br>
	<h1><center>Registro</center></h1>
	<h2><center>¡¡Bienvenido!!</center></h2>
	<h3><center>Ingrese correctamente sus datos</center></h3>
	<form method="POST" action="../Home/insertarForm">
		<div>	
		<center>Fecha de la compra: <input required type="date" name="fecha" id="fecha"></center>
		<br>
		<center>Descripciòn del articulo: <input required type="text" name="descripcion" id="descripcion"></center>
		<br>
		<center>Cantidad de articulo: <input required type="num" name="cantidad" id="cantidad"></center>
		<br>
		<center>Precio unitario: <input required type="num" name="precio_u" id="precio_u"></center>
		<br>
		<center><input type="submit" name="enviar" value="Registrar"></center>
	</form>
	</div>
	<br/><br/>
</body>
</html>
