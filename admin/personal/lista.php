<?php require '../../sql/Conexion.php'; ?>
<?php require '../../sql/Crud.php'; ?>
<?php require '../../sql/personal/Lista.php'; ?>
<?php require '../../templates/admin/antetitulo.php'; ?>
<title>Nómina - Policia Municipal</title>
<?php require '../../templates/admin/header.php'; ?>
<h2><span class="icon-clipboard2"></span>Nómina</h2>
<div class="form-content">
	<?php if ($total == 0)
	{
		?>
		<strong>No hay ningún perfil de personal registrado.</strong>
		<?php
	}else
	{
		?>
		<form action="buscar.php" method="post">
		<table>
		<tr>
			<td><label for="cedula"><span class="icon-profile3"></span>Nro de Cedula:</label></td>
			<td>
				<select name="nac" class="combo-box">
					<option value="V">V</option>
					<option value="E">E</option>
			     </select>
			     <input type="text" name="cedula" id="cedula" class="write-box combo" maxlength="9">
		    </td>
			<td>
				<input type="hidden" name="busqueda">
				<input type="submit" value="Realizar Busqueda" class="button">
			</td>
		</tr>
	</table>
	</form>
		<table border="1px">
	<tr>
		<th>Cedula de Identidad</th>
		<th>Nombre Completo</th>
		<th>Acciones</th>
	</tr>
    <?php foreach ($filas as $fila):?>
	<tr>
		<td><?php echo $fila['cedula']; ?></td>
		<td><?php echo $fila['nombre']; ?></td>
		<td>
			<div class="buttons">
			<a href="perfil.php?id=<?php echo $fila['id']; ?>"><span class="icon-folder"></span>Ver</a>
			<a href="actualizar.php?id=<?php echo $fila['id']; ?>"><span class="icon-edit"></span>Actualizar</a>
			<a href="eliminar.php?id=<?php echo $fila['id']; ?>"><span class="icon-user-delete-outline"></span>Eliminar</a>
		    </div>
		</td>
	</tr>
    <?php endforeach ?>
</table>
		<?php
	}
	 ?>
</div>
<?php require '../../templates/admin/footer.php'; ?>