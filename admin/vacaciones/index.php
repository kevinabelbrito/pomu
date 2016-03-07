<?php require '../../sql/Conexion.php'; ?>
<?php require '../../sql/Crud.php'; ?>
<?php require '../../sql/inactivos/Vacaciones.php'; ?>
<?php require '../../sql/inactivos/Funciones.php'; ?>
<?php require '../../templates/admin/antetitulo.php'; ?>
<title>Personal de vacaciones - Policia Municipal</title>
<?php require '../../templates/admin/header.php'; ?>
<h2><span class="icon-suitcase2"></span>Ver personal en periodo de vacaciones</h2>
<div class="form-content">
    <?php if ($total == 0)
    {
        $mensaje = "No hay personal con periodo de vacaciones asignado.";
        ?>
        <strong><?php echo $mensaje; ?></strong>
        <?php
    }
    else
    {?>
    <form action="buscar.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="cedula"><span class="icon-profile3"></span>Nro de Cedula:</label>
                </td>
                <td>
                    <select name="nac" id="" class="combo-box">
                        <option value="V">V</option>
                        <option value="E">E</option>
                    </select>
                    <input type="text" name="cedula" id="cedula" class="write-box combo" maxlength="9">
                </td>
                <td>
                    <input type="hidden" name="motivo" value="vacaciones">
                    <input type="hidden" name="busqueda">
                    <input type="submit" value="Realizar busqueda" class="button">
                </td>
            </tr>
        </table>
    </form>
    <table border="1px">
        <tr>
            <th>Cedula de Identidad</th>
            <th>Nombre completo</th>
            <th>Nomina</th>
            <th>Periodo</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($filas as $fila):?>
        <tr>
            <td><?php echo obtener_cedula($fila['id_personal']); ?></td>
            <td><?php echo obtener_nombre($fila['id_personal']); ?></td>
            <td><?php echo obtener_nomina($fila['id_personal']); ?></td>
            <td><?php echo $fila['desde']; ?> al <?php echo $fila['hasta']; ?></td>
            <th>
                <div class="buttons">
                    <a href="eliminar.php?id=<?php echo $fila['id']; ?>"><span class="icon-cancel3"></span>Eliminar</a>
                </div>
            </th>
        </tr>
        <?php endforeach ?>
    </table>
    <?php
    }
     ?>
    </div>
<?php require '../../templates/admin/footer.php'; ?>