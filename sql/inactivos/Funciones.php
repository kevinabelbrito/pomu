<?php 

function obtener_cedula($id_personal)
{
	$model = new Crud;
	$model->select = "cedula";
	$model->from = "personal";
	$model->condition = "id=$id_personal";
	$model->Read();
	$filas = $model->rows;
	foreach ($filas as $fila)
	{
		$cedula = $fila['cedula'];
	}
	return $cedula;
}

function obtener_nombre($id_personal)
{
	$model = new Crud;
	$model->select = "nombre";
	$model->from = "personal";
	$model->condition = "id=$id_personal";
	$model->Read();
	$filas = $model->rows;
	foreach ($filas as $fila)
	{
		$nombre = $fila['nombre'];
	}
	return $nombre;
}

function obtener_nomina($id_personal)
{
	$model = new Crud;
	$model->select = "nomina";
	$model->from = "personal";
	$model->condition = "id=$id_personal";
	$model->Read();
	$filas = $model->rows;
	foreach ($filas as $fila)
	{
		$nomina = $fila['nomina'];
	}
	return $nomina;
}

?>