<?php 

$mensaje= null;
$serialkeys = "akbfh57u4ruo19pj";
if (isset($_POST['key']))
{
	$serial = htmlspecialchars($_POST['serial']);
	if ($serial == '')
	{
		$mensaje = '<span class="icon-warning2"></span>'."Introdusca un serial keys para continuar";
	}
	elseif ($serial == $serialkeys)
	{
		header("location://localhost/pomu/registro/registro.php");
	}
	else
	{
		$mensaje = '<span class="icon-warning2"></span> El serial keys ingresado es incorrecto';
	}
	
}

?>