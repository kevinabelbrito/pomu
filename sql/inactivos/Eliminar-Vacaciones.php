<?php

if (isset($_GET['id']))
{
	$id = htmlspecialchars($_GET['id']);
	if (!is_numeric($id))
	{
		header("location:../../admin/vacaciones");
	}
	else
	{
		$model = new Crud;
		$model->deleteFrom = "inactivos";
		$model->condition = "id=$id";
		$model->Delete();
		header("location:../../admin/vacaciones");
	}
	
}
else
{
	header("location:../../admin/vacaciones");
}

?>