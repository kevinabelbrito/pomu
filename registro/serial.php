<?php require '../sql/access/Keys.php'; ?>
<?php require '../templates/access/antetitulo.php'; ?>
<title>Serial Keys</title>
<?php require '../templates/access/header.php'; ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	<div class="controls">
		<label for="serial" class="etiqueta"><span class="icon-key-outline"></span>Serial Keys:</label>
		<strong><?php echo $mensaje; ?></strong>
		<input type="password" name="serial" id="serial" class="text-box">
	</div>
	<div class="controls">
		<input type="hidden" name="key">
		<a href="../index.php" class="link"><span class=" icon-arrow-back"></span>Atras</a>
		<input type="submit" value="Validar" class="button">
	</div>
</form>
<?php require '../templates/access/footer.php'; ?>