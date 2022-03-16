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
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($facturas as $factura){?>
				<tr>
					 <td><?php echo $factura['id_factura']; ?></td>
					 <td><?php echo $factura['fecha']; ?></td>
					 <td><?php echo $factura['descripcion']; ?></td>
					 <td><?php echo $factura['cantidad']; ?></td>
					 <td><?php echo $factura['precio_u']; ?></td>
					 <td><?php echo $factura['total']; ?></td>
					 <td><a type="button" href="<?php echo base_url(); ?>/practica/PractcaTcode-main/code/public/Home/eliminarRegistro/
					 <?php echo $usuario['id_factura']; ?>">Eliminar</a><a type="button" href="<?php echo base_url(); ?>
					 /practica/PractcaTcode-main/code/public/Home/buscarRegistro/<?php echo $usuario['id_factura']; ?>">Editar</a>
					</td>
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
		<a class="text-dark" href="<?php echo base_url();?>/proyectoTWII/code/public/Home/registro">Registrar nueva Factura</a>
	</div>
</footer>
</html>