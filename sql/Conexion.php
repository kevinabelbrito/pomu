<?php 

class Conexion{
	public function conectar(){
		$usuario = "root";
		$password = "kevin";
		$host = "localhost";
		$db = "pomu";

		return $conexion = new PDO("mysql:host=$host;dbname=$db", $usuario, $password);
	}
}

 ?>