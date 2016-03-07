<?php require '../../sql/Conexion.php'; ?>
<?php require '../../sql/Crud.php'; ?>
<?php require '../../sql/personal/Buscar.php'; ?>
<?php require '../../templates/admin/antetitulo.php'; ?>
<title>Perfil de Personal - Policia Municipal</title>
<?php require '../../templates/admin/header.php'; ?>
<?php
if ($total == 0)
{
    $mensaje = "El usuario que busca no existe.";
    ?>
    <strong><?php echo $mensaje; ?></strong>
    <br><br>
    <div class="buttons">
        <a href="lista.php"><span class="icon-arrow-left-thick"></span>Volver a la lista</a>
    </div>
<?php
}
else
{
?>
    <?php foreach ($filas as $fila):?>
<table>
    <tr>
        <td><span class="icon-pencil"></span><b>Nombre Completo:<b></td>
        <td><?php echo $fila['nombre']; ?></td>
    </tr>
    <tr>
        <td><span class="icon-profile3"></span><b>Cedula de Identidad:</b></td>
        <td><?php echo $fila['cedula']; ?></td>
    </tr>
    <tr>
        <td><span class="icon-calendar"></span><b>Fecha de Nacimiento:</b></td>
        <td><?php echo $fila['fechanac']; ?></td>
    </tr>
    <tr>
        <td><span class="icon-star-outline"></span><b>Lugar de Nacimiento:</b></td>
        <td><?php echo $fila['lugarnac']; ?></td>
    </tr>
    <tr>
        <td><span class="icon-at"></span><b>Correo Electrónico:</b></td>
        <td><?php echo $fila['correo']; ?></td>
    </tr>
    <tr>
        <td><span class="icon-phone"></span><b>Numero Telefonico:</b></td>
        <td><?php echo $fila['telefono']; ?></td>
    </tr>
    <tr>
        <td><span class="icon-location"></span><b>Lugar de residencia:<b></td>
        <td><?php echo $fila['residencia']; ?></td>
    </tr>
    <tr>
        <td><span class="icon-files"></span><b>Cursos realizados:</b></td>
        <td><?php echo $fila['cursos']; ?></td>
    </tr>
    <tr>
        <td><span class="icon-cabinet2"></span><b>Experiencia laboral:</b></td>
        <td><?php echo $fila['experiencia']; ?></td>
    </tr>
    <tr>
        <td><span class="icon-graduate"></span><b>Formación Academica:</b></td>
        <td><?php echo $fila['formacion']; ?></td>
    </tr>
    <tr>
        <td><span class="icon-coins"></span><b>Nómina</b></td>
        <td><?php echo $fila['nomina']; ?></td>
    </tr>
</table>
<br>
<div class="buttons">
    <a href="lista.php"><span class="icon-arrow-left-thick"></span>Volver a la lista</a>
    <a href="actualizar.php?id=<?php echo $fila['id']; ?>"><span class="icon-edit"></span>Actualizar</a>
</div>
<?php endforeach ?>
<?php
}
 ?>
