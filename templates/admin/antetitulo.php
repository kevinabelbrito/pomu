<?php 

session_start();
$mensaje_admin = null;
if ($_SESSION['login'] == true)
{
	$id_admin = $_SESSION['id'];
	$nombre_admin = $_SESSION['nombre'];
	$usuario_admin = $_SESSION['usuario'];
	$clave_admin = $_SESSION['clave'];
	$cedula_admin = $_SESSION['cedula'];
	$pregunta_admin = $_SESSION['pregunta'];
	$respuesta_admin = $_SESSION['respuesta'];
	$mensaje_admin = "Bienvenido, $nombre_admin";
}
else
{
	session_unset();
	session_destroy();
	header("location://localhost/pomu");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">