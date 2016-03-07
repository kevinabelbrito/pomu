<?php 

class Seleccionar{
	public $usuario;
	public $clave;
	public $mensaje;

	public function login(){
		$model = new Conexion;
		$conexion = $model->conectar();
		$sql = 'SELECT * FROM admin WHERE ';
		$sql .='usuario=:usuario AND clave=:clave';
		$consulta = $conexion->prepare($sql);
		$consulta->bindParam(':usuario', $this->usuario, PDO::PARAM_STR);
		$consulta->bindParam(':clave', $this->clave, PDO::PARAM_STR);
		$consulta->execute();
		$total = $consulta->rowCount();
		if ($total == 0) {
			$this->mensaje = '<span class="icon-warning2"></span> Error al iniciar sesión: el usuario y/o la contraseña son incorrectos';
		} else {
			$fila = $consulta->fetch();
			session_start();
			$_SESSION['login'] = true;
			$_SESSION['id'] = $fila['id'];
			$_SESSION['nombre'] = $fila['nombre'];
			$_SESSION['usuario'] = $fila['usuario'];
			$_SESSION['clave'] = $fila['clave'];
			$_SESSION['cedula'] = $fila['cedula'];
			$_SESSION['pregunta'] = $fila['pregunta'];
			$_SESSION['respuesta'] = $fila['respuesta'];
			header("location:admin/");
		}
		
	}
}

 ?>