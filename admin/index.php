<?php require '../templates/admin/antetitulo.php'; ?>
	<title>Policia Municipal</title>
<?php require '../templates/admin/header.php'; ?>
<h2><span class="icon-addressbook"></span>Datos del usuario en linea</h2>
<table>
	<tr>
		<td><span class="icon-pencil"></span><b>Nombre Completo:</b></td>
		<td><?php echo $nombre_admin; ?></td>
	</tr>
	<tr>
		<td><span class="icon-profile3"></span><b>Cedula de Identidad:</b></td>
		<td><?php echo $cedula_admin; ?></td>
	</tr>
	<tr>
		<td><span class="icon-user-outline"></span><b>Usuario:</b></td>
		<td><?php echo $usuario_admin; ?></td>
	</tr>
</table>
<br><br>
<div class="buttons">
	<a href="usuario/actualizar.php?id=<?php echo $id_admin; ?>"><span class="icon-edit"></span>Modificar datos</a>
	<a href="usuario/cambio_clave.php?id=<?php echo $id_admin; ?>"><span class="icon-key"></span>Cambiar clave</a>
</div>
<?php require '../templates/admin/footer.php'; ?>


	