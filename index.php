<?php require 'sql/Conexion.php';?>
<?php require 'sql/access/Seleccionar.php'; ?>
<?php require 'sql/access/Logear.php'; ?>
<?php require 'templates/access/antetitulo.php'; ?>
	<title>Acceder - Policia Municipal</title>
	<?php require 'templates/access/header.php'; ?>
	<h1><span class="icon-key"></span>Acceder</h1>
	<strong><?php echo $mensaje; ?></strong>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<div class="controls">
			<label for="usuario" class="etiqueta"><span class="icon-user"></span>Usuario:</label>
			<input type="text" name="usuario" id="usuario" class="text-box" maxlength="100">
		</div>
		<div class="controls">
			<label for="clave" class="etiqueta"><span class="icon-locked"></span>Clave:</label>
			<input type="password" name="clave" id="clave" class="text-box" maxlength="20">
		</div>
		<div class="controls">
			<input type="hidden" name="login">
			<a href="registro/serial.php" class="link"><span class=" icon-user-add-outline"></span>Registrar</a>
			<a href="recuperacion/" class="link"><span class=" icon-profile"></span>¿Olvido su Usuario y/o Clave?</a>
			<input type="submit" value="Entrar" class="button">
		</div>
	</form>
	<?php require'templates/access/footer.php'; ?>
	
			
		