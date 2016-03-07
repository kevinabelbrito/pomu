<?php 

$mensaje = null;
if (isset($_POST['registrar']))
{
	$nombre = htmlspecialchars($_POST['nombre']);
	$nac = $_POST['nac'];
	$nroci = htmlspecialchars($_POST['cedula']);
	$cedula = $nac.$nroci;
	$fn = htmlspecialchars($_POST['fn']);
	$ln = htmlspecialchars($_POST['ln']);
	$correo = htmlspecialchars($_POST['correo']);
	$linea = $_POST['linea'];
	$nrotel = htmlspecialchars($_POST['phone']);
	$phone = $linea."-".$nrotel;
	$residencia = htmlspecialchars($_POST['residencia']);
	$cursos = htmlspecialchars($_POST['cursos']);
	$experiencia = htmlspecialchars($_POST['experiencia']);
	$foraca = $_POST['foraca'];
	$nomina = $_POST['nomina'];

	if ($nombre == '')
	{
		$mensaje = '<span class=" icon-warning"></span>'."Debe ingresar el nombre";
	}
	elseif (!is_numeric($nroci))
	{
		$mensaje = '<span class=" icon-warning"></span>'."el Nro de Cedula debe ser numerico";
	}
	elseif ($fn == '')
	{
		$mensaje = '<span class=" icon-warning"></span>'."Debe ingresar la fecha de nacimiento";
	}
	elseif ($ln == '')
	{
		$mensaje = '<span class=" icon-warning"></span>'."Debe ingresar el lugar de nacimiento";
	}
	elseif ($correo == '')
	{
		$mensaje = '<span class=" icon-warning"></span>'."Debe ingresar un correo electronico";
	}
	elseif (!is_numeric($nrotel))
	{
		$mensaje = '<span class=" icon-warning"></span>'."El Nro de telefono solo debe contener numeros";
	}
	elseif ($residencia == '')
	{
		$mensaje = '<span class=" icon-warning"></span>'."Debe ingresar el lugar de residencia";
	}
	elseif ($cursos == '')
	{
		$mensaje = '<span class=" icon-warning"></span>'."Debe ingresar al menos un curso";
	}
	elseif ($experiencia == '')
	{
		$mensaje = '<span class=" icon-warning"></span>'."Debe ingresar al menos una experiencia";
	}
	elseif ($foraca == '')
	{
		$mensaje = '<span class=" icon-warning"></span>'."Indique la formación academica";
	}
	elseif ($nomina == '')
	{
		$mensaje = '<span class=" icon-warning"></span>'."Indique la nomina del trabajador";
	}
	else
	{
		$model = new Crud;
		$model->select = "cedula";
		$model->from = "personal";
		$model->condition = "cedula='$cedula'";
		$model->Read();
		$filas = $model->rows;
		$total = count($filas);
		if ($total == 0)
		{
			$model = new Crud;
		    $model->into = "personal";
		    $model->columns = "nombre, cedula, fechanac, lugarnac, correo, telefono, residencia, cursos, experiencia, formacion, nomina";
		    $model->values = "'$nombre', '$cedula', '$fn', '$ln', '$correo', '$phone', '$residencia', '$cursos', '$experiencia', '$foraca', '$nomina'";
		    $model->Create();
		    $mensaje = $model->mensaje;
		}
		else
		{
			$mensaje = '<span class=" icon-warning"></span>'."El trabajador con el Nro. de cedula $cedula ya esta registrado.";
		}
	}
}

 ?>