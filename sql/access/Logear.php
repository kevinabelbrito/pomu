<?php 

$mensaje = null;
if (isset($_POST['login']))
{
	//Filtramos los campos del formulario para evitar ataques
	$usuario = htmlspecialchars($_POST['usuario']);
	$clave = htmlspecialchars($_POST['clave']);
	//Verificamos que los campos no esten vacios
	if ($usuario == '')
	{
		$mensaje = '<span class="icon-warning2"></span>'."Debe ingresar un nombre de usuario";
	}
	elseif ($clave == '')
	{
		$mensaje = '<span class="icon-warning2"></span>'."Debe ingresar una contraseña";
	}
	else
	{
		//Si los campos no estan vacios verificamos que sean correctos
		$model = new Seleccionar();
        $model->usuario = $usuario;
        $model->clave = $clave;
        $model->login();
        $mensaje = $model->mensaje;
	}
  
}

 ?>