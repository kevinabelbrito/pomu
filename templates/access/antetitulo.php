<?php 

session_start();
if (isset($_SESSION['login']))
{
	header("location://localhost/pomu/admin");
}
else
{
	//nos deja aquí
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">