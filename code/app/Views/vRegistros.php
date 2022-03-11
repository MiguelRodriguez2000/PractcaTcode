<!DOCTYPE html>
<html>
<head>
	<title>Registros</title>
</head>
<body>
	<br>
	<div class="container">
		<h1><center>Registros actuales</center></h1>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Fecha de compra</th>
					<th>Descripciòn del articulo</th>
					<th>Cantidad de articulo</th>
					<th>Precio unitario del articulo</th>
					<th>Subtotal por articulos</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($usuarios as $usuario){?>
				<tr>
					 <td><?php echo $usuario['id_factura']; ?></td>
					 <td><?php echo $usuario['fecha_compra']; ?></td>
					 <td><?php echo $usuario['descripcion']; ?></td>
					 <td><?php echo $usuario['cantidad']; ?></td>
					 <td><?php echo $usuario['precio_u']; ?></td>
					 <td><?php echo $usuario['total']; ?></td>
					 <td><?php echo $usuario['estatus']; ?></td>
					 <td><a type="button" href="<?php echo base_url(); ?>/proyectoTWII/code/public/Home/eliminarRegistro/<?php echo $usuario['id_factura']; ?>">Eliminar</a></td>
				</tr>
				<?php }?>
			</tbody>
		</table>
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