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
		$usuario = $fila['usuario'];
		$pregunta = $fila['pregunta'];
		$respuesta = $fila['respuesta'];
	}
}

$mensaje = null;
if (isset($_POST['actualizar']))
{
	$id = $_POST['id'];
	$usuario = htmlspecialchars($_POST['usuario']);
	$pregunta = htmlspecialchars($_POST['pregunta']);
	$respuesta = htmlspecialchars($_POST['respuesta']);
	if ($usuario == '')
	{
		$mensaje = '<span class="icon-warning"></span>'."Debe ingresar un nombre de usuario";
	}
	elseif (strlen($usuario) < 10)
	{
		$mensaje = '<span class="icon-warning"></span>'."El usuario debe tener al menos 10 caracteres";
	}
	elseif ($pregunta == '')
	{
		$mensaje = '<span class="icon-warning"></span>'."Debe ingresar una pregunta secreta";
	}
	elseif (strlen($pregunta) < 10)
	{
		$mensaje = '<span class="icon-warning"></span>'."La pregunta secreta debe tener al menos 10 caractetes";
	}
	elseif ($respuesta == '')
	{
		$mensaje = '<span class="icon-warning"></span>'."Debe ingresar una respuesta secreta";
	}
	else
	{
		$model = new Crud;
		$model->update = "admin";
		$model->set = "usuario='$usuario', pregunta='$pregunta', respuesta='$respuesta'";
		$model->condition = "id=$id";
		$model->Update();
		$mensaje = $model->mensaje;
	}
}

?>