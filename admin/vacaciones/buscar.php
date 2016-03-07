<?php require '../../sql/Conexion.php'; ?>
<?php require '../../sql/Crud.php'; ?>
<?php require '../../sql/inactivos/Buscar.php'; ?>
<?php require '../../sql/inactivos/Funciones.php'; ?>
<?php require '../../templates/admin/antetitulo.php'; ?>
<title>Personal de Vacaciones - Policia Municipal</title>
<?php require '../../templates/admin/header.php'; ?>
<?php 
if ($total == 0)
{
	$mensaje = '<span class=" icon-warning"></span>'."El personal con el Nro de cedula $cedula no tiene asignado un periodo de vacaciones";
	?>
<?php
}
else
{
?>
   <?php foreach ($filas as $fila):?>
   <table>
   	<tr>
   		<td><span class="icon-pencil"></span><b>Nombre:</b></td>
   		<td><?php echo obtener_nombre($fila['id_personal']); ?></td>
   	</tr>
   	<tr>
   		<td><span class="icon-profile3"></span><b>Cedula de Identidad:</b></td>
   		<td><?php echo obtener_cedula($fila['id_personal']); ?></td>
   	</tr>
   	<tr>
   		<td><span class="icon-coins"></span><b>Nómina:</b></td>
   		<td><?php echo obtener_nomina($fila['id_personal']); ?></td>
   	</tr>
   	<tr>
   		<td><span class="icon-calendar2"></span><b>Periodo:</b></td>
   		<td>desde: <?php echo $fila['desde']; ?></td>
   	</tr>
   	<tr>
   		<td></td>
   		<td>hasta: <?php echo $fila['hasta']; ?></td>
   	</tr>
   </table>
   <?php endforeach ?>
<?php
}
 ?>
 <strong><?php echo $mensaje; ?></strong>
 <br><br>
 <div class="buttons">
   	<a href="index.php"><span class="icon-arrow-left-thick"></span>Volver a la lista</a>
   </div>
<?php require '../../templates/admin/footer.php'; ?>