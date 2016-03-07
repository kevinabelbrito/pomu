<?php require '../../sql/Conexion.php'; ?>
<?php require '../../sql/Crud.php'; ?>
<?php require '../../sql/personal/Actualizar.php'; ?>
<?php require '../../templates/admin/antetitulo.php'; ?>
<title>Actualizar Perfil de Personal - Policia Municipal</title>
<?php require '../../templates/admin/header.php'; ?>
<div class="form-content">
	<h2>Actualizar datos de personal</h2>
	<strong><?php echo $mensaje; ?></strong>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<table>
			<tr>
					<td><label for="correo"><span class="icon-at"></span>Correo Electronico:</label></td>
					<td><input type="email" name="correo" id="correo" class="write-box" value="<?php echo $correo; ?>" maxlength="100"></td>
				</tr>
				<tr>
					<td><label for="phone"><span class="icon-phone"></span>Numero Telefonico:</label></td>
					<td>
						<input type="tel" name="phone" id="phone" class="write-box" value="<?php echo $telefono; ?>" maxlength="12">
					</td>
				</tr>
				<tr>
					<td><label for="residencia"><span class="icon-location"></span>Lugar de residencia:</label></td>
					<td><textarea name="residencia" id="residencia" cols="30" rows="5" class="write-box" maxlength="500"><?php echo $residencia; ?></textarea></td>
				</tr>
				<tr>
					<td><label for="cursos"><span class="icon-files"></span>Cursos realizados:</label></td>
					<td><textarea name="cursos" id="cursos" cols="30" rows="10" class="write-box" maxlength="1000"><?php echo $cursos; ?></textarea></td>
				</tr>
				<tr>
					<td><label for="experiencia"><span class="icon-cabinet2"></span>Experiencia laboral:</label></td>
					<td><textarea name="experiencia" id="experiencia" cols="30" rows="10" class="write-box" maxlength="1000"><?php echo $experiencia; ?></textarea></td>
				</tr>
				<tr>
					<td><label for="foraca"><span class="icon-graduate"></span>Formación Academica:</label></td>
					<td><select name="foraca" id="foraca" class="combo-box">
						<option value="<?php echo $formacion; ?>"><?php echo $formacion; ?></option>
						<option value="Bachiller">Bachiller</option>
						<option value="Tecnico Superior">Técnico Superior</option>
						<option value="Universitaria">Universitaria</option>
					</select></td>
				</tr>
				<tr>
					<td><label for="nomina"><span class="icon-coins"></span>Nómina:</label></td>
					<td><select name="nomina" id="nomina" class="combo-box">
						<option value="<?php echo $nomina; ?>"><?php echo $nomina; ?></option>
						<option value="Obrero contratado">Obrero contratado</option>
						<option value="Obrero Fijo">Obrero Fijo</option>
						<option value="Administrativo">Administrativo</option>
					</select></td>
				</tr>
				<tr>
					<td>
						<input type="hidden" name="id" value="<?php echo $id; ?>">
						<input type="hidden" name="actualizar">
					</td>
					<td>
						<input type="submit" value="Actualizar datos" class="button">
					</td>
				</tr>
		</table>
	</form>
	<div class="buttons"><a href="lista.php"><span class=" icon-cancel2"></span>Salir</a></div>
</div>
<?php require '../../templates/admin/footer.php'; ?>