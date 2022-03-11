<!DOCTYPE html>
<html>
<head>
	<title>Ingresado</title>
</head>
<body>
	<br>
	<div class="container">
		<h1><center>Registro actual ingresado</center></h1>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Correo</th>
					<th>Contraseña</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Rol</th>
					<th>Estatus</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					 <td><?php echo $id_usuario; ?></td>
					 <td><?php echo $correo; ?></td>
					 <td><?php echo $contra; ?></td>
					 <td><?php echo $nombre; ?></td>
					 <td><?php echo $apellido; ?></td>
					 <td><?php echo $rol; ?></td>
					 <td><?php echo $estatus; ?></td>
				</tr>
			</tbody>
		</table>
		<form method="POST" action="<?php echo base_url();?>/proyectoTWII/code/public/Home/buscarRegistro">
			<input type="hidden" name="id_usuario" value="<?php echo $id_usuario;?>">
			<button type="submit">Actualizar datos</button>
		</form>
	</div>
	<br/><br/>
</body>
<footer>
	<br>
	<div class="text-center text-dark p-3" style="background-color: rgba(0,0,0,0.2);">
		<i class="bi bi-badge-cc"></i> 2022:
		<a class="text-dark" href="<?php echo base_url();?>/proyectoTWII/code/public/Home/bienvenida">Home</a>
	</div>
</footer>
</html>