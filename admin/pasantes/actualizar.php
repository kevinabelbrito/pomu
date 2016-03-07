<?php require '../../sql/Conexion.php'; ?>
<?php require '../../sql/Crud.php'; ?>
<?php require '../../sql/pasantes/Actualizar.php'; ?>
<?php require '../../templates/admin/antetitulo.php'; ?>
<title>Actualizar pasante - Policia Municipal</title>
<?php require '../../templates/admin/header.php'; ?>
<div class="form-content">
	<h2>Actualizar datos del pasante</h2>
	<strong><?php echo $mensaje; ?></strong>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<table>
			<tr>
				<td><label for="correo"><span class="icon-at"></span>Correo electronico:</label></td>
				<td><input type="email" name="correo" id="correo" class="write-box" value="<?php echo $correo; ?>" maxlength="100"></td>
			</tr>
			<tr>
				<td><label for="telefono"><span class="icon-phone"></span>Numero Telefonico:</label></td>
				<td><input type="tel" name="telefono" id="telefono" class="write-box combo" value="<?php echo $telefono; ?>" maxlength="12"></td>
			</tr>
			<tr>
				<td><label for="uni"><span class="icon-library"></span>Universidad:</label></td>
				<td><input type="text" name="universidad" id="uni" class="write-box" value="<?php echo $universidad; ?>" maxlength="100"></td>
			</tr>
			<tr>
				<td><label for="esp"><span class="icon-graduate"></span>Especialidad:</label></td>
				<td><input type="text" name="especialidad" id="esp" class="write-box" value="<?php echo $especialidad; ?>" maxlength="100"></td>
			</tr>
			<tr>
				<td><label><span class="icon-calendar2"></span>Periodo:</label></td>
				<td>
					<label for="desde">desde:</label>
					<input type="date" name="desde" id="desde" class="write-box" value="<?php echo $desde; ?>">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<label for="hasta">hasta:</label>
					<input type="date" name="hasta" id="hasta" class="write-box" value="<?php echo $hasta; ?>">
				</td>
			</tr>
			<tr>
				<td>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<input type="hidden" name="actualizar">
				</td>
				<td>
					<input type="submit" value="Actualizar pasante" class="button">
				</td>
			</tr>
		</table>
	</form>
	<div class="buttons"><a href="index.php"><span class=" icon-cancel2"></span>Salir</a></div>
</div>
<?php require '../../templates/admin/footer.php'; ?>