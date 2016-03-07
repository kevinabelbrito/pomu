<?php require '../../sql/Conexion.php'; ?>
<?php require '../../sql/Crud.php'; ?>
<?php require '../../sql/personal/Agregar.php'; ?>
<?php require '../../templates/admin/antetitulo.php'; ?>
<title>Agregar nuevo perfil de personal - Policia Municipal</title>
<?php require '../../templates/admin/header.php'; ?>
<div class="form-content">
		<h2><span class="icon-profile2"></span>Agregar un nuevo Perfil de Personal</h2>
		<br><br>
		<strong><?php echo $mensaje; ?></strong>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
			<table>
				<tr>
					<td><label for="nombre"><span class="icon-pencil"></span>Nombre Completo:</label></td>
					<td><input type="text" name="nombre" id="nombre" class="write-box" placeholder="Nombre y Apellido" maxlength="100"></td>
				</tr>
				<tr>
					<td><label for="cedula"><span class="icon-profile3"></span>Cedula de Identidad:</label></td>
					<td>
						<select name="nac" class="combo-box">
							<option value="V">V</option>
							<option value="E">E</option>
						</select>
						<input type="text" name="cedula" id="cedula" class="write-box combo" placeholder="ej:123456789" maxlength="9">
					</td>
				</tr>
				<tr>
					<td><label for="fn"><span class="icon-calendar"></span>Fecha de Nacimiento</label></td>
					<td><input type="date" name="fn" id="fn" class="write-box" placeholder="año-mes-dia"></td>
				</tr>
				<tr>
					<td><label for="ln"><span class="icon-star-outline"></span>Lugar de Nacimiento:</label></td>
					<td><input type="text" name="ln" id="ln" class="write-box" maxlength="100"></td>
				</tr>
				<tr>
					<td><label for="correo"><span class="icon-at"></span>Correo Electronico:</label></td>
					<td><input type="email" name="correo" id="correo" class="write-box" placeholder="mail@ejemplo.com" maxlength="100"></td>
				</tr>
				<tr>
					<td><label for="phone"><span class="icon-phone"></span>Numero Telefonico:</label></td>
					<td>
						<select name="linea" class="combo-box">
							<option value="0412">0412</option>
							<option value="0414">0414</option>
							<option value="0424">0424</option>
							<option value="0416">0416</option>
							<option value="0426">0426</option>
						</select>
						<input type="tel" name="phone" id="phone" class="write-box combo" placeholder="ej:1234567" maxlength="7">
					</td>
				</tr>
				<tr>
					<td><label for="residencia"><span class="icon-location"></span>Lugar de residencia:</label></td>
					<td><textarea name="residencia" id="residencia" cols="30" rows="5" class="write-box" maxlength="500"></textarea></td>
				</tr>
				<tr>
					<td><label for="cursos"><span class="icon-files"></span>Cursos realizados:</label></td>
					<td><textarea name="cursos" id="cursos" cols="30" rows="10" class="write-box" placeholder="Descripción(Periodo)" maxlength="1000"></textarea></td>
				</tr>
				<tr>
					<td><label for="experiencia"><span class="icon-cabinet2"></span>Experiencia laboral:</label></td>
					<td><textarea name="experiencia" id="experiencia" cols="30" rows="10" class="write-box" placeholder="Empresa - Puesto de trabajo (Periodo)" maxlength="1000"></textarea></td>
				</tr>
				<tr>
					<td><label for="foraca"><span class="icon-graduate"></span>Formación Academica:</label></td>
					<td><select name="foraca" id="foraca" class="combo-box">
						<option value="">Seleccione una Opción</option>
						<option value="Bachiller">Bachiller</option>
						<option value="Tecnico Superior">Técnico Superior</option>
						<option value="Universitaria">Universitaria</option>
					</select></td>
				</tr>
				<tr>
					<td><label for="nomina"><span class="icon-coins"></span>Nómina:</label></td>
					<td><select name="nomina" id="nomina" class="combo-box">
						<option value="">Seleccione una Opción</option>
						<option value="Obrero contratado">Obrero contratado</option>
						<option value="Obrero Fijo">Obrero Fijo</option>
						<option value="Administrativo">Administrativo</option>
					</select></td>
				</tr>
				<tr>
					<td>
						<input type="hidden" name="registrar">
					</td>
					<td>
						<input type="submit" value="Registrar Personal" class="button">
						<input type="reset" value="Limpiar" class="button">
					</td>
				</tr>
			</table>
		</form>
	</div>
<?php require '../../templates/admin/footer.php'; ?>