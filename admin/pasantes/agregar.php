<?php require '../../sql/Conexion.php'; ?>
<?php require '../../sql/Crud.php'; ?>
<?php require '../../sql/pasantes/Agregar.php'; ?>
<?php require '../../templates/admin/antetitulo.php'; ?>
<title>Agregar pasantes - Policia Municipal</title>
<?php require '../../templates/admin/header.php'; ?>
<div class="form-content">
	<h2><span class="icon-user"></span>Agregar un nuevo pasante</h2>
	<strong><?php echo $mensaje; ?></strong>
	<form action="" method="post">
		<table>
			<tr>
				<td><label for="nombre"><span class="icon-pencil"></span>Nombre completo:</label></td>
				<td><input type="text" name="nombre" id="nombre" class="write-box" placeholder="Nombre y Apellido" maxlength="100"></td>
			</tr>
			<tr>
				<td><label for="cedula"><span class="icon-profile3"></span>Cedula de Identidad:</label></td>
				<td>
					<select name="nac" class="combo-box">
						<option value="V">V</option>
						<option value="E">E</option>
					</select>
					<input type="text" name="cedula" id="cedula" class="write-box combo" placeholder="Ej: 123456789" maxlength="9">
				</td>
			</tr>
			<tr>
				<td><label for="correo"><span class="icon-at"></span>Correo electronico:</label></td>
				<td><input type="email" name="correo" id="correo" class="write-box" placeholder="Ej: mail@ejemplo.com" maxlength="100"></td>
			</tr>
			<tr>
				<td><label for="telefono"><span class="icon-phone"></span>Numero Telefonico:</label></td>
				<td>
					<select name="linea" class="combo-box">
						<option value="0412">0412</option>
						<option value="0414">0414</option>
						<option value="0424">0424</option>
						<option value="0416">0416</option>
						<option value="0426">0426</option>
					</select>
					<input type="tel" name="telefono" id="telefono" class="write-box combo" placeholder="Ej: 1234567" maxlength="7">
				</td>
			</tr>
			<tr>
				<td><label for="uni"><span class="icon-library"></span>Universidad:</label></td>
				<td><input type="text" name="universidad" id="uni" class="write-box" maxlength="100"></td>
			</tr>
			<tr>
				<td><label for="esp"><span class="icon-graduate"></span>Especialidad:</label></td>
				<td><input type="text" name="especialidad" id="esp" class="write-box" maxlength="100"></td>
			</tr>
			<tr>
				<td><label><span class="icon-calendar2"></span>Periodo:</label></td>
				<td>
					<label for="desde">desde:</label>
					<input type="date" name="desde" id="desde" class="write-box" placeholder="año-mes-dia">
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<label for="hasta">hasta:</label>
					<input type="date" name="hasta" id="hasta" class="write-box" placeholder="año-mes-dia">
				</td>
			</tr>
			<tr>
				<td>
					<input type="hidden" name="registrar">
				</td>
				<td>
					<input type="submit" value="Agregar pasante" class="button">
					<input type="reset" value="Limpiar" class="button">
				</td>
			</tr>
		</table>
	</form>
</div>
<?php require '../../templates/admin/footer.php'; ?>