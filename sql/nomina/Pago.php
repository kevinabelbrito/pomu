<?php 

$mensaje = null;
$valido = 0;
$nombre = null;
$ci = null;
$nomina = null;
$calcular;
$resultado = null;
$accion = null;
$bonos = null;
$hex = null;
$sueldo = null;
$caja = null;
$seguro = null;
$carga = null;
$banavih = null;
$funeraria = null;
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
            $resultado = null;
            $accion = null;
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
	        $model = new Crud;
			$model->select = "*";
			$model->from = "nomina";
			$model->condition = "id_personal=$id_personal";
			$model->Read();
			$filas = $model->rows;
			$total = count($filas);
			if ($total == 0)
			{
				$accion = "nueva";
				$mensaje = '<span class="icon-checkmark"></span>'."Aun no ha calculado la nomina por primera vez";
			}
			else
			{
				foreach ($filas as $fila)
				{
					$id_personal = $fila['id_personal'];
					$bonos = $fila['bonos'];
					$hex = $fila['hex'];
					$sueldo = $fila['sueldo'];
					$caja = $fila['caja'];
					$seguro = $fila['seguro'];
					$carga = $fila['carga'];
					$banavih = $fila['banavih'];
					$funeraria = $fila['funeraria'];
				}
				$accion = "actualizar";
				$mensaje = '<span class="icon-checkmark"></span>'."Ya calculó la nomina antes, puede actualizarla si lo desea";
			}
	    }
}
}
if (isset($_POST['pago']))
{
	$id_personal = $_POST['id_personal'];
	$nombre = $_POST['nombre'];
	$ci = $_POST['cedula'];
	$nomina = $_POST['nomina'];
	$valido = $_POST['valido'];
	$accion = $_POST['accion'];
	$bonos = htmlspecialchars($_POST['bonos']);
	$hex = htmlspecialchars($_POST['hex']);
	$sueldo = htmlspecialchars($_POST['sueldo']);
	$caja = htmlspecialchars($_POST['caja']);
	$seguro = htmlspecialchars($_POST['seguro']);
	$carga = htmlspecialchars($_POST['carga']);
	$banavih = htmlspecialchars($_POST['banavih']);
	$funeraria = htmlspecialchars($_POST['funeraria']);
	if ($valido > 0)
	{
		if (!is_numeric($bonos) || !is_numeric($hex) || !is_numeric($sueldo) || !is_numeric($caja) || !is_numeric($seguro) || !is_numeric($carga) || !is_numeric($banavih) || !is_numeric($funeraria))
		{
			$mensaje = '<span class=" icon-warning"></span>'."Ingrese solo numeros";
		}
		else
		{
			$calcular = $bonos + $hex + $sueldo - $caja - $seguro - $carga - $banavih - $funeraria;
			$resultado = "Bs. ".number_format($calcular, 2, ',', '.');
			if ($accion == 'nueva')
			{
				$model = new Crud;
				$model->into = "nomina";
				$model->columns = "id_personal, bonos, hex, sueldo, caja, seguro, carga, banavih, funeraria";
				$model->values = "$id_personal, $bonos, $hex, $sueldo, $caja, $seguro, $carga, $banavih, $funeraria";
				$model->Create();
				$mensaje = '<span class="icon-checkmark"></span>'."Los datos de la nomina han sido guardados con éxito";
				$accion = "actualizar";
			}
			else
			{
				$model = new Crud;
				$model->update = "nomina";
				$model->set = "bonos=$bonos, hex=$hex, sueldo=$sueldo, caja=$caja, seguro=$seguro, carga=$carga, banavih=$banavih, funeraria=$funeraria";
				$model->condition = "id_personal=$id_personal";
				$model->Update();
				$mensaje = '<span class="icon-checkmark"></span>'."Se actualizo la nomina con éxito";
			}
			
		}
	}
	else
	{
		$mensaje = '<span class=" icon-warning"></span>'."Debe validar un personal para poder calcular su nomina";
		$bonos = null;
        $hex = null;
        $sueldo = null;
        $caja = null;
        $seguro = null;
        $carga = null;
        $banavih = null;
        $funeraria = null;
	}
	}
?>