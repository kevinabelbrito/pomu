<?php require '../sql/Conexion.php'; ?>
<?php require '../sql/Crud.php'; ?>
<?php require '../sql/access/Clave.php'; ?>
<?php require '../templates/access/antetitulo.php'; ?>
<title>Recuperacion de Usuario y Clave - Policia Municipal</title>
<?php require '../templates/access/header.php' ?>
<h1><span class="icon-locked"></span>Recuperar Usuario y Clave</h1>
<strong><?php echo $mensaje; ?></strong>
<form action="" method="post">
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
		<strong><?php echo $recuperada; ?></strong>
	</div>
	<div class="controls">
		<input type="hidden" name="recuperar">
		<a href="../" class="link"><span class=" icon-arrow-back"></span>Atras</a>
		<input type="submit" value="Recuperar clave" class="button">
	</div>
	<div class="controls"></div>
</form>
<?php require '../templates/access/footer.php'; ?>