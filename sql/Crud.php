<?php 

class Crud{
	
	//INSERTAR
	public $into;
	public $columns;
	public $values;
	public $mensaje;
	//SELECCIONAR
	public $select;
	public $from;
	public $condition;
	public $rows;
	//ACTUALIZAR
	public $update;
	public $set;
	//BORRAR
	public $deleteFrom;

	public function Create()
	{
		$model = new Conexion;
		$conexion = $model->conectar();
		$into = $this->into;
		$columns = $this->columns;
		$values = $this->values;
		$sql = "INSERT INTO $into ($columns) VALUES ($values)";
		$consulta = $conexion->prepare($sql);
		if (!$consulta)
		{
			$this->mensaje = '<span class=" icon-cancel2"></span>'."Error al crear registro";
		}
		else
		{
			$consulta->execute();
			$this->mensaje = '<span class="icon-checkmark"></span>'."Registro creado con exito";
		}
		
	}

	public function Read()
	{

		$model = new Conexion();
		$conexion = $model->conectar();
		$select = $this->select;
		$from = $this->from;
		$condition = $this->condition;
		if ($condition != '') 
		{
			$condition = " WHERE ".$condition;
		}
		$sql = "SELECT $select FROM $from $condition";
		$consulta = $conexion->prepare($sql);
		$consulta->execute();

		while ($filas = $consulta->fetch()) 
		{
			$this->rows[] = $filas;
		}

	}

	public function Update()
	{
		$model = new Conexion;
		$conexion = $model->conectar();
		$update = $this->update;
		$set = $this->set;
		$condition = $this->condition;
		if ($condition != '') 
		{
			$condition = " WHERE ".$condition;
		}
		$sql = "UPDATE $update SET $set $condition";
		$consulta = $conexion->prepare($sql);
		if (!$consulta)
		{
			$this->mensaje = '<span class=" icon-cancel2"></span>'."Ha ocurrido un error al actualizar el registro";
		}
		else
		{
			$consulta->execute();
			$this->mensaje = '<span class="icon-checkmark"></span>'."El registro fue actualizado con exito";
		}
	}

	public function Delete()
	{
		$model = new Conexion;
		$conexion = $model->conectar();
		$deleteFrom = $this->deleteFrom;
		$condition = $this->condition;
		if ($condition != '')
		{
			$condition = " WHERE ".$condition;
		}
		$sql = "DELETE FROM $deleteFrom $condition";
		$consulta = $conexion->prepare($sql);
		if (!$consulta)
		{
			$this->mensaje = '<span class=" icon-cancel2"></span>'."Error al eliminar registro";
		}
		else
		{
			$consulta->execute();
			$this->mensaje = '<span class="icon-checkmark"></span>'."Registro eliminado con exito";
		}
		
	}

}

 ?>