<?php 

$mensaje = null;
//Verificamos que se ejecute el formulario
if (isset($_POST['registrar']))
{
	//Inutilizamos los caracteres especiales en los campos para evitar ejecuciones de scripts
	$nombre = htmlspecialchars($_POST['nombre']);
	$usuario = htmlspecialchars($_POST['usuario']);
	$clave = htmlspecialchars($_POST['clave']);
	$confirmar = htmlspecialchars($_POST['confirmar']);
	$nac = $_POST['nac'];
	$nroci = htmlspecialchars($_POST['cedula']);
	$cedula = $nac.$nroci;
	$preg = htmlspecialchars($_POST['preg']);
	$resp = htmlspecialchars($_POST['resp']);
	//Verificamos que los campos no esten vacios ni con errores de formato
	if ($nombre == '')
	{
		$mensaje = '<span class="icon-warning2"></span>'."Debe ingresar un nombre";
	}
	elseif ($usuario == '')
	{
		$mensaje = '<span class="icon-warning2"></span>'."Debe ingresar un nombre de usuario";
	}
	elseif (strlen($usuario) < 10)
	{
		$mensaje = '<span class="icon-warning2"></span>'."El nombre de usuario debe tener al menos 10 caracteres";
	}
	elseif ($clave == '')
	{
		$mensaje = '<span class="icon-warning2"></span>'."Debe ingresar una clave de acceso";
	}
	elseif ($confirmar == '')
	{
		$mensaje = '<span class="icon-warning2"></span>'."Debe confirmar la clave de acceso";
	}
	elseif ($nroci == '')
	{
		$mensaje = '<span class="icon-warning2"></span>'."Debe introducir un numero de cedula";
	}
	elseif (!is_numeric($nroci))
	{
		$mensaje = '<span class="icon-warning2"></span>'."El numero de cedula ingresado no es valido, solo debe contener numeros";
	}
	elseif ($preg == '')
	{
		$mensaje = '<span class="icon-warning2"></span>'."Debe introducir una pregunta secreta, es indispensable para recuperar su clave en caso de olvidarla";
	}
	elseif (strlen($preg) < 10)
	{
		$mensaje = '<span class="icon-warning2"></span>'."Su pregunta secreta debe tener al menos 10 caracteres";
	}
	elseif ($resp == '')
	{
		$mensaje = '<span class="icon-warning2"></span>'."Debe introducir una respuesta secreta, es indispensable para recuperar su clave en caso de olvidarla";
	}
	//Verificamos si las claves son iguales
	elseif ($clave == $confirmar)
	{
		//Verificamos que el usuario que se este registrando ya no este guardado
		$model = new Crud;
		$model->select = "*";
		$model->from = "admin";
		$model->condition = "usuario='$usuario' OR cedula='$cedula'";
		$model->Read();
		$filas = $model->rows;
		$total = count($filas);
		//Si no lo esta entonces el sistema deberá guardarlo sin problemas
		if ($total == 0)
		{
			$model = new Crud;
			$model->into = "admin";
			$model->columns = "nombre, usuario, clave, cedula, pregunta, respuesta";
			$model->values = "'$nombre', '$usuario', '$clave', '$cedula', '$preg', '$resp'";
			$model->Create();
			$mensaje = $model->mensaje;
		}
		else
		{
			$mensaje = '<span class="icon-warning2"></span>'." El usuario con la cedula $cedula y/o nombre de usuario $usuario ya está registrado";
		}
		
	}
	else
	{
		$mensaje = '<span class="icon-warning2"></span> Las claves no coinciden, por favor escriba con calma';
	}
	
}

?>