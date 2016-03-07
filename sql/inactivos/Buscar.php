<?php 

$mensaje = null;
if (isset($_POST['busqueda']))
{
    $motivo = $_POST['motivo'];
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
    if ($total == 0)
    {
        $mensaje = '<span class=" icon-warning"></span>'."El personal con el Nro. de cedula $cedula no se encuentra registrado";
    }
    else
    {
        foreach ($filas as $fila)
        {
            $id_personal = $fila['id'];
        }
        $model = new Crud();
        $model->select = "*";
        $model->from = "inactivos";
        $model->condition = "id_personal=$id_personal AND motivo='$motivo'";
        $model->Read();
        $filas = $model->rows;
        $total = count($filas);
    }
    
}
else
{
	header("location:javascript:history.go(-1)");
}

?>