<?php 

$mensaje = null;
if (isset($_GET['id']))
{
	$id = $_GET['id'];
	$model = new Crud;
	$model->select = "*";
	$model->from = "personal";
	$model->condition = "id=$id";
	$model->Read();
	$filas = $model->rows;
	$total = count($filas);
	foreach ($filas as $fila)
	{
		$id = $fila['id'];
		$correo = $fila['correo'];
		$telefono = $fila['telefono'];
		$residencia = $fila['residencia'];
		$cursos = $fila['cursos'];
		$experiencia = $fila['experiencia'];
		$formacion = $fila['formacion'];
		$nomina = $fila['nomina'];
	}
}
if (isset($_POST['actualizar']))
{
	$id = $_POST['id'];
	$correo = htmlspecialchars($_POST['correo']);
	$telefono = htmlspecialchars($_POST['phone']);
	$residencia = htmlspecialchars($_POST['residencia']);
	$cursos = htmlspecialchars($_POST['cursos']);
	$experiencia = htmlspecialchars($_POST['experiencia']);
	$formacion = $_POST['foraca'];
	$nomina = $_POST['nomina'];
	//Ejecutamos la actualización
	$model = new Crud;
	$model->update = "personal";
	$model->set = "correo='$correo', telefono='$telefono', residencia='$residencia', cursos='$cursos', experiencia='$experiencia', formacion='$formacion', nomina='$nomina'";
	$model->condition = "id=$id";
	$model->Update();
	$mensaje = $model->mensaje;
}

?>