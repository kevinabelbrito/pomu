<?php 

$mensaje = null;
if (isset($_GET['id']))
{
	$id = $_GET['id'];
	$model = new Crud;
	$model->select = "*";
	$model->from = "pasantes";
	$model->condition = "id=$id";
	$model->Read();
	$filas = $model->rows;
	$total = count($filas);
	foreach ($filas as $fila)
	{
		$id = $fila['id'];
		$correo = $fila['correo'];
		$telefono = $fila['telefono'];
		$universidad = $fila['universidad'];
		$especialidad = $fila['especialidad'];
		$desde = $fila['desde'];
		$hasta = $fila['hasta'];
	}
}

if (isset($_POST['actualizar']))
{
	$id = $_POST['id'];
	$correo = htmlspecialchars($_POST['correo']);
	$telefono = htmlspecialchars($_POST['telefono']);
	$universidad = htmlspecialchars($_POST['universidad']);
	$especialidad = htmlspecialchars($_POST['especialidad']);
	$desde = $_POST['desde'];
	$hasta = $_POST['hasta'];
	$date = date("Y-m-d");
	if ($correo == '')
	{
		$mensaje = '<span class=" icon-warning"></span>'."Debe ingresar una dirección de correo";
	}
	elseif ($telefono == '')
	{
		$mensaje = '<span class=" icon-warning"></span>'."Debe ingresar un numero de telefono";
	}
	elseif ($universidad == '')
	{
		$mensaje = '<span class=" icon-warning"></span>'."Debe indicar a que universidad pertenece el pasante";
	}
	elseif ($especialidad == '')
	{
		$mensaje = '<span class=" icon-warning"></span>'."Debe indicar la especialidad del pasante";
	}
	elseif ($desde == '')
	{
		$mensaje = '<span class=" icon-warning"></span>'."Debe indicar cuando comienza la pasantia";
	}
	elseif ($hasta == '')
	{
		$mensaje = '<span class=" icon-warning"></span>'."Debe indicar cuando culmina la pasantia";
	}
	elseif ($hasta < $date)
	{
		$mensaje = '<span class=" icon-warning"></span>'."La fecha de culminacion de la pasantia no puede ser menor a la fecha actual";
	}
	elseif ($desde > $hasta)
	{
		$mensaje = '<span class=" icon-warning"></span>'."la fecha de comienzo no puede ser mayor a la fecha de culminacion de la pasantia";
	}
	else
	{
		//Ejecutamos la actualización
	    $model = new Crud;
	    $model->update = "pasantes";
	    $model->set = "correo='$correo', telefono='$telefono', universidad='$universidad', especialidad='$especialidad', desde='$desde', hasta='$hasta'";
	    $model->condition = "id=$id";
	    $model->Update();
	    $mensaje = $model->mensaje;
	}
	
}

?>