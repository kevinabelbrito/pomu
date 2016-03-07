<?php 

$mensaje = null;
$valido = 0;
$nombre = null;
$ci = null;
$nomina = null;
if (isset($_POST['validar']))
{
	$nac = $_POST['nac'];
	$nroci = htmlspecialchars($_POST['cedula']);
	$cedula = $nac.$nroci;
	//validamos los campos
	if ($nroci == '')
	{
		$mensaje = '<span class=" icon-warning"></span>'."Indique el numero de cedula";
	}
	elseif (!is_numeric($nroci))
	{
		$mensaje = '<span class=" icon-warning"></span>'."La cedula son solo numeros";
	}
	else
	{
		$model = new Crud;
	    $model->select = "*";
	    $model->from = "personal";
	    $model->condition = "cedula='$cedula'";
	    $model->Read();
	    $filas = $model->rows;
	    $total = count($filas);
	    if ($total == 0)
	    {
	    	$mensaje = '<span class=" icon-warning"></span>'."No se encuentra registrado ningun personal con el Nro. de cedula: $cedula";
	    	$valido = 0;
            $nombre = null;
            $ci = null;
            $nomina = null;
	    }
	    else
	    {
	    	$valido = 1;
	    	foreach ($filas as $fila)
	        {
	    	   $id_personal = $fila['id'];
	    	   $nombre = $fila['nombre'];
	    	   $ci = $fila['cedula'];
	    	   $nomina = $fila['nomina'];
	        }
	    }
	    
	}
	
}
if (isset($_POST['inactivos']))
{
	$desde = htmlspecialchars($_POST['desde']);
	$hasta = htmlspecialchars($_POST['hasta']);
	$date = date("Y-m-d");
	$id_personal = $_POST['id_personal'];
	$nombre = $_POST['nombre'];
	$ci = $_POST['cedula'];
	$nomina = $_POST['nomina'];
	$valido = $_POST['valido'];
	$motivo = $_POST['motivo'];
	if ($valido > 0)
	{
		if ($desde == '')
		{
			$mensaje = '<span class=" icon-warning"></span>'."Indique una fecha de comienzo";
		}
		elseif ($hasta == '')
		{
			$mensaje = '<span class=" icon-warning"></span>'."Indique una fecha de culminación";
		}
		elseif ($desde > $hasta)
		{
			$mensaje = '<span class=" icon-warning"></span>'."La fecha de inicio no puede ser superior a la fecha de culminación";
		}
		elseif ($hasta < $date)
		{
			$mensaje = '<span class=" icon-warning"></span>'."La fecha de culminacion no puede ser menor a la fecha actual";
		}
		else
		{
			$model = new Crud;
			$model->select = "*";
			$model->from = "inactivos";
			$model->condition = "id_personal=$id_personal";
			$model->Read();
			$filas = $model->rows;
			$total = count($filas);
			if ($total == 0)
			{
				$model = new Crud;
				$model->into = "inactivos";
				$model->columns = "id_personal, desde, hasta, motivo";
				$model->values = "$id_personal, '$desde', '$hasta', '$motivo'";
				$model->Create();
				$mensaje = '<span class="icon-checkmark"></span>'."El periodo de $motivo han sido asignado con exito";
				$nombre = null;
                $ci = null;
                $nomina = null;
				$valido = 0;
			}
			else
			{
				$mensaje = '<span class=" icon-warning"></span>'."Este personal ya se ecuentra en periodo de vacaciones o reposo";
			}
		}
	}
	else
	{
		$mensaje = '<span class=" icon-warning"></span>'."Debe validar el personal para poder registrar el periodo de $motivo";
		$valido = 0;
        $nombre = null;
        $ci = null;
        $nomina = null;
	}
}

?>