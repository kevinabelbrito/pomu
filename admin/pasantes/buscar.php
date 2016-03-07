<?php require '../../sql/Conexion.php'; ?>
<?php require '../../sql/Crud.php'; ?>
<?php require '../../sql/pasantes/Buscar.php'; ?>
<?php require '../../templates/admin/antetitulo.php'; ?>
<title>Perfil del pasante - Policia Municipal</title>
<?php require '../../templates/admin/header.php'; ?>
<?php 
if ($total == 0)
{
	$mensaje = "El pasante que intenta buscar no se encuentra registrado";
	?>
	<strong><?php echo $mensaje; ?></strong>
	<br><br>
	<div class="buttons">
        <a href="index.php"><span class="icon-arrow-left-thick"></span>Volver a la lista</a>
    </div>
<?php
}
else
{
	?>
	<?php foreach ($filas as $fila):?>
	<table>
		<tr>
			<td><span class="icon-pencil"></span><b>Nombre completo:</b></td>
			<td><?php echo $fila['nombre']; ?></td>
		</tr>
		<tr>
			<td><span class="icon-profile3"></span><b>Cedula de Identidad:</b></td>
			<td><?php echo $fila['cedula']; ?></td>
		</tr>
		<tr>
        <td><span class="icon-at"></span><b>Correo Electrónico:</b></td>
        <td><?php echo $fila['correo']; ?></td>
    </tr>
    <tr>
        <td><span class="icon-phone"></span><b>Numero Telefonico:</b></td>
        <td><?php echo $fila['telefono']; ?></td>
    </tr>
		<tr>
			<td><span class="icon-library"></span><b>Universidad:</b></td>
			<td><?php echo $fila['universidad']; ?></td>
		</tr>
		<tr>
			<td><span class="icon-graduate"></span><b>Especialidad:</b></td>
			<td><?php echo $fila['especialidad']; ?></td>
		</tr>
		<tr>
			<td><span class="icon-calendar2"></span><b>Periodo:</b></td>
			<td>desde: <?php echo $fila['desde']; ?></td>
		</tr>
		<tr>
			<td></td>
			<td>hasta: <?php echo $fila['hasta']; ?></td>
		</tr>
	</table>
	<br>
	<div class="buttons">
		<a href="../pasantes/"><span class="icon-arrow-left-thick"></span>Volver a la lista</a>
		<a href="actualizar.php?id=<?php echo $fila['id']; ?>"><span class="icon-edit"></span>Actualizar</a>
	</div>
<?php endforeach ?>
<?php
}
?>

<?php require '../../templates/admin/footer.php'; ?>