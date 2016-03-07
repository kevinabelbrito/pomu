<?php require '../../sql/Conexion.php'; ?>
<?php require '../../sql/Crud.php'; ?>
<?php require '../../sql/inactivos/Agregar.php'; ?>
<?php require '../../templates/admin/antetitulo.php'; ?>
<title>Dar vacaciones a personal - Policia Municipal</title>
<?php require '../../templates/admin/header.php'; ?>
<h2><span class="icon-suitcase2"></span>Dar vacaciones a personal</h2>
<div class="form-content">
    <strong><?php echo $mensaje; ?></strong>
        <table>
            <form action="" method="post">
            <tr>
                <td><label for="cedula"><span class="icon-profile3"></span>C.I del personal:</label></td>
                <td>
                    <select name="nac" class="combo-box">
                        <option value="V">V</option>
                        <option value="E">E</option>
                    </select>
                    <input type="text" name="cedula" id="cedula" class="write-box combo" maxlength="9">
                </td>
                <tr>
                    <td><input type="hidden" name="validar"></td>
                    <td><input type="submit" value="Validar personal" class="button"></td>
                </tr>
            </tr>
        </form>
            <tr>
                <td><span class="icon-pencil"></span>Nombre:</td>
                <td><?php echo $nombre; ?></td>
            </tr>
            <tr>
                <td><span class="icon-profile3"></span>Nro. de cedula:</td>
                <td><?php echo $ci; ?></td>
            </tr>
            <tr>
                <td><span class="icon-coins"></span>Nómina:</td>
                <td><?php echo $nomina; ?></td>
            </tr>
            <form action="" method="post">
            <tr>
                <td><label><span class="icon-calendar2"></span>Periodo:</label></td>
                <td><label for="desde">desde:</label><input type="date" name="desde" id="desde" class="write-box" placeholder="año-mes-dia"> 
                    </td>
            </tr>
            <tr>
                <td></td>
                <td><label for="hasta">hasta:</label><input type="date" name="hasta" id="hasta" class="write-box" placeholder="año-mes-dia"></td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="id_personal" value="<?php echo $id_personal; ?>">
                    <input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
                    <input type="hidden" name="cedula" value="<?php echo $ci; ?>">
                    <input type="hidden" name="nomina" value="<?php echo $nomina; ?>">
                    <input type="hidden" name="motivo" value="vacaciones">
                    <input type="hidden" name="inactivos">
                    <input type="hidden" name="valido" value="<?php echo $valido; ?>">
                </td>
                <td>
                    <input type="submit" value="Guardar" class="button">
                </td>
            </tr>
           </form>  
        </table>
</div>
<?php require '../../templates/admin/footer.php'; ?>