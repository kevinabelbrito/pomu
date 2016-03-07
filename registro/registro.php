<?php require '../sql/Conexion.php'; ?>
<?php require '../sql/Crud.php'; ?>
<?php require '../sql/access/Registro.php'; ?>
<?php require '../templates/access/antetitulo.php'; ?>
<title>Registrar - Policia Municipal</title>
<?php require '../templates/access/header.php'; ?>
<h1><span class="icon-addressbook"></span>Registrar nuevo administrador</h1>
<strong><?php echo $mensaje; ?></strong>
<form action="" method="post">
	<div class="controls">
		<label for="nombre" class="etiqueta"><span class="icon-pencil"></span>Nombre Completo:</label>
		<input type="text" name="nombre" id="nombre" class="text-box" placeholder="Nombre y Apellido" maxlength="100">
	</div>
	<div class="controls">
		<label for="usuario" class="etiqueta"><span class="icon-user-outline"></span>Usuario:</label>
		<input type="text" name="usuario" id="usuario" class="text-box" maxlength="100">
	</div>
	<div class="controls">
		<label for="clave" class="etiqueta"><span class="icon-lock-closed"></span>Clave:</label>
		<input type="password" name="clave" id="clave" class="text-box" maxlength="20">
	</div>
	<div class="controls">
		<label for="confirmar" class="etiqueta"><span class="icon-lock-closed"></span>Confirmar:</label>
		<input type="password" name="confirmar" id="confirmar" class="text-box" maxlength="20">
	</div>
	<div class="controls">
		<label for="cedula" class="etiqueta"><span class="icon-profile3"></span>Cedula de Identidad:</label>
		<select name="nac" class="combo-box">
			<option value="V">V</option>
			<option value="E">E</option>
		</select>
		<input type="text" name="cedula" id="cedula" class="text-box combo" maxlength="9">
	</div>
	<div class="controls">
		<label for="preg" class="etiqueta"><span class="icon-zip"></span>Pregunta secreta:</label>
		<input type="text" name="preg" id="preg" class="text-box" maxlength="100">
	</div>
	<div class="controls">
		<label for="resp" class="etiqueta"><span class="icon-clipboard3"></span>Respuesta secreta:</label>
		<input type="text" name="resp" id="resp" class="text-box" maxlength="100">
	</div>
	<div class="controls">
		<input type="hidden" name="registrar">
		<a href="../" class="link"><span class="icon-arrow-back"></span>Volver al inicio</a>
		<input type="submit" value="Registrar" class="button">
	</div>
</form>
<?php require '../templates/access/footer.php'; ?>