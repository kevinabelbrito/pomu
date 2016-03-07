<?php 

$mensaje = null;

if (isset($_POST['registrar']))
{
	//Comprobando que los campos no tengan scripts y asignandoles variables
	$nombre = htmlspecialchars($_POST['nombre']);
	$nac = $_POST['nac'];
	$nroci = htmlspecialchars($_POST['cedula']);
	$cedula = $nac.$nroci;
	$correo = htmlspecialchars($_POST['correo']);
	$linea = $_POST['linea'];
	$nrotel = htmlspecialchars($_POST['telefono']);
	$telefono = $linea."-".$nrotel;
	$universidad = htmlspecialchars($_POST['universidad']);
	$especialidad = htmlspecialchars($_POST['especialidad']);
	//Periodo
	$desde = $_POST['desde'];
	$hasta = $_POST['hasta'];
	$date = date("Y-m-d");
	//Comprobando que los campos no esten vacios
	if ($nombre == '')
	{
		$mensaje = '<span class=" icon-warning"></span>'."Debe ingresar el nombre del pasante";
	}
	elseif (!is_numeric($nroci))
	{
		$mensaje = '<span class=" icon-warning"></span>'."La cedula de identidad esta compuesta solo por numero";
	}
	elseif ($nroci == '')
	{
		$mensaje = '<span class=" icon-warning"></span>'."Ingrese el numero de cedula del pasante";
	}
	elseif ($correo == '')
	{
		$mensaje = '<span class=" icon-warning"></span>'."Ingrese una dirección de correo electrónico";
	}
	elseif ($nrotel == '')
	{
		$mensaje = '<span class=" icon-warning"></span>'."Ingrese un numero de telefono";
	}
	elseif (!is_numeric($nrotel))
	{
		$mensaje = '<span class=" icon-warning"></span>'."El numero de telefono no debe contener letras ni caracteres";
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
		$mensaje = '<span class=" icon-warning"></span>'."Indique la fecha de comienzo de la pasantia";
	}
	elseif ($hasta == '')
	{
		$mensaje = '<span class=" icon-warning"></span>'."Indique la fecha de culminación de la pasantia";
	}
	elseif ($desde > $hasta)
	{
		$mensaje = '<span class=" icon-warning"></span>'."La fecha de inicio no puede ser mayor a la fecha de culminación de la pasantia";
	}
	elseif ($hasta < $date)
	{
		$mensaje = '<span class=" icon-warning"></span>'."La fecha de culminacion no puede ser menor a la fecha actual";
	}
	else
	{
		//realizamos la consulta para verificar que el pasante no haya sido registrado previamente
		$model = new Crud;
		$model->select = "cedula";
		$model->from = "pasantes";
		$model->condition = "cedula='$cedula'";
		$model->Read();
		$filas = $model->rows;
		$total = count($filas);
		if ($total == 0)//Si no hay un registro con la cedula ingresada en el formulario el sistema debe registrar
		{
			$model = new Crud;
			$model->into = "pasantes";
			$model->columns = "nombre, cedula, correo, telefono, universidad, especialidad, desde, hasta";
			$model->values = "'$nombre', '$cedula', '$correo', '$telefono', '$universidad', '$especialidad', '$desde', '$hasta'";
			$model->Create();
			$mensaje = $model->mensaje;
		}
		else//pero si ya existe la cedula el sistema no puede volver a registrar nada con la misma cedula
		{
			$mensaje = '<span class=" icon-warning"></span>'."El pasante con el Nro. de Cedula $cedula ya está registrado en el sistema";
		}
		
	}

}

 ?>