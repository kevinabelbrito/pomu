<?php require '../../sql/Conexion.php'; ?>
<?php require '../../sql/Crud.php'; ?>
<?php require '../../sql/admin/Clave.php'; ?>
<?php require '../../templates/admin/antetitulo.php'; ?>
<title>Cambiar clave - Policia Municipal</title>
<?php require '../../templates/admin/header.php'; ?>
<div class="form-content">
	<strong><?php echo $mensaje; ?></strong>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<table>
			<tr>
				<td><label for="clave">Clave actual:</label></td>
				<td><input type="password" name="clave" id="clave" class="write-box"></td>
			</tr>
			<tr>
				<td><label for="nclave">Nueva Clave:</label></td>
				<td><input type="password" name="nclave" id="nclave" class="write-box"></td>
			</tr>
			<tr>
				<td><label for="confirmar">Confirmar:</label></td>
				<td><input type="password" name="confirmar" id="confirmar" class="write-box"></td>
			</tr>
			<tr>
				<td>
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<input type="hidden" name="clave_actual" value="<?php echo $clave_actual; ?>">
					<input type="hidden" name="actualizar">
				</td>
				<td><input type="submit" value="Cambiar clave" class="button"></td>
			</tr>
		</table>
	</form>
</div>
<?php require '../../templates/admin/footer.php'; ?>