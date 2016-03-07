<?php require '../../sql/Conexion.php'; ?>
<?php require '../../sql/Crud.php'; ?>
<?php require '../../sql/nomina/Pago.php'; ?>
<?php require '../../templates/admin/antetitulo.php'; ?>
<title>Pago de Nómina - Policia Municipal</title>
<?php require '../../templates/admin/header.php'; ?>
<h2><span class="icon-coins"></span>Pago de Nómina</h2>
<div class="form-content">
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="cedula"><span class="icon-profile3"></span>Cedula de Identidad:</label></td>
                <td>
                	<select name="nac" class="combo-box">
                		<option value="V">V</option>
                		<option value="E">E</option>
                	</select>
                	<input type="text" name="cedula" id="cedula" class="write-box combo" placeholder="Ej: 123456789">
                </td>
                <td>
                    <input type="hidden" name="validar">
                    <input type="submit" value="Ok" class="button">
                </td>
            </tr>
        </table>
    </form>
</div>
<div class="form-content">
    <strong><?php echo $mensaje; ?></strong>
	<form action="" method="post">
		<table>
            <tr>
                <td><span class="icon-pencil"></span><b>Nombre:</b></td>
                <td><?php echo $nombre; ?></td>
            </tr>
            <tr>
                <td><span class="icon-profile3"></span><b>Nro. de Cedula:</b></td>
                <td><?php echo $ci; ?></td>
            </tr>
            <tr>
                <td><span class="icon-coins"></span><b>Nomina:</b></td>
                <td><?php echo $nomina; ?></td>
            </tr>
            <tr>
                <td><label for="bonos">Bonos:</label></td>
                <td><input type="number" name="bonos" id="bonos" class="write-box" value="<?php echo $bonos; ?>"></td>
            </tr>
            <tr>
                <td><label for="hex">Horas extras:</label></td>
                <td><input type="number" name="hex" id="hex" class="write-box" value="<?php echo $hex; ?>"></td>
            </tr>
            <tr>
                <td><label for="sueldo">Sueldo básico:</label></td>
                <td><input type="number" name="sueldo" id="sueldo" class="write-box" value="<?php echo $sueldo; ?>"></td>
            </tr>
            <tr>
                <td><label for="caja">Caja de ahorro:</label></td>
                <td><input type="number" name="caja" id="caja" class="write-box" value="<?php echo $caja; ?>"></td>
            </tr>
            <tr>
                <td><label for="seguro">Seguro social:</label></td>
                <td><input type="number" name="seguro" id="seguro" class="write-box" value="<?php echo $seguro; ?>"></td>
            </tr>
            <tr>
                <td><label for="cf">Carga familiar:</label></td>
                <td><input type="number" name="carga" id="cf" class="write-box" value="<?php echo $carga; ?>"></td>
            </tr>
            <tr>
                <td><label for="banavih">Banavih:</label></td>
                <td><input type="number" name="banavih" id="banavih" class="write-box" value="<?php echo $banavih; ?>"></td>
            </tr>
            <tr>
                <td><label for="funeraria">Funeraria:</label></td>
                <td><input type="number" name="funeraria" id="funeraria" class="write-box" value="<?php echo $funeraria; ?>"></td>
            </tr>
            <tr>
                <td><h3>Sueldo final:</h3></td>
                <td><strong><?php echo $resultado; ?></strong></td>
            </tr>
            <tr>
                <td>
                    <input type="hidden" name="accion" value="<?php echo $accion; ?>">
                    <input type="hidden" name="id_personal" value="<?php echo $id_personal; ?>">
                    <input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
                    <input type="hidden" name="cedula" value="<?php echo $ci; ?>">
                    <input type="hidden" name="nomina" value="<?php echo $nomina; ?>">
                    <input type="hidden" name="valido" value="<?php echo $valido; ?>">
                    <input type="hidden" name="pago">
                </td>
                <td>
                    <div class="buttons">
                        <input type="submit" value="Calcular y Guardar" class="button">
                    </div>
                </td>
            </tr>
        </table>
	</form>
</div>
<?php require '../../templates/admin/footer.php'; ?>