<?php 

$mensaje = null;
$recuperada = null;
if (isset($_POST['recuperar']))
{
	//Inutilizamos los caracteres especiales para evitar que se ejecuten scripts
	$nac = $_POST['nac'];
	$nroci = htmlspecialchars($_POST['cedula']);
	$cedula = $nac.$nroci;
	$preg = htmlspecialchars($_POST['preg']);
	$resp = htmlspecialchars($_POST['resp']);
	if ($nroci == '')
	{
		$mensaje = "Debe indicar un numero de cedula";
	}
	elseif (!is_numeric($nroci))
	{
		$mensaje = "El numero de cedula ingresado no es valido, debe contener solo numeros";
	}
	elseif ($preg == '')
	{
		$mensaje = "Debe indicar una pregunta secreta";
	}
	elseif ($resp == '')
	{
		$mensaje = "Debe indicar una respuesta secreta";
	}
	else
	{
	//Verificamos que los datos esten en la base de datos
	$model = new Crud;
	$model->select = "*";
	$model->from = "admin";
	$model->condition = "cedula='$cedula' AND pregunta='$preg' AND respuesta='$resp'";
	$model->Read();
	$filas = $model->rows;
	$total = count($filas);
	if ($total == 0)
	{
		$mensaje = '<span class="icon-warning2"></span>'." Los datos ingresados son incorrectos, no se ha podido recuperar la clave";
	}
	else
	{
		foreach ($filas as $fila)
		{
			$recuperada = '<span class="icon-user"></span>'."Usuario: ".$fila['usuario']."<br>".'<span class="icon-locked"></span>'."Clave: ".$fila['clave'];
		}
		$mensaje = '<span class="icon-checkmark"></span>'."El Usuario y la Clave ha sido recuperada con éxito";
	}
	}
	
	
}

?>