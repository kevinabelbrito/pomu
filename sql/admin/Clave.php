<?php

if (isset($_GET['id']))
{
	$id = $_GET['id'];
	$model = new Crud;
	$model->select = "*";
	$model->from = "admin";
	$model->condition = "id=$id";
	$model->Read();
	$filas = $model->rows;
	foreach ($filas as $fila)
	{
		$id = $fila['id'];
		$clave_actual = $fila['clave'];
	}
}

$mensaje = null;
if (isset($_POST['actualizar']))
{
	$id = $_POST['id'];
	$clave_actual = $_POST['clave_actual'];
	$clave = htmlspecialchars($_POST['clave']);
	$nclave = htmlspecialchars($_POST['nclave']);
	$confirmar = htmlspecialchars($_POST['confirmar']);
	if ($clave == '')
	{
		$mensaje = '<span class="icon-warning"></span>'."Debe indicar la clave actual";
	}
	elseif ($nclave == '')
	{
		$mensaje = '<span class="icon-warning"></span>'.'Debe indicar la nueva clave';
	}
	elseif ($confirmar == '')
	{
		$mensaje = '<span class="icon-warning"></span>'.'Debe confirmar la nueva clave';
	}
	elseif ($nclave != $confirmar)
	{
		$mensaje = '<span class="icon-warning"></span>'.'Las claves deben coincidir';
	}
	else
	{
		$model = new Crud;
		$model->select = "clave";
		$model->from = "admin";
		$model->condition = "id=$id AND clave='$clave'";
		$model->Read();
		$filas = $model->rows;
		$total = count($filas);
		if ($total == 0)
		{
			$mensaje = '<span class="icon-warning"></span>'."La clave actual ingresada es incorrecta";
		}
		else
		{
			$clave_actual = $clave;
			$model = new Crud;
			$model->update = "admin";
			$model->set = "clave='$nclave'";
			$model->condition = "id=$id AND clave='$clave'";
			$model->Update();
			$mensaje = '<span class="icon-checkmark"></span>'."La clave ha sido cambiada con éxito";
		}
		
	}
}
?>