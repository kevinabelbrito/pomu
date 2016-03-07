<?php require '../../sql/Conexion.php'; ?>
<?php require '../../sql/Crud.php'; ?>
<?php require '../../sql/admin/Actualizar.php'; ?>
<?php require '../../templates/admin/antetitulo.php'; ?>
<title>Modificar datos - Policia Municipal</title>
<?php require '../../templates/admin/header.php'; ?>
<div class="form-content">
	<strong><?php echo $mensaje; ?></strong>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<table>
			<tr>
				<td><label for="user">Usuario:</label></td>
				<td><input type="text" name="usuario" id="user" class="write-box" value="<?php echo $usuario; ?>"></td>
			</tr>
			<tr>
				<td><label for="preg">Pregunta secreta:</label></td>
				<td><input type="text" name="pregunta" id="preg" class="write-box" value="<?php echo $pregunta; ?>"></td>
			</tr>
			<tr>
				<td><label for="resp">Respuesta secreta:</label></td>
				<td><input type="text" name="respuesta" id="resp" class="write-box" value="<?php echo $respuesta; ?>"></td>
			</tr>
			<tr>
				<td>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<input type="hidden" name="actualizar">
				</td>
				<td><input type="submit" value="Actualizar datos" class="button"></td>
			</tr>
		</table>
	</form>
</div>
<?php require '../../templates/admin/footer.php'; ?>