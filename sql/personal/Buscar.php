<?php 

if (isset($_POST['busqueda']))
{
    $nac = $_POST['nac'];
    $nroci = htmlspecialchars($_POST['cedula']);
    $cedula = $nac.$nroci;
    $model = new Crud();
    $model->select = "*";
    $model->from = "personal";
    $model->condition = "cedula='$cedula'";
    $model->Read();
    $filas = $model->rows;
    $total = count($filas);
}
else
{
	header("location:javascript:history.go(-1)");
}

?>